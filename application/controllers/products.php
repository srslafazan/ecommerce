<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Product');

        // $this->output->enable_profiler();

    }

    public function index()
    {
    	$category = 0;
    	$page = 0;
        $search = '';
    	$offers['offers'] = $this->Product->get_products($category, $page, $search);
        $offers['category'] = "All Products";
    	$this->load->view('customers/index', $offers);
    
    }

    public function get_product()
    {
    	$category = $this->input->post('category');
    	$page = 0;
        $search = '';
    	$offers['offers'] = $this->Product->get_products($category, $page, $search);
        $offers['offers'][0]['category_title'] = $category;

        $this->load->view('customers/index', $offers);
    }

    public function product_search()
    {
        $search = $this->input->post();
        $offers['offers'] = $this->Product->get_products(0, 0, $search);
        $offers['offers'][0]['category_title'] = "Products like " . $this->input->post('search') . ":";
        $this->load->view('customers/index', $offers);
    }

    public function product_view($id)
    {
        $this->load->view('customers/shows', array('id' => $id));
    }
}


//end of main controller
