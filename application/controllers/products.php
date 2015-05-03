<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product');
    }

    public function index()
    {
    	$category = 0;
    	$page = 0;
    	$offers['offers'] = $this->Product->get_products($category, $page);
    	$this->load->view('index', $offers);
    
    }

    public function get_product()
    {
    	$category = $this->input->post('category');
    	$page = 0;
  

    	$offers['offers'] = $this->Product->get_products($category, $page);
    	$this->load->view('index', $offers);

    }
}


//end of main controller
