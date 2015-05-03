<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {  
	
	public function get_products($category, $page)
	{ 
	// 	var_dump($category);
	// 	var_dump($page);
		$query = "SELECT products.id as product_id, products.name as product_name, products.description as product_description, 
		products.price as price, categories.id as category_id, categories.name as category from products
		LEFT JOIN product_categories 
		ON product_categories.product_id = products.id
		LEFT JOIN categories
		ON product_categories.category_id = categories.id
		WHERE categories.name = ?
		LIMIT ?,15";

		$values = array($category, (int)$page); 

		return $this->db->query($query, $values) -> result_array();
	}
    
}


//end of main controller