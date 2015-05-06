<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Product');
    }

    public function index()
    {
        $data = $this->Product->get_all_products();
        $this->load->view('customers/index', $data);
    }

    public function products_main() 
    {
        $data = $this->Product->get_all_products();
        $this->load->view('partials/products_main', $data);
    }

    public function load_main()
    {
        $post = $this->input->post();
        $data = $this->Product->get_all_products($post['category'], $post['search'], $post['page'], $post['sort']);
        $data['no_matches'] = false;
        
        if(empty($data['products']))
        {
            $data = $this->Product->get_all_products();
            $data['no_matches'] = true;
        }
        $this->load->view('partials/products_main', $data);
    }

    public function load_browse()
    {
        $post = $this->input->post();
        $data = $this->Product->get_all_products($post['category'], $post['search'], $post['page'], $post['sort']);
        $this->load->view('partials/browse_sidebar', $data);
    }
} 

//end of main controller
