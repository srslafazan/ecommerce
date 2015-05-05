<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// main routes
$route['default_controller'] = "products";
$route['404_override'] = '';
// end of main routes



// customer routes
$route['products/show/(:any)'] = 'products/show/$1';
$route['products/browse'] = 'products/get_product';
$route['products/search_by_price'] = 'products/product_search';
$route['cart'] = 'products/view_carts';

// admin routes

//end of routes.php