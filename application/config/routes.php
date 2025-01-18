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
$route['blog-details/(:any)'] = 'Home/blogs_details/$1';
$route['blogs_details'] = 'Home/blogs_details';
$route['privacy_policy'] = 'home/privacy_policy';
$route['business-partnership'] = 'Home/business_partnership';
$route['franchise'] = 'Home/franchise';
$route['corporate-tie-up'] = 'Home/corporate_tie_up';
$route['hospital-tie-up'] = 'Home/hospital_tie_up';





// ----------------admin----------

$route['admin'] = 'admin/AdminAuth/admin';
$route['adminLogout'] = 'admin/AdminAuth/adminLogout';
$route['dashboard'] = 'admin/AdminHome/dashboard';
$route['contact_query'] = 'admin/AdminHome/contact_query';
$route['appointment_query'] = 'admin/AdminHome/appointment_query';
$route['blog_add'] = 'admin/AdminHome/blog_add';
$route['blog_All'] = 'admin/AdminHome/blog_All';
$route['service_add'] = 'admin/AdminHome/service_add';
$route['service_All'] = 'admin/AdminHome/service_All';