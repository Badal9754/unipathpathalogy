<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['lab_listing'] = 'home/lab_listing';
$route['about'] = 'home/about';
$route['contact'] = 'home/contact';
$route['services'] = 'home/services';
$route['blogs'] = 'home/blogs';
$route['blogs_details'] = 'home/blogs_details';
$route['privacy_policy'] = 'home/privacy_policy';