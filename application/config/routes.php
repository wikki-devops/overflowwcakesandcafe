<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/index';

$route['default_controller'] = 'welcome';
$route['(:any)'] = 'welcome/$1';

$route['404_override'] = 'errors/page_not_found';
$route['translate_uri_dashes'] = true;