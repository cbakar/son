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



<form class="addHarvestSample" action="php/addHarvestSample.php" method="post" autocomplete="on">
	<div class="rowWide">
        <div class="inputFrame inputFrame-175 clearfix grpelem">
            <span class="textFrame textFrame-175 clearfix grpelem">
                <input class="wrapped-input wid_input wid_input-175" id="effortNumberTT" type="text" name="effortNumber" value="<?php echo $_POST[ 'effortNumber' ]; ?>" readonly="readonly" />
            </span>
        </div>
        <div class="inputFrame inputFrame-175 clearfix grpelem">
            <span class="textFrame textFrame-175 clearfix grpelem">
                <input class="wrapped-input wid_input wid_input-175" id="effortNumberTT" type="text" name="fishermanName" value="<?php echo $_POST[ 'fishermanName' ]; ?>" readonly="readonly" />
            </span>
        </div>
        <div class="inputFrame inputFrame-175 clearfix grpelem">
            <span class="textFrame textFrame-175 clearfix grpelem" style="width: 169px;">
                <input class="wrapped-input wid_input wid_input-175" id="effortNumberTT" type="text" name="effortDate" value="<?php echo $_POST[ 'effortDate' ]; ?>" readonly="readonly" />
            </span>
        </div>
    </div>

    <div class="rowWide">
  		<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
			<span class="textFrame textFrame-126 clearfix grpelem">
 				<?php
 					echo '<select class="wrapped-input wid_input wid_input-126" name="species" tabindex="2">';
					echo '<option value="-1" selected="selected" disabled> SPECIES </option>';
					$request_Species = $conn->prepare( "SELECT `spc_labn` FROM `species` ORDER BY `species`.`spc_labn` ASC");
					$request_Species->execute();
					$request_Species->bind_result( $db_species );
					while( $request_Species->fetch() ){
						$speciesName = strtoupper( $db_species );
						echo "<option value='" . $speciesName . "'>" . $speciesName . "</option>";
					}	
					echo "</select>";
					$request_Species->close();
				?>
			</span>
		</div>
		<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
			<span class="textFrame textFrame-126 clearfix grpelem">
 				<?php
 					echo '<select class="wrapped-input wid_input wid_input-126" name="formCode" tabindex="3">';
					echo '<option value="-1" selected="selected" disabled> FORM </option>';
					$request_Forms = $conn->prepare( "SELECT `formName` FROM `form` ORDER BY `form`.`formName` ASC");
					$request_Forms->execute();
					$request_Forms->bind_result( $db_forms );
					while( $request_Forms->fetch() ){
						$formName = strtoupper( $db_forms );
						echo "<option value='" . $formName . "'>" . $formName . "</option>";
					}	
					echo "</select>";
					$request_Forms->close();
				?>
			</span>
		</div>
		<div class="inputFrame inputFrame-126 clearfix grpelem styled-select">
			<span class="textFrame textFrame-126 clearfix grpelem">
				<select class="wrapped-input wid_input wid_input-126" name="unitCode" tabindex="4">
					<option value="-1" selected="selected" disabled> UNITS </option>
					<option value="1">KILOGRAMS</option>
					<option value="2">POUNDS</option>
				</select>					
			</span>
		</div>
        <div class="inputFrame inputFrame-126 clearfix grpelem">
            <span class="textFrame textFrame-126 clearfix grpelem">
                <input class="wrapped-input wid_input wid_input-126" type="text" name="fishWeight" required="required" placeholder="WEIGHT" tabindex="4" />
            </span>
        </div>
    </div>

    <div class="rowWide"></div>

	<div class="rowWide">
		<div class="checkBoxMe">
			<input type="radio" class="chkBox" id="c1" name="boxW" value="fbw" tabindex="13" /><label class="checkBoxLbl" for="c1" tabindex="17"><span></span>Fish Boxes Weighed</label>
		</div>
		<div class="checkBoxMe">
			<input type="radio" class="chkBox" id="c2" name="boxW" value="bwe" tabindex="14" /><label class="checkBoxLbl" for="c2"><span></span>Box Weights Estimated</label>
		</div>
		<div class="checkBoxMe">
			<input type="radio" class="chkBox" id="c3" name="boxW" name="bwff" tabindex="15" /><label class="checkBoxLbl" for="c3"><span></span>Box Weights from Fishbuyer</label>
		</div>
	</div>
	<div class="rowWide">
		<div class="checkBoxMe" style="width: 556px; margin-bottom: 15px; padding-left: 5px;">
			I, hereby verify that my catch has been Assessed
			<input type="text" class="enteredBy" name="signedBy" style="color:#000;" required="required" placeholder="type your name here" tabindex="16" maxlength="25"/>
		</div>
	</div>

	<div class="rowWide"></div>
	
	<div class="rowWide">
        <div class="inputFrame inputFrame-126  clearfix grpelem" style="width:164px; margin-left: 430px;">
            <span class="textFrame textFrame-126 grpelem dataSheetBtn">
                <input class="wrapped-input wid_input wid_input-126 dataSheetBtnText" type="submit" tabindex="17" name="enterHarvestSample" value="ENTER"/>
            </span>
        </div>
    </div>
</form>
		


<?php
		
	if( isset($_POST['ENTER'])){	
		echo $_POST['signedBy'];
		exit();
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

