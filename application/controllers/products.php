<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
    }

    public function index()
    {
<<<<<<< HEAD:application/controllers/main.php
        $this->load->view('customers/carts');
=======
        $this->load->view('index');
>>>>>>> 13caa61acc4ba55d789357f19af82c9201de33e8:application/controllers/products.php
    }
}


//end of main controller
