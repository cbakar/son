<?php session_start();
	if( !isset( $_SESSION['user_name'] ) ) { header( 'Location: ../../../index.php?id=gottaLogin' );  }
?>
<?php 	error_reporting( E_ALL ); ini_set( 'display_errors', '1' ); ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<!--
		***********************************************************************************
		*
		*	This is header page - Includes all headers and buttons
		*
		***********************************************************************************
		-->
		<title>Home of S.O.N.</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Cem Bakar - cmbkr@me.com" />
		<meta name="geo.country" content="CA" />
		<!-- CSS -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="lib/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="lib/css/site_global.css"/>
		<link rel="stylesheet" type="text/css" href="lib/css/sup.css"/>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		

	</head>

	<body>
		<div id="page"><!-- Page Covers All -->	
			<div id="navigation_bar">
				<div id="navbar_fitter">
					<?php 
						include_once( 'lblBtn.php' ); 
						include_once( 'hsBtn.php' ); 
						include_once( 'esBtn.php' ); 
						include_once( 'stsBtn.php' ); 
					?>
				</div>
				<!-- navbar_fitter ends here -->
			</div>
			<!-- navigation_bar ends here -->
			<div id="page_content">
<!--
***********************************************************************************
*
*	Header page ends -
*
***********************************************************************************
-->