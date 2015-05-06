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


    public function show($id)
    {   
        $data['products'] = $this->Product->get_product_by_id($id);
        $data['similars'] = $this->Product->all_products_images();
        $this->load->view('customers/shows', $data);
    }

    public function add_to_cart()
    {     
       $id = $this->input->post('id');
       $cart = $this->session->userdata['cart'];
       if($cart[$id])
       {
        $item = $cart[$id];
        $quantity = $item['quantity'] + $this->input->post('quantity');
        $cart[$id]['quantity'] = $quantity;
        $this->session->set_userdata('cart', $cart);
       }
       else
       {
          $cart[$id] = $this->input->post();     
          $this->session->set_userdata('cart', $cart);
       }

      $this->session->set_userdata('quantity', $this->session->userdata('quantity') + $this->input->post('quantity'));
      redirect('products/view_carts');
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


     public function view_carts() 
     {
            $this->load->view('customers/carts');
     }

     public function load_browse()
     {
        $post = $this->input->post();
        $data = $this->Product->get_all_products($post['category'], $post['search'], $post['page'], $post['sort']);
        $this->load->view('partials/browse_sidebar', $data);
     }

 }


//end of main controller
