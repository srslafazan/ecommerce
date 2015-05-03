<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// main routes
$route['default_controller'] = "products";
$route['404_override'] = '';
// $route['(:any)/(:any)'] = 'products/get_product/$1/$2';
// end of main routes

$route['products/(:any)'] = 'products/product_view/$1';

//end of routes.php