<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin');

    }

    public function index()
    {
        $this->load->view('admin/signins');
    }
    
    public function orders()
    {
        $this->load->view('admin/orders');
    }
    
    public function show_order()
    {
        $this->load->view('admin/show');
    }

    public function products_index(){
        $this->load->view('admin/products');
        $this->load_products_dashboard(0, 0, '');
    }

    public function load_products_dashboard($category, $page, $search)
    {
        $return = $this->Admin->get_products();
        $products['products'] = $return[0];
        $products['browse'] = $return[1];
        
        $this->load->view('admin/products',);
    }

    public function edit_product()
    {
        $this->load->view('admin/products');
    }

}


//end of main controller
