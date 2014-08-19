<?php 
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	$username = 'cem';
	$password = 'cem7276';
	$hostname = 'localhost';
	$db_table = 'son';
	
	//Connection to the database
	try{
		$conn = new mysqli($hostname, $username, $password, $db_table);
		//$db_handler = mysql_connect( $hostname, $username, $password ) or die( 'Unable to connect to MySQL' );	
	} catch( Exception $e ){
		echo "'Response' => 'DATABASE', 'message' => 'Failed to connect to database:' . $e";
		exit();
	}

?>

