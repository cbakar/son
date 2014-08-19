<?php 	error_reporting( E_ALL ); ini_set( 'display_errors', '1' ); ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
		<title>Home</title>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="lib/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="lib/css/site_global.css"/>
		<link rel="stylesheet" type="text/css" href="lib/css/sup.css"/>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<!-- JS includes -->
		<script type="text/javascript" language="javascript"  src="lib/js/validetor.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<!-- 		  <link rel="stylesheet" href="/resources/demos/style.css"> -->
		<script>  $(function() { $( "#datepicker" ).datepicker(); }); </script>
	</head>
	
	<body>
		<div id="page"><!-- Page Covers All -->	
			<div id="navigation_bar">
				<div id="navbar_fitter">
					<?php include_once( 'src/nav_bar/stsBtn.php' ); ?>
				</div>
				<!-- navbar_fitter ends here -->
			</div>
			<!-- navigation_bar ends here -->