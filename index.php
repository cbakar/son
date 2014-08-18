<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Log-in Page Starts -->
		<title>S.O.N.</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Cem Bakar - cmbkr@me.com" />
		<meta name="geo.country" content="CA" />

		<!-- CSS -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="pg_content/lib/css/main_page.css"/>
	</head>
	<body>
		<div class="page">
			<div id="pwBG">		
				<div class="login_frame">
					<div class="three bit_space warning_bar">
						<?php 
							if( $_GET['id'] == 'logout' ){ session_destroy(); echo 'Logged out!' ; }
							if( $_GET['id'] == 'nogood' ){ echo 'Not valid! Try again.'; }
							if( $_GET['id'] == 'gottaLogin' ){ echo 'Please Login First.'; } 
							if( $_GET['id'] == 'reminded' ){ echo 'Email is send to recover your password!'; } 
						?>
					</div>
					<?php
						if( $_GET['id'] == 'forgotten' ){ include( 'pg_content/src/f/reminder.php' );}
						else{ include( 'pg_content/src/f/login.php' );}
					?>
				</div> <!-- login_frame ends here -->
			</div> <!-- page_wrapper ends here -->
		</div> <!-- page ends here -->

		<!-- Preload Images  -->
		<div class="preload_images">
			<img class="preload" src="pg_content/lib/images/bg_Tokyo.png" alt=""/>
		</div>
		<!-- SCRIPTS -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="pg_content/lib/js/dashboard.js"></script>
      </body>
</html>
