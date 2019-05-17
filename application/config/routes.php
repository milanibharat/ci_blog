<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/create']='PostsController/create';        //posts create view calling
$route['posts/(:any)']='PostsController/view/$1'; 
$route['posts']='PostsController/index';                //posts default page index
$route['default_controller'] = 'PagesController/view';
$route['(:any)']='PagesController/view/$1';             //created to compact size of url
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

