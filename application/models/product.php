<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {  
	
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

	public function get_products($category, $page, $search)
	{ 
		
		$query = "	SELECT products.id as product_id, products.name as product_name, products.description as product_description, 
					products.price as price, categories.id as category_id, categories.name as category from products

					LEFT JOIN product_categories 
					ON product_categories.product_id = products.id
					LEFT JOIN categories
					ON product_categories.category_id = categories.id
					WHERE categories.name = ?
					AND products.name LIKE ?
					ORDER BY price
					LIMIT ?,15"; 
		
		$values = $this->values($category, $search, $page);

		return $this->db->query($query, $values) -> result_array();
    }

    public function get_products_popular($category, $page, $search){

		$query = "	SELECT products.id as product_id, products.name as product_name, products.description as 
					product_description, products.price as price, categories.id as category_id, categories.name as category, 
					product_orders.quantity as product_quantity, SUM(product_orders.quantity) as total_products from products
					
					LEFT JOIN product_categories 
					ON product_categories.product_id = products.id
					LEFT JOIN categories
					ON product_categories.category_id = categories.id
					LEFT JOIN product_orders
					ON product_orders.product_id = products.id
					WHERE categories.name = ?
					AND products.name LIKE ?
					GROUP BY product_id
					ORDER BY total_products DESC
					LIMIT ?, 15";

		$values = $this->values($category, $search, $page);

		return $this->db->query($query, $values)->result_array();
    }
}


//end of main controller