<?php

//MAMP用
if ($_SERVER['HTTP_HOST'] === 'localhost') {
	define('RDS_HOSTNAME', 'localhost');
	define('RDS_USERNAME', 'root');
	define('RDS_PASSWORD', 'root');
	define('RDS_DB_NAME', 'cakephp-practice');
}

//AWS用
if (!defined('RDS_HOSTNAME')) {
	define('RDS_HOSTNAME', $_SERVER['RDS_HOSTNAME']);
	define('RDS_USERNAME', $_SERVER['RDS_USERNAME']);
	define('RDS_PASSWORD', $_SERVER['RDS_PASSWORD']);
	define('RDS_DB_NAME', $_SERVER['RDS_DB_NAME']);
}

class DATABASE_CONFIG {

	public $default = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => RDS_HOSTNAME,
			'login' => RDS_USERNAME,
			'password' => RDS_PASSWORD,
			'database' => RDS_DB_NAME,
			'prefix' => '',
			'encoding' => 'utf8'
	);

	public $test = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => RDS_HOSTNAME,
			'login' => RDS_USERNAME,
			'password' => RDS_PASSWORD,
			'database' => RDS_DB_NAME,
			'prefix' => '',
			'encoding' => 'utf8'
	);
}
