
	<!-- Row One -->
	<div class="rowWide">
		<!-- Harvest Effort Number -->
		<div class="inputFrame inputFrame-126 clearfix grpelem" style="text-align:center;">
			<span class="textFrame textFrame-126 clearfix grpelem" style="text-align:center;">
				<input class="wrapped-input wid_input wid_input-126" style="text-align:center;" id="effortNumberTT" type="text" name="effortNumber" required="required" value="<?php $date = date_create(); echo ( date("Y") . '-ESF-' . date_timestamp_get($date) )?>"/>
			</span>
		</div>

		<!-- Fisher Full Name -->
		<div class="inputFrame clearfix grpelem" style="width: 236px;">
			<span style="width: 236px;">
				<?php
					echo '<select class="chosen-select" style="width:236px;" name="fisherName" tabindex="1">';
					echo '<option value="-1" selected="selected" disabled required="required">FISHERMAN\'s FULL NAME</option>';
					while( $row = mysql_fetch_array( $result_FishermanName )){
						$fisherName = strtoupper( $row['fishermanName'] );
						echo "<option value='" . $fisherName . "'>" . $fisherName . "</option>";
					}
					echo "</select>";
				?>
			</span>
		</div>
    </div>

	<!-- Row Two -->
    <div class="rowWide">
    	<!-- BTSIZE -->
  		<div class="inputFrame inputFrame-80 clearfix grpelem styled-select">
			<span class="textFrame textFrame-80 clearfix grpelem">
 				<?php
 					echo '<select class="wrapped-input wid_input wid_input-80" name="btSize" tabindex="2">';
 						echo '<option value="-1" selected="selected" disabled required="required"> BTSIZE </option>';
 						while( $row = mysql_fetch_array( $result_BoatType )){
							$boatName = strtoupper( $row['boatSizeType'] );
							echo "<option value='" . $boatName . "'>" . $boatName . "</option>";
						} 	
					echo "</select>";
				?>
			</span>
		</div>

		<!-- Entry Date -->
 		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
        		<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="3" name="harvestDate" id="datepicker" required="required" style="cursor:pointer text-align:center" placeholder="DATE" />
			</span>
		</div>

		<!-- GRID -->
		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="4" name="grid" maxlength="10" placeholder="GRID - 1838"/>
			</span>
		</div>

		<!-- LATLONG -->
		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="5" name="latlong" maxlength="20" placeholder="LATLONG"/>	
			</span>
		</div>

		<!-- GRTP -->
		<div class="inputFrame inputFrame-80 clearfix grpelem styled-select">
			<span class="textFrame textFrame-80 clearfix grpelem">
 				<?php
 					echo '<select  class="wrapped-input wid_input wid_input-80" name="grtp" tabindex="6">';
 						echo '<option value="-1" selected="selected">GRTP</option>';
 						while( $row = mysql_fetch_array( $request_GrtpType )){
							$grtpName = strtoupper( $row['grtpType'] );
							echo "<option value='" . $grtpName . "'>" . $grtpName . "</option>";
						} 	
					echo "</select>";
				?> 					
			</span>
		</div>

		<!-- GRLEN -->
  		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="7" name="grlen5" maxlength="5" placeholder="GRLEN5 - [yards]"/>
			</span>
		</div>
    </div>

    <!-- Row Three -->
    <div class="rowWide">
    	<!-- GRHTM -->
    	<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="8" name="grhtm" maxlength="5" placeholder="GRHTM - [meshes]"/>
			</span>
		</div>

		<!-- MESH5 -->
		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="9" name="mesh5" maxlength="5" placeholder="MESH5 - [inches]"/>
			</span>
		</div>
 			
 		<!-- GRDEP5 -->
 		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="10" name="grdep5" maxlength="5" placeholder="GRDEP5 - [feet]"/>
			</span>
		</div>

		<!-- SIDEP5 -->
 		<div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="11" name="sidep5" maxlength="5" placeholder="SIDEP5 - [feet]"/>
			</span>
		</div>

		<!-- SETYPE -->
		<div class="inputFrame inputFrame-80 clearfix grpelem styled-select">
			<span class="textFrame textFrame-80 clearfix grpelem">
 				<?php
 					echo '<select class="wrapped-input wid_input wid_input-80" name="setype" tabindex="12">';
 						echo '<option value="-1" selected="selected">SETYPE</option>';
 						while( $row = mysql_fetch_array( $request_SeType )){
							$seName = strtoupper( $row['seType'] );
							echo "<option value='" . $seName . "'>" . $seName . "</option>";
						} 	
					echo "</select>";
				?> 	
			</span>
		</div>

		<!-- EFFDUR -->
	    <div class="inputFrame inputFrame-80 clearfix grpelem">
			<span class="textFrame textFrame-80 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-80" type="text" tabindex="12" name="effdur" maxlength="4" placeholder="EFFDUR - [hours]"/>
			</span>
		</div>
    </div>

    <!-- For a space -->
    <div class="rowWide"></div>

	<div class="rowWide">
		<div class="checkBoxMe">
			<input type="checkbox" class="chkBox" id="c1" name="fbw" tabindex="13" /><label class="checkBoxLbl" for="c1"tabindex="17"><span></span>Fish Boxes Weighed</label>
		</div>
		<div class="checkBoxMe">
			<input type="checkbox" class="chkBox" id="c2" name="bwe" tabindex="14" /><label class="checkBoxLbl" for="c2"><span></span>Box Weights Estimated</label>
		</div>
		<div class="checkBoxMe">
			<input type="checkbox" class="chkBox" id="c3" name="bwff" tabindex="15" /><label class="checkBoxLbl" for="c3"><span></span>Box Weights from Fishbuyer</label>
		</div>
	</div>
	<div class="rowWide">
		<div class="checkBoxMe" style="width: 556px; margin-bottom: 15px; padding-left: 5px;">
			I, hereby verify that my catch has been Assessed
			<input type="text" class="enteredBy" name="signedBy" style="color:#000;" required="required" placeholder="type your name here" tabindex="16" maxlength="25"/>
		</div>
	</div>




    <div class="rowWide"></div>
    <div class="rowWide"></div>

    <div class="bigrow">
        <div class="clearfix grpelem widgetu1212 widgetu1212W">
            <span class="clearfix grpelem" id="u1214-4W"
                <?php
                    if( isset( $_SESSION['responsID'])){
                    	switch ($_SESSION['responsID']) {

                    		case 'harvest_MissingField':
                    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Missing Mandotory Field(s). ';
                    			$_SESSION['responsID'] = null;
                    		break;

                    		case 'w197ent_err':
                    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Something went wrong. Please try again.';
								$_SESSION['responsID'] = null;
							break;

							case 'hdaw1976ent_added':
								echo 'style="width:556px; visibility: visible; background-color: #64c178;"> Good Work. Record(s) added.';
								$_SESSION['responsID'] = null;
							break;

                    		default:
                    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Something went VERY VERY wrong.. Call Cem Bakar.';
                    			break;
                    	}
                    } else { echo '">'; }
                ?>
            </span>
        </div>
    </div>
  </form>