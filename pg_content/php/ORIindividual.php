<?php 	ob_start(); error_reporting(E_ALL); ini_set('display_errors', 1); ?>	
<!-- navigation_bar ends here -->
<div id="dsfLine"></div>
<div id="main_page">		
	<!-- 	<form name="addUser" action="db_pages/add_user.php" method="post" autocomplete="on"> -->
	<form  action="src/db_biz/addDataSF.php" method="post" autocomplete="on">
		<!-- First Row Starts -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="effortCode" required="required" <?php echo'value=' . $eff_code; ?> /> 
				</span>
			</div>	
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="sampleNumber" required="required" <?php echo 'value=' . $spl_num; ?> />
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="1" name="indivCode" maxlength="8" placeholder="Indiv. Code"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="11" name="scales" required="required" maxlength="4" placeholder="Scales"  onkeypress="return isNumber(event)"/>
				</span>
			</div>			
		</div>
		<!-- First Row Ends Here -->
		
		<!-- Second Row Starts Here -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="2" name="lengthTotal" required="required" maxlength="6" placeholder="Length Total - [mm]"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="3" name="lengthFork" required="required" maxlength="6" placeholder="Length Fork - [mm]"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="4" name="roundWeight" maxlength="6" placeholder="Round Weight- [kg]"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="5" name="dressedWeight" maxlength="4" placeholder="Dressed Weight - [kg]"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
		</div>		
		<!-- Second Row Ends Here -->

		<!-- Third Row Starts Here -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem styled-select"   data-required="true">
				<span class="textFrame clearfix grpelem">
					<select  class="wrapped-input wid_input" name="sex"  style="padding-top: 18px;" tabindex="6">
						<option value="-1" selected="selected">SEX</option>
						<option value="-1">------------------------------------</option>
				 		<option value="Male">MALE</option>
						<option value="Female">FEMALE</option>						
					</select>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem styled-select" data-required="true">
				<span class="textFrame clearfix grpelem">
					<select  class="wrapped-input wid_input" name="scarsWounds"  style="padding-top: 18px;" tabindex="7">
						<option value="-1" selected="selected">SCARS-WOUNDS</option>
						<option value="-1">------------------------------------</option>
				 		<option value="Scars">SCARS</option>
						<option value="Wounds">WOUNDS</option>					
					</select>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem styled-select" data-required="true">
				<span class="textFrame clearfix grpelem">
					<select  class="wrapped-input wid_input" name="finClips"  style="padding-top: 18px;" tabindex="8">
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
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="9" name="fishScode" required="required" maxlength="10" placeholder="Fish S. Code"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
		</div>
		<!-- Third Row Ends Here -->

		<!-- Fourth Row Starts Here -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="10" name="lamprey" maxlength="4" placeholder="Lamprey"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="14" name="stomach" maxlength="4" placeholder="Stomach"  onkeypress="return isNumber(event)"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem styled-select" data-required="true">
				<span class="textFrame clearfix grpelem">
					<select  class="wrapped-input wid_input" name="otoliths"  style="padding-top: 18px;" tabindex="12">
						<option value="-1" selected="selected">OTOLITHS</option>
						<option value="-1">------------------------------------</option>
				 		<option value="One">1</option>
						<option value="Two">2</option>						
						<option value="No">NO</option>						
					</select>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem styled-select" data-required="true">
				<span class="textFrame clearfix grpelem">
					<select  class="wrapped-input wid_input" style="padding-top: 18px;" tabindex="13" name="ovariesGonads">
						<option value="-1" selected="selected">OVARIES-GONADS</option>
						<option value="-1">------------------------------------</option>
				 		<option value="Ovaries">OVARIES</option>
						<option value="Gonads">GONADS</option>
					</select>
				</span>
			</div>
		</div>			
		<!-- Fourth Row Ends Here -->
		
		<!-- Fifth Row Start Here -->
		<div class="rowWide">

			<div class="inputFrame clearfix grpelem" data-required="true" style="width: 325px;">
				<span class="textFrame clearfix grpelem" style="width: 325px;">
					<input class="wrapped-input wid_input" style="width: 320px; text-align:left;" type="text" tabindex="15" name="comment"  maxlength="150" placeholder="Comments"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame grpelem dataSheetBtn">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="16" name="addSampleSubmit" value="ADD A NEW SAMPLE" />
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" data-required="true">
				<span class="textFrame grpelem dataSheetBtn">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="17" name="enterSubmit" value="ENTER" />
				</span>
			</div>
		</div>
		<!-- Fifth Row Ends Here -->
	
		<div class="bigrow">
			<div class="clearfix grpelem widgetu1212 widgetu1212W"  style="width: 675px;">
				<span class="clearfix grpelem" id="u1214-4W" style="width: 675px; 
					<?php 	
						if( isset( $_GET[ 'id' ] )){ 
							if( $_GET['id'] == 'w197ent_add' ){ 
								echo ' visibility: visible; background-color: #007AC3;"> Record is added.'; 
							} elseif( $_GET['id'] == 'w197ent_err' ){ 
								echo ' visibility: visible; background-color: #FF0000;"> There was an error! New record cannot be added.'; 
							} elseif( $_GET['id'] == 'w345ans_add' ){ 
								echo ' visibility: visible; background-color: #007AC3;"> New sample is added.'; 
							} elseif( $_GET['id'] == 'w345ans_err' ) { 
								echo ' visibility: visible; background-color: #FF0000;"> There was an errror! New sample cannot be added.'; 
							}
							else {
								echo ' visibility: visible; background-color: #FF0000;"> Something went wrong. Record is not added.'; 	
							}
						} else { echo '">';}
						
					?>				
				</span>
			</div>	
		</div>			
	</form>
</div> <!-- main_page ends here -->

