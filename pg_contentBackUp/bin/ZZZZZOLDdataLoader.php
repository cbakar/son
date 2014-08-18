<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	try{
		if( !@include_once( 'db/db_connect.php' )) 
			throw new Exception("Failed to include 'dbConnect.php'");
	} catch( Exception $e ){
		echo "Message : " . $e->getMessage();
		echo "Code : " .$e->getMessage();
	}


	// ------------------------ HARVERST ENTRY ------------------------ 
	//Load Firshenman Names
	$request_FishermanName = $conn->prepare( "SELECT `fishermanName` FROM `fishermen` ORDER BY `fishermanName` ASC" );
	$request_FishermanName->execute();
	$request_FishermanName->bind_result( $db_fishermanName );


	//Load Boat Size
	$query_BoatSize = "SELECT `boatSize` FROM `boat_size` ORDER BY `boat_size` ASC";
	$request_BoatSize = $conn->prepare( $query_BoatSize );
	$request_BoatSize->execute();
	$request_BoatSize->bind_result( $db_boat_size );


	//Load Grtp Type
	$request_GrtpType = "SELECT `grtpType` FROM `grtp_type`";
	$request_GrtpType = $conn->prepare( $request_GrtpType );
	$request_GrtpType->execute();
	$request_GrtpType->bind_result( $db_grtp_type );
	$request_GrtpType->close();

	//Load SE Type
	$request_SeType = "SELECT `seType` FROM `se_type`";
	$request_SeType = $conn->prepare( $request_SeType );
	$request_SeType->execute();
	$request_SeType->bind_result( $db_se_type );
	$request_SeType->close();


	// ------------------------ EFFOR ENTRY ------------------------
	//Load Harvest Number
	// $request_HarvestNumber = "SELECT `harvest_number` FROM `forum_harvest` ORDER BY `harvest_number` ASC";
	// $request_HarvestNumber = $conn->prepare( $request_HarvestNumber );
	// $request_HarvestNumber->execute();
	// $request_HarvestNumber->bind_result( $db_harvest_number );	
	// $request_HarvestNumber->close();
	


?>




