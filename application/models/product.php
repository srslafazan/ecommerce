<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {  

	public function get_all_products($category = 0, $search = '%', $page = 0, $sort = 0)
	{ 
		$category_input = $category;
		$search_input = $search;
		$page = 5 * (int)$page;
		if($sort === 0 ) { $sort = 'price'; }
		if($category_input == "All Products" || $category_input == '0'){ 
			$category_input = 0; }
		
		if(!empty($search_input) && $search_input != '%') { $search_input = "%" . $search_input . "%"; 
			} else { $search_input = "%"; }

		$values = array($category_input, $search_input, $page);

		if ($sort == 'most_popular') {

			$query = "	SELECT products.id, products.name as product_name, products.description as 
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
						GROUP BY products.id
						ORDER BY total_products DESC
						LIMIT ?, 5";

			$countquery = "	SELECT COUNT(products.id) as total_products from products
							
							LEFT JOIN product_categories 
							ON product_categories.product_id = products.id
							LEFT JOIN categories
							ON product_categories.category_id = categories.id
							LEFT JOIN product_orders
							ON product_orders.product_id = products.id
							WHERE categories.name = ?
							AND products.name LIKE ?";				
		} 
		elseif ($sort='price') {

			$query = "	SELECT products.id, products.name as product_name, products.description as product_description, 
						products.price as price, categories.id as category_id, categories.name as category from products
						LEFT JOIN product_categories 
						ON product_categories.product_id = products.id
						LEFT JOIN categories
						ON product_categories.category_id = categories.id
						WHERE categories.name = ?
						AND products.name LIKE ?
						ORDER BY price
						LIMIT ?, 5"; 

			$countquery = "	SELECT COUNT(products.id) as total_products from products

							LEFT JOIN product_categories 
							ON product_categories.product_id = products.id
							LEFT JOIN categories
							ON product_categories.category_id = categories.id
							WHERE categories.name = ?
							AND products.name LIKE ?"; 
		}
		$total_products = $this->db->query($countquery, $values) -> row_array();
		return array('products' => $this->db->query($query, $values) -> result_array(), 
			'values' => array('category' => $category,'search' => $search,'page' =>$page,'sort' => $sort), 
			'total_products' => $total_products['total_products']);
    }

    public function get_product_by_id($id)
    {
    	$query = "SELECT products.*, images.*
					FROM images
					LEFT JOIN products
					ON products.id = images.product_id
					WHERE products.id = ?";

		$values = $id;
		
		return $this->db->query($query, $values) -> result_array();

	}

	public function all_products_images()
	{
		$query = "SELECT products.*, images.*
				  FROM Products
				  LEFT JOIN images
                  ON products.id = images.product_id
                  ORDER BY rand()
                  LIMIT 0,5";

       	return $this->db->query($query) -> result_array();
	}
}


//end of main controller







