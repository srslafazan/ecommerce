<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {  
	
	public function values($category, $search, $page){
		
		if(empty($this->session->userdata('sort'))){
			$this->session->set_userdata('sort', 'price');
		}

		if($category === "All Products")
		{
			$category = 0;
		} elseif($category == '0') {
			$category = (int)$category;
		}
		if(!empty($search) && $search != '%') {
			$search = "%" . $search . "%";
		} else 
		{
			$search = "%";
		}
		if (empty($page)){
			$page = 0;
		}
		
		$page = (int)$page;


		return array($category, $search, $page);
	}

	public function get_products($category, $page, $search)
	{ 
		$values = $this->values($category, $search, $page);
		$sort = $this->session->userdata('products_sort');

		if ($sort == 'popular') {

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
		} elseif ($sort='price') {

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
		}

		return array($this->db->query($query, $values) -> result_array(), $values);
    }

    public function get_products_popular($category, $page, $search){


		$values = $this->values($category, $search, $page);

		return array($this->db->query($query, $values) -> result_array(), $values);
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







