<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {  
	
    public function values($category, $search, $page){
        
        if($category === "All Products")
        {
            $category = 0;
        }
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
                    GROUP BY products.id
                    LIMIT ?, 6";

        $values = $this->values($category, $search, $page);

        return array($this->db->query($query, $values) -> result_array(), $values);
    }



}