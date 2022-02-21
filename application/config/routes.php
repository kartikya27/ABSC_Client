<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Pages';
$route['about'] = 'Pages/about';
$route['profile'] = 'Pages/profile';
$route['index'] = 'Pages/index';
$route['contact'] = 'Pages/contact';
$route['services'] = 'Pages/services';
$route['services1'] = 'Pages/services1';
$route['services2'] = 'Pages/services2';
$route['solution'] = 'Pages/solution';
$route['newsletter'] = 'Pages/newsletter';
$route['shop'] = 'Pages/shop';
$route['blog'] = 'Pages/blog';
$route['admin'] = 'Admin_control/index';
$route['details'] = 'Pages/details';
$route['my_account'] = 'Pages/my_account';
$route['login'] = 'Pages/login';
$route['cart'] = 'Pages/cart';
$route['checkout'] = 'Pages/checkout';
$route['order'] = 'Pages/order';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;$route['addEdit']='Admin_control/addEdit';$route['testAdmin']='Admin_control/testAdmin';$route['adminnew']='Admin_control/adminnew';