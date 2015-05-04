<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Product');

        // $this->output->enable_profiler();

    }

    public function index()
    {
        $this->load->view('admin/signins');
    }
    
    public function orders(){
        $this->load->view('admin/orders');
    }
    
    public function show_order()
    {
        $this->load->view('admin/show');
    }

    public function products()
    {
        $this->load->view('admin/products');
    }

    public function edit_product()
    {
        $this->load->view('admin/products');
    }

}


//end of main controller
