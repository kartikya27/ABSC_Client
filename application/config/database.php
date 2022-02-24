<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
$db['default']['dsn'] = 'pgsql:host=217.21.84.52;port=3306;dbname=u745874161_absc_db';

$db['default'] = array(
// 	'dsn'	=> '',
	'hostname' => '217.21.84.52',
	'username' => 'u745874161_absc_db_user',
	'password' => 'Absc_db_password@123',
	'database' => 'u745874161_absc_db',
	'dbdriver' => 'mysql',
	'dbprefix' => '',
	'pconnect' => TRUE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
