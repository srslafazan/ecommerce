<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin');

    }

    public function index()
    {
        $this->load->view('admins/signins');
    }
    
    public function orders()
    {
        $this->load->view('admins/orders');
    }
    
    public function show_order()
    {
        $this->load->view('admins/show');
    }

    public function products()
    {
        $this->load_products_dashboard(0, 0, '');
    }

    public function load_products_dashboard($category, $page, $search)
    {
        $return = $this->Admin->get_products($category, $page, $search);
        $products['products']['products'] = $return[0];
        $products['products']['browse'] = $return[1];

        $this->load->view('admins/products', $products);
    }

    public function edit_product()
    {
        $this->load->view('admins/products');
    }

}


//end of main controller
