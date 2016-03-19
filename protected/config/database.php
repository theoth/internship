<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:unix_socket=/zstorage/home/ictest00313/mysql/run/mysql.sock;dbname=internship',
		//'connectionString' => 'mysql:host=zstorage/home/ictest00313/mysql/run/mysql.sock;dbname=internship',

	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '1',
	'charset' => 'utf8',
	
);