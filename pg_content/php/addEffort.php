<?php error_reporting( E_ALL ); ini_set( 'display_errors', '1' ); ob_start(); ?>
<?php
	session_start();
	if( !isset( $_SESSION['user_name'])){ header( 'Location: ../index.php?id=gottaLogin' );}
?>

<?php

	include_once( '../db/db_connect.php' );

	$entered_by = $_SESSION[ 'user_name' ];
	$entered_on = date('Y/m/d H:i:s');

	$printMe = 0;
	if( $printMe == 1 ) {
		echo 'Effort # :' . $_POST[ 'effortNumber' ] . '</br>'; 
		echo 'Fisherman Name :' . $_POST[ 'fisherName' ] . '</br>';
		echo 'BT-SIZE :' . $_POST[ 'btSize' ] . '</br>';
		echo 'Effort Date :' . $_POST[ 'effortDate' ] . '</br>';
		echo 'GRID :' . $_POST['grid'] . '</br>';
		echo 'LATLONG :' . $_POST['latlong'] . '</br>';
		echo 'GRTP :' . $_POST['grtp'] . '</br>';
		echo 'GRLEN5 :' . $_POST['grlen5'] . '</br>';
		echo 'GRHTM :' . $_POST['grhtm'] . '</br>';
		echo 'MESH5 :' . $_POST['mesh5'] . '</br>';
		echo 'GRDEP5 :' . $_POST['grdep5'] . '</br>';
		echo 'SIDEP5 :' . $_POST['sidep5'] . '</br>';
		echo 'SETYPE :' . $_POST['setype'] . '</br>';
		echo 'EFFDUR :' . $_POST['effdur'] . '</br>';

		echo 'Entered On :' . $entered_on . '</br>';
		echo 'Entered By :' .$entered_by;

		exit();
	}


	/* These values will be enter by the forum */		
	$effortNumber = $_POST[ 'effortNumber' ];
	$fisherName = $_POST['fisherName'];
	$btSize = $_POST['btSize'];
	$effortDate  = $_POST['effortDate'];
	$grid  = $_POST['grid'];
	$latlong  = $_POST['latlong'];
	$grtp  = $_POST['grtp'];
	$grlen5  = $_POST['grlen5'];
	$grhtm = $_POST['grhtm'];
	$mesh5 = $_POST['mesh5'];
	$grdep5 = $_POST['grdep5'];
	$sidep5 = $_POST['sidep5'];
	$setype = $_POST['setype'];
	$effdur = $_POST['effdur'];

	//Replace Emtpy Field
	if( empty( $grid )) { $grid = 0; }
	if( empty( $latlong )) { $latlong = 'Not Entered'; }
	if( $grtp == '-1') { $grtp = 'Not Entered'; }
	if( empty( $grlen5 )) { $grlen5 = '0.0'; }
	if( empty( $grhtm )) { $grhtm = '0.0'; }
	if( empty( $mesh5 )) { $mesh5 = '0.0'; }
	if( empty( $grdep5 )) { $grdep5 = '0.0'; }
	if( empty( $sidep5 )) { $sidep5 = '0.0'; }
	if( $setype == '-1' ) { $setype = 'Not Entered'; }
	if( empty( $effdur )) { $effdur = '00:00:00'; }

	// Check for mandotory fields 
	if( empty( $effortNumber ) OR empty( $fisherName ) OR empty( $btSize ) OR empty( $effortDate )){
		header('Location: ../usrPg.php?id=harvest_MissingField');
		exit();
	}

	$printMe = 0;
	if( $printMe == 1 ){ 
		echo 'Effort Code : ' . $effortNumber . '</br>';
		echo 'Fisher Name : ' . $fisherName . '</br>';
		echo 'BT-SIZE : ' . $btSize . '</br>';
		echo 'Effort Date : ' . $effortDate . '</br>';
		echo 'GRID : ' . $grid . '</br>';
		echo 'LATLONG : ' . $latlong . '</br>';
		echo 'GRTP : ' . $grtp . '</br>';
		echo 'GRLEN5 : ' . $grlen5  . '</br>';
		echo 'grhtm : ' . $grhtm . '</br>';
		echo 'mesh5 : ' . $mesh5 . '</br>';
		echo 'grdep5 : ' . $grdep5 . '</br>';
		echo 'sidep5 : ' . $sidep5 . '</br>';
		echo 'setype : ' . $setype . '</br>';
		echo 'effdur : ' . $effdur . '</br>';
		
		echo 'Entered By : ' . $entered_by . '</br>';
		echo 'Entered ON : ' . $entered_on . '</br>';
		exit();
	}



	$queryEffort = "INSERT INTO forum_effort ( `user_name`, `effort_number`, `fisher_name`, `bt_size`, `effort_date`, `entered_on`, `grid`, `latlong`, `grtp`, `grlen5`, `grhtm`, `mesh5`, `grdep5`, `sidep5`, `setype`, `effdur` ) 
	VALUES(	?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
	$stmtEffort = $conn->prepare($queryEffort);
	$stmtEffort->bind_param('ssssssssssssssss', $entered_by, $effortNumber, $fisherName, $btSize, $effortDate, $entered_on, $grid, $latlong, $grtp, $grlen5, $grhtm, $mesh5, $grdep5, $sidep5, $setype, $effdur);

	$queryHarvest = "INSERT INTO forum_harvest( `entered_by`, `effort_number`, `effort_date` ) VALUES ( ?, ?, ? )";
	$stmtHarvest = $conn->prepare($queryHarvest);
	$stmtHarvest->bind_param('sss', $entered_by, $effortNumber, $entered_on);

	if($stmtEffort->execute()){
		$stmtHarvest->execute();
		$stmtEffort->close();
		$stmtHarvest->close();
		$conn->close();
		header( 'Location: ../usrPg.php?id=effdata_added');
		//print 'Success! ID of last inserted record is : ' .$stmtEffort->id .'<br />';
	}else{
		$stmtEffort->close();
		$stmtHarvest->close();
		$conn->close();
		header( 'Location: ../usrPg.php?id=effData_err'); 
		//die('Error : ('. $conn->errno .') '. $conn->error);
	}
?>