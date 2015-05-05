<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// main routes
$route['default_controller'] = "products";
$route['404_override'] = '';
// $route['(:any)/(:any)'] = 'products/get_product/$1/$2';
// end of main routes
$route['admin'] = 'admin';
$route['products/show/(:any)'] = 'products/show/$1';
$route['products/browse'] = 'products/get_product';
$route['products/search_by_price'] = 'products/product_search';

//end of routes.php