<?php 	ob_start(); error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!-- General Print Out -->

<?php if( !isset( $_SESSION['user_name'])){ header( 'Location: ../index.php?id=gottaLogin' );} ?>
<?php 

	$entered_by = $_SESSION[ 'user_name' ];
	$entered_on = date('Y/m/d H:i:s');

	$printMe = 0;
	if( $printMe == 1 ) {
		echo 'Fisherman Name :' . $_POST[ 'fisherName' ] . '</br>';
		exit();
	}
		
	// <!-- Establishing the Database Connection -->
	if( !@include_once ( 'db/db_connect.php' ) ) {
			throw new Exception( 'Failed to connect to Database' );	
	}
	
	// try{ connectDB(); }
	// catch( Exception $e ) {	echo 'Message: ' .$e->getMessage(); }


	/* Enter a new record */
 	if( isset( $_POST['searchSubmit'] )){
  		if ($load_effortData = $conn->prepare("SELECT `effort_number`, `fisher_name`,`effort_date`,`entered_on` FROM `forum_effort` WHERE `fisher_name` LIKE ? ORDER BY  `forum_effort`.`entered_on` DESC")) {
			$load_effortData->bind_param('s', $_POST['fisherName'] ); 
			$load_effortData->execute();    // Execute the prepared query.
			$load_effortData->store_result();

         	// get variables from result.
        	$load_effortData->bind_result( $db_effort_number, $db_fisher_name, $db_effort_date, $db_entered_on );

	        while( $load_effortData->fetch() ){
?>
			<!-- <form class="forumContanierHarvest" action="php/addHarvest.php?record=<?php echo $db_harvest_number; ?>" method="post" autocomplete="on"> -->
				<form class="forumContanierHarvest" action="" method="post" autocomplete="on">
					<!-- Row Two -->
					<div class="rowWide" style="width:100%;">
						<!-- EFFORT NUMBER -->
						<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
							<span class="textFrame textFrame-126 clearfix grpelem">
								<input class="wrapped-input wid_input wid_input-126" type="text" name="effortNumber" style="cursor:pointer text-align:center" readonly="readonly" value=" <?php echo $db_effort_number; $_SESSION['effortNumber'] = $db_effort_number;  ?>" />
							</span>
						</div>

						<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
							<span class="textFrame textFrame-126 clearfix grpelem">
								<input class="wrapped-input wid_input wid_input-126" type="text" name="fishermanName" style="cursor:pointer text-align:center" readonly="readonly" value=" <?php echo $db_fisher_name; ?>" />
							</span>
						</div>

						<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
							<span class="textFrame textFrame-126 clearfix grpelem">
								<input class="wrapped-input wid_input wid_input-126" type="text" name="effortDate" style="cursor:pointer text-align:center" readonly="readonly" value=" <?php echo $db_effort_date; ?>" />
							</span>
						</div>

						<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
							<span class="textFrame textFrame-126 clearfix grpelem">
								<input class="wrapped-input wid_input wid_input-126" type="text" name="enteredOn" style="cursor:pointer text-align:center" readonly="readonly" value=" <?php echo $db_entered_on; ?>" />
							</span>
						</div>

						<div class="inputFrame clearfix grpelem">
							<span class="textFrame grpelem dataSheetBtn" style="width:90px; cursor: pointer;">
					  			<input class="wrapped-input wid_input" style="width:90px; text-align:center; position: 0px; left:0px right: 0px; height: 20px; cursor: pointer;" type="submit" name="addNewSample" value="ADD SAMPLE" />
							</span>
						</div>
					</div>
				</form>
<?php
        	}
		}
	}
	
	// <!-- Close the Database Connection -->
	function closeDB() {
		if( !@include_once ( 'db/db_close.php' ) ) {
			throw new Exception( 'Failed to close the Database' ); 
		}
		return true; 
	}

	try { closeDB(); }
	catch ( Exception $e) { echo 'Message: ' .$e->getMessage(); }
?>

