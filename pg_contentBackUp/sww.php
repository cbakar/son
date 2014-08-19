<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en" lang="en">
	<head>
		<!-- Log-in Page Starts -->
		<title>S.O.N.</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Cem Bakar - cmbkr@me.com" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="geo.country" content="CA" />
		
		<!-- CSS -->
		<link rel="home" title="Home" href="" />
		<link rel="copyright" title="Copyright" href="" />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="content/lib/css/main_page.css"/>
		<script src="content/lib/js/jquery-1.11.1.min.js"></script>

		<script>
			$(document).ready( function() {
				var random;
				random = Math.ceil(Math.random() * 4);
				if( random == 1 ){ $('#pwBG').addClass('page_wrapperTok');}		
				if( random == 2 ){ $('#pwBG').addClass('page_wrapperTokC');} 		
				if( random == 3 ){ $('#pwBG').addClass('page_wrapperTur');} 		
				if( random == 4 ){ $('#pwBG').addClass('page_wrapperTurC');}
			});
		</script>
		
		
	</head>
	<body>
	
	
			<div class="page">
			<div id="pwBG">		
				<div class="login_frame">
					<div class="three bit_space warning_bar">

<?php

	$id = $_GET['id'];
	switch( $id ){
		case 'errorNoFileFound':
			echo 'No File Found </br>';
			echo '<a href="index.php" style="text-align:center;">Back</a>';
		break;
		
		default:
			echo 'Something went really wrong - Call Cem';
			break;
	}
	
	?>

					</div>
				</div> <!-- login_frame ends here -->
			</div> <!-- page_wrapper ends here -->
		</div> <!-- page ends here -->

		<!-- Preload Images  -->
		<div class="preload_images">
			<img class="preload" src="content/lib/images/bg_Tokyo.png" alt=""/>
		</div>

		
	</body>
</html>
