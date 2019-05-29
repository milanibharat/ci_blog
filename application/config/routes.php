<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/index'] = 'posts/index';          //for pagination while backward else it will access (:any) //line 8
$route['posts/create'] = 'posts/create';        //posts create view calling
$route['posts/update'] = 'posts/update';

$route['posts/(:any)'] = 'posts/view/$1';

$route['posts'] = 'posts/index';                //posts default page index
$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'pages/view/$1';             //created to compact size of url

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
