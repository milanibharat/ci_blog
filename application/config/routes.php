<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/index'] = 'Posts/index';
$route['posts/create'] = 'Posts/create';        //posts create view calling
$route['posts/update'] = 'Posts/update';

$route['posts/(:any)'] = 'Posts/view/$1';

$route['posts'] = 'Posts/index';                //posts default page index
$route['default_controller'] = 'Pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'Pages/view/$1';             //created to compact size of url

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
