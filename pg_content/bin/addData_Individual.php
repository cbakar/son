<?php 	ob_start(); error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!-- General Print Out -->

<?php
	session_start();
	if( !isset( $_SESSION['user_name'])){ header( 'Location: ../index.php?id=gottaLogin' );}
?>

<?php 





	echo $_POST['harvestNumber'];
	exit();

	$entered_by = $_SESSION[ 'user_name' ];
	$entered_on = date('Y/m/d H:i:s');

	$printMe = 0;
	if( $printMe == 1 ) {
		echo 'Harvest # :' . $_POST[ 'harvestNumber' ] . '</br>'; 
		echo 'Fisherman Name :' . $_POST[ 'fisherName' ] . '</br>';
		echo 'BT-SIZE :' . $_POST[ 'btSize' ] . '</br>';
		echo 'Harvest Date :' . $_POST[ 'harvestDate' ] . '</br>';
		echo 'GRID :' . $_POST['grid'] . '</br>';
		echo 'LATLONG :' . $_POST['latlong'] . '</br>';
		echo 'GRTP :' . $_POST['grtp'] . '</br>';
		echo 'GRLEN5 :' . $_POST['grlen5'] . '</br>';
		echo 'GRHTM :' . $_POST['grhtm'] . '</br>';
		echo 'MESH5 :' . $_POST['mesh5'] . '</br>';
		echo 'GRDEP5 :' . $_POST['grdep5'] . '</br>';
		echo 'SIDEP5 :' . $_POST['sidep5'] . '</br>';
		echo 'SETYPE :' . $_POST['setype'] . '</br>';

		if( isset( $_POST[ 'fbw' ] ) == 'on' ) { $fbw ='Yes'; } else { $fbw = 'No'; }
		if( isset( $_POST[ 'bwe' ] )  == 'on' ) { $bwe ='Yes'; } else { $bwe = 'No'; }
		if( isset( $_POST[ 'bwff' ] )  == 'on' ) { $bwff ='Yes'; } else { $bwff = 'No'; }
		echo 'fbw > ' . $fbw . '</br>';
		echo 'bwe > ' . $bwe . '</br>';
		echo 'bwff > ' . $bwff . '</br>';
		echo 'Signed By > ' . $_POST[ 'signedBy' ] . '</br>';

		echo 'Entered On :' . $entered_on . '</br>';
		echo 'Entered By :' .$entered_by;

		exit();
	}

	// <!-- Establishing the Database Connection -->
	function connectDB() {
		if( !@include_once ( '../db/db_connect.php' ) ) {
			throw new Exception( 'Failed to connect to Database' );	
		}
		return true; 
	}
	try{ connectDB(); }
	catch( Exception $e ) {	echo 'Message: ' .$e->getMessage(); }

	/* These values will be enter by the forum */		
	$harvestNumber = $_POST[ 'harvestNumber' ];
	$fisherName = $_POST['fisherName'];
	$btSize = $_POST['btSize'];
	$harvestDate  = $_POST['harvestDate'];
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

	if( isset( $_POST[ 'fbw' ] ) == 'on' ) { $fbw ='Yes'; } else { $fbw = 'No'; }
	if( isset( $_POST[ 'bwe' ] )  == 'on' ) { $bwe ='Yes'; } else { $bwe = 'No'; }
	if( isset( $_POST[ 'bwff' ] )  == 'on' ) { $bwff ='Yes'; } else { $bwff = 'No'; }
	$signedBy = $_POST[ 'signedBy' ];

	// Check for mandotory fields 
	if( empty( $harvestNumber ) OR empty( $fisherName ) OR empty( $btSize ) OR empty( $harvestDate )){
		header('Location: ../usrPg.php?id=harvest_MissingField');
		exit();
	}

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

	$printMe = 0;
	if( $printMe == 1 ){ 
		echo 'Harvest Code : ' . $harvestNumber . '</br>';
		echo 'Fisher Name : ' . $fisherName . '</br>';
		echo 'BT-SIZE : ' . $btSize . '</br>';
		echo 'Harvest Date : ' . $harvestDate . '</br>';
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
		echo 'FBW : ' . $fbw . '</br>';
		echo 'BWE : ' . $bwe . '</br>';
		echo 'BWFF : ' . $bwff . '</br>';
		echo 'Signed By : ' . $signedBy . '</br>';

		echo 'Entered By : ' . $entered_by . '</br>';
		echo 'Entered ON : ' . $entered_on . '</br>';
		exit();
	}


	/* Enter a new record */
	if( isset( $_POST['enterSubmit'] )){
		$sql = "INSERT INTO `forum_harvest` ( `user_name`, `harvest_number`, `fisher_name`, `bt_size`, `harvest_date`, `entered_on`, `grid`, `latlong`, `grtp`, `grlen5`, `grhtm`, `mesh5`, `grdep5`, `sidep5`, `setype`, `effdur`, `fbw`, `bwe`, `bwff`, `signed_by` ) VALUES ( '$entered_by', '$harvestNumber', '$fisherName', '$btSize',  '$harvestDate', '$entered_on', '$grid', '$latlong', '$grtp', '$grlen5', '$grhtm',  '$mesh5',  '$grdep5', '$sidep5', '$setype', '$effdur', '$fbw', '$bwe','$bwff' , '$signedBy')";
		$result = mysql_query( $sql );	
		if( !$result ) { closeDB(); header( 'Location: ../usrPg.php?id=hdaw197ent_err'); }
		else { closeDB(); header( 'Location: ../usrPg.php?id=hdaw1976ent_added'); }
	}


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

