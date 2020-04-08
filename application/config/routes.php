<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['api/solorum_get']			= 'api/solorum';
$route['api/gupit_get']				= 'api/sologupit';
$route['api/plesan_get']			= 'api/soloplesan';

$route['add/camsdata/gupit']		= 'camsdata/gupit'

$route['camsdata/index_post']		= 'api/insertdata';

$route['default_controller']		= 'api';
$route['404_override']				= '';
$route['translate_uri_dashes']		= FALSE;
