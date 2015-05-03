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
    	$offers['offers'] = $this->Product->get_products($category, $page);
    	$this->load->view('index', $offers);
    
    }

    public function get_product()
    {
    	$category = $this->input->post('category');
    	$page = 0;
  

    	$offers['offers'] = $this->Product->get_products($category, $page);
    	$this->load->view('index', $offers);


        $this->load->view('customers/carts');
        $this->load->view('index');

    }
}


//end of main controller
