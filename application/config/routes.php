<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']['get'] = 'Login/index';
$route['login']['post'] = 'Login/auth';

$route['users'] = 'user';

// Route untuk API
$route['api/users'] = 'api/userapi';
