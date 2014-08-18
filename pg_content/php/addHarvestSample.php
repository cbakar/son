<?php 	ob_start(); error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!-- General Print Out -->

<?php

	$printMe = 0;
	if( $printMe == 1 ){ echo 'Effort Name :' . $_POST[ 'effortNumber' ] . '</br>';	exit(); }
		
	// <!-- Establishing the Database Connection -->
	if( !@include_once ( '../db/db_connect.php' )){ throw new Exception( 'Failed to connect to Database' );}

	$fisherman = $_POST['fishermanName'];
	$effortNumber = $_POST['effortNumber'];
	$effortDate = $_POST['effortDate'];

	if( !isset( $_POST['species'] )){ $species = 'Not Entered'; } else { $species = $_POST['species']; }
	if( !isset( $_POST['formCode'] )){ $formCode = 'Not Entered'; } else { $formCode = $_POST['formCode']; }
	if( !isset( $_POST['unitCode'] )){ $unitCode = 'Not Entered'; } else { $unitCode = $_POST['unitCode']; }
	if( !isset( $_POST['fishWeight'] )){ $fishWeight = 'Not Entered'; } else { $fishWeight = $_POST['fishWeight']; }
	if( !isset( $_POST['boxW'] )){ $boxW = 'Not Entered'; } else { $boxW = $_POST['boxW']; }
	$signedBy = $_POST['signedBy'];
	$trimmedSignName = trim($signedBy);

	$printMe = 0;
	if( $printMe == 1 ){
		echo 'Effort Number : ' . $effortNumber;
		echo '</br>';
		echo 'Fisherman : ' . $fisherman;
		echo '</br>';
		echo 'Effort Date : ' . $effortDate;
		echo '</br>';
		echo 'Species : ' . $species;
		echo '</br>';
		echo 'Form Code : ' . $formCode;
		echo '</br>';
		echo 'Unit : ' . $unitCode;
		echo '</br>';
		echo 'Weight : ' . $fishWeight;
		echo '</br>';
		echo 'Box : ' . $boxW;
		echo '</br>';
		echo 'Signed By : ' . $signedBy;
		exit();
	}

	$trimmedEffNum = trim($effortNumber);

	if( ! $sql_stmtHS = $conn->prepare( "SELECT MAX(sample_number) FROM forum_harvest WHERE effort_number = ? LIMIT 1")){
		echo 'Error : ' . $conn->error;
	}
	if( ! $sql_stmtHS->bind_param('s', $trimmedEffNum) ){
		echo 'Error : ' . $conn->error;
	}
	if( ! $sql_stmtHS->execute() ){
		echo 'Error : ' . $conn->error;
	} 
	if( ! $sql_stmtHS->store_result() ){
		echo 'Error : ' . $conn->error;
	}
	if( ! $sql_stmtHS->bind_result( $db_SN )){
		echo 'Error : ' . $conn->error;
	}

	$sql_stmtHS->fetch();

	$sql_stmtHS->free_result();
	$sql_stmtHS->close();

	$db_SN = $db_SN + 1;

	$effortDate = trim($effortDate);

 	if( ! $sql_stmtEHD = $conn->prepare( "INSERT INTO forum_harvest ( `entered_by`, `effort_number`, `sample_number`, `effort_date`, `species`, `form`, `weight`, `units`, `boxW`, `signed_by` ) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )" )){
 		echo 'Error : ' . $conn->error;
 	}

 	if( ! $sql_stmtEHD->bind_param('ssssssssss', $fisherman, $trimmedEffNum, $db_SN, $effortDate, $species, $formCode, $fishWeight, $unitCode, $boxW, $trimmedSignName )){
 		echo 'Error : ' . $conn->error;	
 	}

	if( ! $sql_stmtEHD->execute()){
		echo 'Error : ' . $conn->error;	
	} else {
		echo 'did not work';
	}

	$sql_stmtEHD->free_result();
	$sql_stmtEHD->close();

	$conn->close();

	// <!-- Close the Database Connection -->
	function closeDB() {
		if( !@include_once ( '../db/db_close.php' ) ) {
			throw new Exception( 'Failed to close the Database' ); 
		}
		return true; 
	}
	try { closeDB(); }
	catch ( Exception $e) { echo 'Message: ' .$e->getMessage(); }
?>

