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



<form class="addIndividualSample" action="" method="post" autocomplete="on">
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
            <span class="textFrame textFrame-175 clearfix grpelem" style="width: 180px;">
                <input class="wrapped-input wid_input wid_input-175" id="effortNumberTT" type="text" name="effortDate" value="<?php echo $_POST[ 'effortDate' ]; ?>" readonly="readonly" />
            </span>
        </div>
    </div>

	<!-- First Row Starts -->
	<div class="rowWide">
		<div class="inputFrame inputFrame-5clearfix grpelem" data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="sampleNumber" value="Sample Number" required="required" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="1" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="2" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="3" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="4" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="5" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="6" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="7" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sampleNumber" value="8" />
			</span>
		</div>			
	</div>
	<!-- First Row Ends Here -->
	<div class="rowWide">	
		<div class="inputFrame clearfix grpelem" data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" tabindex="1" name="indivCode" maxlength="8" placeholder="Indiv. Code"  onkeypress="return isNumber(event)"/>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="indivCode" />
			</span>
		</div>	
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem" data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" tabindex="2" name="lengthTotal" required="required" maxlength="6" placeholder="Length Total - [mm]"  onkeypress="return isNumber(event)"/>
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthTotal" />
			</span>
		</div>		
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem" data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" tabindex="3" name="lengthFork" required="required" maxlength="6" placeholder="Length Fork - [mm]"  onkeypress="return isNumber(event)"/>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lengthFork" />
			</span>
		</div>		
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem" data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" tabindex="4" name="roundWeight" maxlength="6" placeholder="Round Weight- [kg]"  onkeypress="return isNumber(event)"/>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="roundWeight" />
			</span>
		</div>		
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem" data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" tabindex="5" name="dressedWeight" maxlength="4" placeholder="Dressed Weight - [kg]"  onkeypress="return isNumber(event)"/>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="dressedWeight" />
			</span>
		</div>		
	</div>



	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="sex" value="Sex - [M/F]" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="sex" />
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="sex" value="SCARS-WOUNDS - [S/W]" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="SCARS-WOUNDS" />
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="sex" value="FIN CLIPS" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="finClips" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">FIN CLIPS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="RV">RV</option>
					<option value="LV">LV</option>
					<option value="RP">RP</option>
					<option value="LP">LP</option>
					<option value="AD">AD</option>										
				</select>
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="fishSpeciesCode" value="Fish Species Code" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="fishSpeciesCode" />
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="lamprey" value="Lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="lamprey" />
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="scales" value="Scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="scales" />
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="otoliths" value="Otoliths" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>										
				</select>
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>											
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>											
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="otoliths" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OTO</option>
					<option value="-1">------------------------------------</option>
			 		<option value="One">1</option>
					<option value="Two">2</option>						
					<option value="No">NO</option>										
				</select>
			</span>
		</div>			
	</div>


	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="ovariesGonads" value="Ovaries Gonads" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>									
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>									
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>									
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>									
				</select>
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>										
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>									
				</select>
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<select  class="wrapped-input wid_input wid_input-6" name="ovariesGonads" style="width: 54px; height: 27px;" tabindex="8">
					<option value="-1" selected="selected">OVARIES-GONADS</option>
					<option value="-1">------------------------------------</option>
			 		<option value="Ovaries">OVARIES</option>
					<option value="Gonads">GONADS</option>									
				</select>
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
			<span class="textFrame clearfix grpelem">
				<input class="wrapped-input wid_input" type="text" name="stomach" value="Stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>	
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>
		<div class="inputFrame inputFrame-6 clearfix grpelem" data-required="true">
			<span class="textFrame textFrame-6 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-6" type="text" name="stomach" />
			</span>
		</div>			
	</div>

	<div class="rowWide">
		<div class="inputFrame clearfix grpelem" data-required="true" style="width: 560px;">
			<span class="textFrame clearfix grpelem" style="width: 560px;">
				<input class="wrapped-input wid_input" style="width: 560px; text-align:left;" type="text" tabindex="15" name="comment"  maxlength="150" placeholder="Comments"/>
			</span>
		</div>		
	</div>
	
	<div class="rowWide">
        <div class="inputFrame inputFrame-126  clearfix grpelem" style="width:164px; margin-left: 430px;">
            <span class="textFrame textFrame-126 grpelem dataSheetBtn">
                <input class="wrapped-input wid_input wid_input-126 dataSheetBtnText" type="submit" tabindex="17" name="enterHarvestSample" value="ENTER"/>
            </span>
        </div>
    </div>
</form>
		


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


