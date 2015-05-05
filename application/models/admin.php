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

    public function get_orders($category, $search, $page){

        $query = "  SELECT orders.id as order_id, orders.created_at as order_date, orders.order_status as order_status, 
                    customers.id as customer_id, CONCAT_WS(' ', customers.first_name, customers.last_name) as customer_name, 
                    CONCAT(CONCAT_WS(' ', addresses.street, addresses.city), ', ', addresses.state, ' ', addresses.zipcode) 
                    as billing_address FROM orders

                    LEFT JOIN product_orders on product_orders.order_id = orders.id
                    LEFT JOIN customers on customers.id = orders.user_id
                    LEFT JOIN addresses on addresses.id = customers.address_id
                    WHERE customers.first_name
                    OR customers.last_name
                    OR orders.id LIKE ?
                    GROUP BY orders.id
                    LIMIT ?, 6";

        $values = $this->values($category, $search, $page);

        return array($this->db->query( $query, array($values[1], $values[2]) ) -> result_array(), $values);
    }

}