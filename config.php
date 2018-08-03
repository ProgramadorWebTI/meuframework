<?php

require './environment.php';
function base_url($url = null) {
	$base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) . $url;
	return $base_url;

}

global $config;
$config = array();

if (ENVIRONMENT == "development") {
	$config['dbname'] = 'minha_agenda';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'nomedobanco';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}