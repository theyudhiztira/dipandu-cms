<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['news'] = 'main/news';
$route['news/pages'] = 'main/pages_news';
$route['news/pages/(:any)'] = 'main/pages_news/$1';
$route['news/(:any)'] = 'main/news/$1';


$route['tutorial'] = 'main/tutorial';
$route['tutorial/pages'] = 'main/pages_tutorial';
$route['tutorial/pages/(:any)'] = 'main/pages_tutorial/$1';
$route['tutorial/(:any)'] = 'main/tutorial/$1';

$route['contact-us'] = 'main/open_contact';

$route['dp-admin'] = 'admin';
$route['dp-admin/login'] = 'admin/login';
$route['dp-admin/logout'] = 'admin/logout';
$route['dp-admin/news'] = 'admin/news';
$route['dp-admin/dashboard'] = 'admin/dashboard';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
