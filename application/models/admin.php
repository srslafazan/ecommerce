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


        $query = "  SELECT products.*, categories.name as category, 
                    SUM(quantity) as quantity, photo_url from products

                    LEFT JOIN product_categories ON product_categories.product_id = products.id
                    LEFT JOIN categories ON product_categories.category_id = categories.id
                    LEFT JOIN product_orders ON product_orders.product_id = products.id
                    LEFT JOIN images ON products.id = images.product_id
                    WHERE categories.name OR
                    products.id OR products.name LIKE ?
                    GROUP BY products.id
                    LIMIT ?, 6";

        $values = $this->values($category, $search, $page);

        return array($this->db->query($query, array($values[1], $values[2]) ) -> result_array(), $values);
    }

// ==========Get all orders grouped by orders id for admin orders page ============================
    public function get_orders($category, $search, $page){

        $query = "  SELECT orders.id as order_id, orders.created_at as order_date, orders.status_id as order_status, 
                    customers.id as customer_id, CONCAT_WS(' ', customers.first_name, customers.last_name) as customer_name, 
                    CONCAT(CONCAT_WS(' ', addresses.street, addresses.city), ', ', addresses.state, ' ', addresses.zipcode) 
                    as billing_address, sum(products.price * product_orders.quantity) AS total FROM orders

                    LEFT JOIN product_orders on product_orders.order_id = orders.id
                    LEFT JOIN customers on customers.id = orders.user_id
                    LEFT JOIN addresses on addresses.id = customers.address_id
                    LEFT JOIN products on products.id = product_orders.product_id
                    WHERE customers.first_name
                    OR customers.last_name
                    OR orders.id LIKE ?
                    GROUP BY orders.id
                    LIMIT ?, 6";

        $values = $this->values($category, $search, $page);

        return array($this->db->query( $query, array($values[1], $values[2]) ) -> result_array(), $values);
    }

// ================preview product from the add new product or edit product modal=====================

        public function preview_product($id)
    {
        $values = $id;
        $query =    "SELECT products.id, products.name, products.description, products.price, products.inventory, 
                    categories.name AS category, categories.id AS category_id FROM products LEFT JOIN product_categories 
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

    























}