<?php
defined('BASEPATH') or exit('No direct script access allowed');




$route['default_controller'] = 'LoginController/index';
// Login 
$route['user/login']['post'] = 'LoginController/userLogin';
$route['user/logout'] = 'LoginController/userLogout';

$route['dashboard'] = 'DashboardController/index';
$route['user/index'] = 'UserController/index';
$route['user/create'] = 'UserController/create';
$route['user/store']['post'] = 'UserController/store';
$route['user/edit/(:num)'] = 'UserController/edit/$1';
$route['user/show/(:num)'] = 'UserController/show/$1';
$route['user/update/(:num)'] = 'UserController/update/$1';
$route['user/delete/(:num)']['delete'] = 'UserController/delete/$1';
// Api
$route['api/user/getDivision'] = 'AddressController/getDivision';
$route['api/user/getDistrict/(:num)'] = 'AddressController/getDistrict/$1';
$route['api/user/getThana/(:num)'] = 'AddressController/getThana/$1';

/* ----------------- */
$route['user/getAddress/(:any)/(:num)'] = 'AddressController/getAddress/$1/$2';


$route['404_override'] = 'Controller404/index';
$route['translate_uri_dashes'] = FALSE;
