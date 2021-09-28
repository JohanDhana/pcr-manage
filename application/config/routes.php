<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['tests/list'] = 'tests/list';
$route['tests/create'] = 'tests/create';
$route['tests/update/(:any)'] = 'tests/update/$1';
$route['tests/thank-email/(:any)'] = 'tests/thank_email/$1';
$route['tests/(:any)'] = 'tests/view/$1';
$route['tests/(:any)/reservations'] = 'tests/reservations/$1';

// $route['tests/(:any)'] = 'tests/view/$1';
$route['tests'] = 'tests/index';

$route['default_controller'] = 'tests/list';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
