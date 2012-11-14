<?php

include 'config.php';

// Try / catch is just a simple way to get an error message in a variable ($e) if an attempt fails.
// If you feel brave, you can make your own exceptions: http://net.tutsplus.com/tutorials/php/the-ins-and-outs-of-php-exceptions/
// Although I am fine with generic error messages, because I try hard to avoid users seeing them!
try {
	// If you set config.php to use MySQL, this connection string will use those variables.
	if ( $config['type'] == 'mysql' ) {
    	$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
    		$config['user'], $config['pass']);

    // If you set config.php to use SQlite, this connection string will use those variables instead.
	} else if ( $config['type'] == 'sqlite' ) {
		$db = new PDO('sqlite:'. $config['path']);
	}
	// The following line is just a very common setting for PDO.
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Prints the exception error message if something fails.
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}