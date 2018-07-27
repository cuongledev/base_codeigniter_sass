<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['home'] = 'home/index';
$route['dich-vu'] = 'home/service';
$route['service'] = 'home/service';
$route['hoat-dong'] = 'home/work';
$route['hoat-dong/:num'] = 'home/work/$1';
$route['work'] = 'home/work';
$route['work/:num'] = 'home/work/$1';

$route['tuyen-dung'] = 'home/recruitment';
$route['recruitment'] = 'home/recruitment';
$route['tuyen-dung/:num'] = 'home/recruitment/$1';
$route['chi-tiet-tuyen-dung/(:num)-(:any)'] = 'home/recruitment_detail_info/$1';

$route['danh-muc-tuyen-dung'] = 'home/recruitment_detail';
$route['danh-muc-tuyen-dung/(:num)-(:any)'] = 'home/recruitment_detail/$1';

$route['tin-tuc'] = 'home/news';
$route['news'] = 'home/news';
$route['news/:num'] = 'home/news/$1';
$route['chi-tiet'] = 'home/news_detail';
$route['chi-tiet/(:num)-(:any)'] = 'home/news_detail/$1';
$route['news-detail'] = 'home/news_detail';
$route['news-detail/(:num)-(:any)'] = 'home/news_detail/$1';

$route['khach-hang'] = 'home/customer';
$route['customer'] = 'home/customer';
$route['ve-chung-toi'] = 'home/about_us';
$route['about-us'] = 'home/about_us';
$route['search'] = 'home/search';
$route['recruitment-search'] = 'home/recruitment_search';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
