<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
<<<<<<< HEAD
        $this->load->model('Product');
=======
        // $this->output->enable_profiler();
>>>>>>> f441112eaf0ff5c81a6d7199df840d8bfad605e9
    }

    public function index()
    {
<<<<<<< HEAD
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

=======
        $this->load->view('customers/carts');
        $this->load->view('index');
>>>>>>> f441112eaf0ff5c81a6d7199df840d8bfad605e9
    }
}


//end of main controller
