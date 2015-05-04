<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Product');
    }

    public function index()
    {
        $offers['offers']['category_title'] = "All Products";
    	$this->load_home(0, 0, '');
    }

    public function load_home($category, $page, $search){
        
        $return = $this->Product->get_products($category, $page, $search);
        $offers['offers']['products'] = $return[0];
        $offers['offers']['browse'] = $return[1];

        $this->load->view('customers/index', $offers);
    }

    public function get_product()
    {
    	$category = $this->input->post('category');
    	$page = 0;
        $search = '';
        
        $offers['offers']['category_title'] = $category; 

        $this->load_home($category, $page, $search);
    }

    public function product_search()
    {
        $category = 0;
        $page = 0;
        $search = $this->input->post();

        $offers['offers']['category_title'] = "Products like " . $this->input->post('search') . ":";
        
        $this->load_home($category, $page, $search);
    }

    public function product_view($id)
    {
        $this->load->view('customers/shows', array('id' => $id));
    }

    public function get_products_popular (){


    }

    public function sort_by() {

    }

}


//end of main controller
