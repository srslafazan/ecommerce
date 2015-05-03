<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// main routes
$route['default_controller'] = "products";
$route['404_override'] = '';
$route['(:any)/(:any)'] = 'products/get_product/$1/$2';
// end of main routes


//end of routes.php