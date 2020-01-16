<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'urls/atualiza_urls';
$route['(:any)'] = 'urls/atualiza_urls/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
