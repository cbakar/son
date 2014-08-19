<?php 	ob_start(); error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<!-- General Print Out -->
<?php if( !isset( $_SESSION['user_name'])){ header( 'Location: ../../index.php?id=gottaLogin' );} ?>

<?php

	$printMe = 0;
	if( $printMe == 1 ) {
		echo 'Effort Name :' . $_POST[ 'effortNumber' ] . '</br>';
		exit();
	}
		
	// <!-- Establishing the Database Connection -->
	if( !@include_once ( 'db/db_connect.php' ) ) {
			throw new Exception( 'Failed to connect to Database' );	
	}
?>


<!-- navigation_bar ends here -->
<div id="stsLine"></div>
<div id="main_page">		
	<form id="getData" method="post" action="src/core/data_puller.php">
		<div class="row">
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="1" name="exportdata" value="Export Data"  style="width: 100%; cursor:pointer;"/>
				</span>
			</div>		
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="2" name="importdata" value="Import Data" style="width: 100%; cursor:pointer;"/>
				</span>
			</div>		
		</div>
		<!-- First Row Ends Here -->
	
		<!-- Second Row Starts Here -->
		<div class="row">
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="3" name="usersettings" value="User Settings" style="width: 100%; cursor:pointer;"/>
				</span>
			</div>		
	
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="4" name="othersettings" value="Visualize" style="width: 100%; cursor:pointer;"/>
				</span>
			</div>		
		</div>
	</form>	
	<!-- Second Row Ends Here -->
</div>
<!-- main_page ends here -->


<?php
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


