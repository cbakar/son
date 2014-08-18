<?php error_reporting( E_ALL ); ini_set( 'display_errors', '1' ); ob_start(); ?>

<?php
	session_start();
	if( !isset( $_SESSION['user_name'])){ header( 'Location: ../index.php?id=gottaLogin' );}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home of S.O.N.</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Cem Bakar - cmbkr@me.com" />
		<meta name="geo.country" content="CA" />

		<!-- CSS -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="lib/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="lib/css/switchBtn.css"/>
		<link rel="stylesheet" type="text/css" href="lib/css/chosen.css"/>
    	<link rel="stylesheet" href="lib/css/datepicker.css">
	</head>

	<body>
		<div id="page"><!-- Page Covers All -->
			<div id="navigation_bar">
				<div id="navbar_fitter">
					<?php
						include_once( 'php/headerMaker.php' );
					?>
				</div><!-- navbar_fitter ends here -->
			</div><!-- navigation_bar ends here -->
			<div id="page_content">
				<?php
					if( isset($_GET['id'] )){
						switch ( $_GET['id']){

							//==========================================

							//Effort Forum
							case 'addEffort':
								include('src/f/effort.php');
							break; 
							
							//Effort Forum - Added				
							case 'effdata_added':
								$_SESSION['responsID'] = 'effdata_added';
								include('src/f/effort.php');
							break;

							//Effort Forum - Added				
							case 'effdata_added':
								$_SESSION['responsID'] = 'effData_err';
								include('src/f/effort.php');
							break;

							//==========================================	

							//Harvest Form
							case 'addHarvest':
								include('src/f/harvest.php');
							break;

							case 'harvest_noRecordFound':
								$_SESSION['responsID'] = 'harvest_noRecordFound';
								include('src/f/harvest.php');
							break;

							//==========================================

							//Individual Fourm
							case 'addIndividual':
								include('src/f/individual.php');
							break;


							//==========================================

							//Data Processing
							case 'dataProcess':
								include('php/dataProcess.php');
							break;










							case 'harvestNumber_MissingField':
								include('src/f/forum_effort.php');
							break;
							
							default:
								//$_SESSION['responsID'] = null;
								//header('Location: sww.php?id=cantReadID');
							break;
						}
					}
				?>
			</div> <!-- Page content Ends Here -->
		</div>	<!-- Page Covers All -->
		<!-- JS includes -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 	<script src="lib/js/dashboard.js"></script>
    	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    	<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    	<script src="lib/js/chosen.jquery.js" type="text/javascript" ></script>
    	<!--
    	// <script type="text/javascript" src="lib/js/chosen.jquery.min.js"></script>
    	// <script type="text/javascript" src="lib/js/chosen.proto.js"></script>
    	// <script type="text/javascript" src="lib/js/chosen.proto.min.js"></script>
-->
	</body>
</html>
