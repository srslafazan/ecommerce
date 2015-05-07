<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin');

    }
//=======================login======================================
    public function index()
    {
        $this->load->view('admins/signins');
    }

// ORDERS
    public function orders()
    {
        $data = $this->Admin->get_orders();
        $this->load->view('admins/orders', $data);
    }

    public function orders_main()
    {
        $data = $this->Admin->get_orders();
        $this->load->view('partials/orders_main', $data);
    }

    public function load_orders_main()
    {
        $post = $this->input->post();
        $data = $this->Admin->get_orders( $post['search'], $post['page'], $post['sort']);
        $this->load->view('partials/orders_main', $data);
    }

    public function search_orders()
    {
        $post = $this->input->post();
        $data = $this->Admin->get_orders($post['search']);
        $this->load->view('partials/orders_main', $data);
    }

    public function change_order_status()
    {
        $post = $this->input->post();
        $data = $this->Admin->change_order_status($post);
        $this->orders_main();
    }


// ==================individidual order page ==========================
    
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

//=============load product management Modals ========================

    public function add()
    {
        $data['categories'] = $this->Admin->categories();
        $this->load->view('partials/new_product', $data);
    }

    public function edit_product($id)
    {
        $data = $this->Admin->preview_product($id);
        $data['categories'] = $this->Admin->categories();
        $this->load->view('partials/edit_product', $data);
    }

    public function delete($id)
    {
        $data['product'] = $this->Admin->preview_product($id);
        $this->load->view('partials/delete', $data);
    }

//=============================Manage products ==========================
    public function update()
    {
         $data['product'] = $this->input->post();
         $this->Admin->update($data);
    }

    public function preview()
    {
        $data['product'] = $this->input->post();
        $this->load->view('/admins/preview', $data);
    }

    public function destroy()
    {
        $id =  $this->input->post('product_id');
        $this->Admin->destroy($id);
        redirect('/admins/products');
    }

    public function create()
    {
        $product = $this->input->post();
        if($product['new_category']) //checks for presence of new category
        {//add_cat checks to see if there is already a category by that name
            $cat_id = $this->Admin->add_cat($product['new_category']);
        }  //returns id if exists, else inserts and returns new id
        else
        {
            $cat_id = $product['category'];
        }
        $this->Admin->create($product, $cat_id);
        redirect('/admins/products');
    }
}


//end of main controller
