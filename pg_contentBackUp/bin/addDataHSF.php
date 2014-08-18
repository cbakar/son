<?php session_start(); ?>
<?php 	ob_start(); error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!-- General Print Out -->
<?php 
	$printMe = 0;
	if( $printMe == 1 ) {
		echo 'Effort # :' . $_POST[ 'effortNumber' ] . '</br>Sample Number :' . $_POST[ 'onoffswitch1' ] . '</br>'; 
		echo 'Indiv.Code :' . $_POST[ 'indivCode1' ] . '</br> Length Total: ' . $_POST[ 'lengthTotal1' ] . '</br>Length Fork :'  . $_POST[ 'lengthFork1' ] . '</br>';
		echo 'Round Weight :' . $_POST[ 'roundWeight1' ] . '</br>Dressed Weight :' .  $_POST[ 'dressedWeight1' ] . '</br>Sex :'  . $_POST[ 'sex1' ] . '</br>';
		echo 'Scars Wounds :' . $_POST[ 'scarsWounds1' ] . '</br> Fin Clips :' . $_POST[ 'finClips1' ] . '</br>Fish S. Code :' . $_POST[ 'fishScode1' ] . '</br>';
		echo 'Lamprey :' .$_POST[ 'lamprey1' ] . '</br> Scales :' . $_POST[ 'scales1' ] . '</br>Otoliths :' . $_POST[ 'otoliths1' ] . '</br>';
		echo 'Ovaries Gonads :' . $_POST[ 'ovariesGonads1' ] . '</br>Stomach :' . $_POST[ 'stomach1' ] . '</br>';
		echo 'Comment' . $_POST[ 'comment1' ];
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

	/* Passing Vars - Print if Errors */

	$username = $_SESSION[ 'user_name' ];
	$date = date('Y/m/d H:i:s');

	/* These values will be enter by the forum */		
	$effortCode = $_POST[ 'effortNumber' ];
	$sampleNumber = $_POST[ 'onoffswitch1' ];
	$indivCode = $_POST[ 'indivCode1' ];
	$lengthTotal = $_POST[ 'lengthTotal1' ];	
	$lengthFork = $_POST[ 'lengthFork1' ];
	$roundWeight = $_POST[ 'roundWeight1' ];
	$dressedWeight = $_POST[ 'dressedWeight1' ];
	$sex = $_POST[ 'sex1' ];
	$scarsWounds = $_POST[ 'scarsWounds1' ];
	$finClips = $_POST[ 'finClips1' ];
	$fishScode= $_POST[ 'fishScode1' ];
	$lamprey = $_POST[ 'lamprey1' ];
	$scales = $_POST[ 'scales1' ];
	$otoliths = $_POST[ 'otoliths1' ];
	$ovariesGonads = $_POST[ 'ovariesGonads1' ];
	$stomach = $_POST[ 'stomach1' ];
	$comment = $_POST[ 'comment1' ];


	// Check for mandotory fields 
	if( empty( $lengthTotal ) OR empty($lengthFork) OR empty($fishScode) OR empty($scales) ){
		header('Location: ../usrPg.php?id=missingField');
		exit();
	}

	// Replace empty values with N/E
	if( empty( $indivCode )) $indivCode = 0;
	if( empty( $roundWeight )) $roundWeight = 0.0;
	if( empty( $dressedWeight )) $dressedWeight = 0.0;
	if( $sex == -1 ) $sex = 'Not Entered';
	if( $scarsWounds == -1 ) $scarsWounds = 'Not Entered';
	if( $finClips == -1 ) $finClips = 'Not Entered';
	if( empty( $lamprey )) $lamprey = 0;
	if( empty( $scales )) $scales = 0;
	if( $otoliths == -1 ) $otoliths = 'Not Entered';
	if( $ovariesGonads == -1 ) $ovariesGonads = 'Not Entered';


	
	$printMe = 0;
	if( $printMe == 1 ){ 
	echo 'Indiv. Code > ' .  $indivCode; echo '</br>';
	echo 'Length Total > ' . $lengthTotal; echo '</br>';
	echo 'Dressed Weight > ' . $dressedWeight; echo '</br>';
	echo 'Round Weight > ' . $roundWeight; echo '</br>';
	echo '$stomach > ' . $stomach; echo '</br>';
	echo '$lamprey > ' . $lamprey; echo '</br>';
	echo '$scales > ' . $scales; echo '</br>';
	echo '$ovariesGonads > ' . $ovariesGonads; echo '</br>';
	echo '$finClips > ' . $finClips; echo '</br>';
	echo '$otoliths > ' . $otoliths; echo '</br>';
	echo '$sex > ' . $sex; echo '</br>';
	echo '$scarsWounds > ' . $scarsWounds; echo '</br>';
	echo '$comment > ' . $comment; echo '</br>';
	echo '$fishScode > '. $fishScode; echo '</br>';
	exit();
	}
 

/* Enter a new record */
if( isset( $_POST['enterSubmit'] )){
	if ( $sampleNumber == 0 ) { $sampleNumber = 1; }
	$sql = "INSERT INTO `dataSheet_forum` ( `user_name`, `entry_date`, `effort_code`, `sample_number`, `indiv_code`, `length_total`, `length_fork`, `round_weight`, `dressed_weight`, `sex`, `scars_wounds`, `fin_clips`, `fish_s_code`, `lamprey`, `scales`, `otoliths`, `ovaries_gonads`, `stomach`, `comment` ) VALUES( '$username', '$date', '$effortCode', '$sampleNumber', '$indivCode', '$lengthTotal', '$lengthFork', '$roundWeight', '$dressedWeight', '$sex', '$scarsWounds',  '$finClips',  '$fishScode', '$lamprey', '$scales', '$otoliths', '$ovariesGonads', '$stomach','$comment')";
		$value= 0; if( $value == 1 ) { echo 'enterSubmit > </br>' . $sql; exit();}
		$result = mysql_query( $sql );	
	if( !$result ) { closeDB(); header( 'Location: ../usrPg.php?id=w197ent_err'); }
	else { closeDB(); header( 'Location: ../usrPg.php?id=w197ent_add'); }
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

