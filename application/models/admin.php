<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {  
	
    public function values($category, $search, $page){
        
        if(!empty($search)) {
            $search = $search['search'];
            $search = "%" . $search . "%";
        } else 
        {
            $search = "%";
        }
        if (empty($page)){
            $page = 0;
        } else {
            $page = (int)$page;
        }
        
        return array($category, $search, $page);
    }

//================ Get all products for the admin products page =============================
	public function get_products($category, $search, $page) {

        $query = "  SELECT products.*, categories.name AS category, 
                    SUM(quantity) AS quantity, photo_url from products

                    LEFT JOIN product_categories ON product_categories.product_id = products.id
                    LEFT JOIN categories ON product_categories.category_id = categories.id
                    LEFT JOIN product_orders ON product_orders.product_id = products.id
                    LEFT JOIN images ON products.id = images.product_id
                    WHERE categories.name OR
                    products.id OR products.name LIKE ?
                    GROUP BY products.id
                    LIMIT ?, 5";

        $values = $this->values($category, $search, $page);

        return array($this->db->query($query, array($values[1], $values[2]) ) -> result_array(), $values);
    }

// ==========Get all orders grouped by orders id for admin orders page ============================
    public function get_orders($search = '%', $page = 0, $sort = 3){

        $page = 5 * (int)$page;

        if ($search != '%'){
            $search_input = '%' . $search . '%';
        } else {
            $search_input = $search;
        }

        switch($sort){
            case 0: $sort_input = '%cancel%';
            break;
            case 1: $sort_input = '%process%';
            break;
            case 2: $sort_input = '%ship%';
            break;
            case 3: $sort_input = '%';
        }

        $values = array( $search_input, $sort_input, $page );

        $query = "  SELECT orders.id AS order_id, orders.created_at AS order_date, orders.status_id AS order_status, 
                    customers.id AS customer_id, CONCAT_WS(' ', customers.first_name, customers.lASt_name) AS customer_name, 
                    CONCAT(CONCAT_WS(' ', addresses.street, addresses.city), ', ', addresses.state, ' ', addresses.zipcode) 
                    AS billing_address, sum(products.price * product_orders.quantity) AS total, statuses.status, addresses.street, addresses.city FROM orders

                    LEFT JOIN product_orders ON product_orders.order_id = orders.id
                    LEFT JOIN customers ON customers.id = orders.user_id
                    LEFT JOIN addresses ON addresses.id = customers.address_id
                    LEFT JOIN products ON products.id = product_orders.product_id
                    LEFT JOIN statuses ON statuses.id = orders.status_id
                    WHERE
                        CONCAT_WS(' ', first_name , last_name, street, city) 
                        LIKE ?
                        AND statuses.status LIKE ?
                    GROUP BY orders.id
                    LIMIT ?, 5;";

        $countquery = " SELECT COUNT(DISTINCT orders.id) as total_orders FROM orders

                        LEFT JOIN product_orders ON product_orders.order_id = orders.id
                        LEFT JOIN customers ON customers.id = orders.user_id
                        LEFT JOIN statuses ON statuses.id = orders.status_id
                        WHERE customers.first_name LIKE ?
                        OR customers.last_name LIKE ?
                        AND statuses.status LIKE ?";

        $total_orders = $this->db->query( $countquery, array($values[0], $values[1], $values[2] ) )->row_array();

        return array('orders' => $this->db->query( $query, $values ) -> result_array(), 
            'values' => array('search' => $search, 'page' => $page, 'sort' => $sort ),
            'total_orders' => $total_orders['total_orders']
            );
    }

    public function change_order_status($post){

        $old_status = $post['status'];
        $order_id = $post['order_id'];

        switch($old_status){
            case 'In Process': $new_status = 1;
            break;
            case 'Shipped': $new_status = 2;
            break;
            case 'Cancelled': $new_status = 3;
        }

        $query = "  UPDATE orders
                    SET status_id = ? WHERE id = ?";

        $values = array($new_status, $order_id);

        return $this->db->query($query, $values);
    }

// ================preview product from the add new product or edit product modal=====================

        public function preview_product($id)
    {
        $values = $id;
        $query =    "SELECT products.id, products.name, products.description, products.price, products.inventory, 
                    categories.name AS category, categories.id AS category_id, products.inventory FROM products LEFT JOIN product_categories 
                    ON product_categories.product_id = products.id LEFT JOIN categories ON categories.id = 
                    product_categories.category_id
                    WHERE products.id = ?";
        $data['product'] = $this->db->query($query, $values) -> row_array();
        $img_query = "SELECT * FROM images WHERE product_id = ?";
        $data['images'] = $this->db->query($img_query, $values) -> result_array();
        
        return $data;
    }

    public function edit_product()
    {
        $img_query = "SELECT * FROM images WHERE product_id = ?";
        $data['images'] = $this->db->query($img_query, $values) -> result_array();
        return $data;
    }

    public function categories()
    {
        $cat_query = "SELECT * FROM categories";
        return $this->db->query($cat_query) -> result_array();
    }

// ================gets a single order ID for the single order page ====================================

    public function get_order_by_id($id)
    {
        $order_query = "SELECT products.id as Product_id, products.name, products.price, product_orders.quantity, statuses.status , orders.id,
                            products.price * product_orders.quantity AS total
                            FROM orders LEFT JOIN product_orders on product_orders.order_id = orders.id
                            LEFT JOIN products ON product_orders.product_id = products.id 
                            LEFT JOIN statuses ON orders.status_id = statuses.id
                            WHERE orders.id = ".$id; 
        $order = $this->db->query($order_query)->result_array();

        $customer_query = "SELECT CONCAT(customers.first_name,' ',customers.last_name) AS name,  addresses.street, 
                                    addresses.city, addresses.state, addresses.zipcode, billing_address.street AS billing_street, 
                                    billing_address.city AS billing_city, billing_address.state AS billing_state, 
                                    billing_address.zipcode AS billing_zipcode
                                    FROM orders LEFT JOIN customers ON orders.user_id = customers.id
                                    LEFT JOIN addresses ON customers.address_id = addresses.id
                                    LEFT JOIN addresses AS billing_address ON billing_address.id = customers.billing_id
                                    WHERE orders.id=".$id;
        $customer =  $this->db->query($customer_query)->row_array();
        
        $customer_data = array(
                'orders' => $order,
                'customer' => $customer
            );
        return $customer_data;
    }

    public function update($prduct)
    {


    }

    public function destroy($id)
    {
        $query = "DELETE FROM products WHERE products.id = ?";
        $this->db->query($query, array($id));
        $tables = ['product_orders', 'product_categories', 'images'];
        foreach ($tables as $table) {
            $query = "DELETE FROM ". $table ."
                        WHERE ".$table.".product_id = ?";
            $this->db->query($query, array($id));
        }
            
    }

    public function create($product, $cat)
    {
        $product_info = array($product['name'], $product['description'], $product['price'], $product['inventory']);
        $query = "INSERT INTO products (name, description, price, inventory)
                    VALUES (?,?,?, ?)";
        $this->db->query($query, $product_info);
        $id =  mysql_insert_id();
        $values=array($id,$cat );
        $cat_query = "INSERT INTO product_categories (product_id, category_id)
                        VALUES(?,?)";
        $this->db->query($cat_query, $values);                       

    }

    public function add_cat($cat)
    {
        $query = "SELECT id FROM categories WHERE name = ?";
        $cat_id = $this->db->query($query, $cat)->row_array();
        if(!$cat_id['product_id'])
        {
            $query = "INSERT INTO categories (name) VALUES (?)";
            $this->db->query($query, $cat);
            $id =  mysql_insert_id();
        }
        else
        {
            $id = $cat['product_id'];
        }
        return $id;
    }

    
}