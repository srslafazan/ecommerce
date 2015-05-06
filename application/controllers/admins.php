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
        $this->load_orders_dashboard(0,'', 0);
    }

    public function load_orders_dashboard($category, $search, $page)
    {
        $return = $this->Admin->get_orders($category, $search, $page);
        $orders['orders']['orders'] = $return[0];
        $orders['orders']['browse'] = $return[1];

        $this->load->view('admins/orders', $orders);
    }
    
    public function show_order($id)
    {
        $data = $this->Admin->get_order_by_id($id);
        $this->load->view('admins/show', $data);
    }

    public function products()
    {
        $this->load_products_dashboard(0,'', 0);
    }

    public function load_products_dashboard($category, $search, $page)
    {
        $return = $this->Admin->get_products($category, $search, $page);
        $products['products']['products'] = $return[0];
        $products['products']['browse'] = $return[1];
        $this->load->view('admins/products', $products);

 
    }

    public function add()
    {
        $data['categories'] = $this->Admin->categories();
        $this->load->view('partials/new_product');
    }

    public function edit_product($id)
    {
        
        $data = $this->Admin->preview_product($id);
        $data['categories'] = $this->Admin->categories();
        $this->load->view('partials/edit_product', $data);
    }

    public function edit()
    {
        var_dump($this->input->post());

    }

    public function preview_product()
    {
        $data['product'] = $this->input->post();
        $this->load->view('/admins/preview', $data);
    }

    public function preview()
    {
        $data = array(
            'product' => $this->input->post()
            );
        
        $this->load->view('admins/preview', $data);
    }

    public function delete($id)
    {
        $this->load->view('partials/delete', $id);
    }
}


//end of main controller
