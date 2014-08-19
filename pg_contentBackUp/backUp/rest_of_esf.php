
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="2" class="onoffswitch-checkbox" id="myonoffswitch2">
	            <label class="onoffswitch-label" for="myonoffswitch2">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="3" class="onoffswitch-checkbox" id="myonoffswitch3">
	            <label class="onoffswitch-label" for="myonoffswitch3">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="4" class="onoffswitch-checkbox" id="myonoffswitch4">
	            <label class="onoffswitch-label" for="myonoffswitch4">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="5" class="onoffswitch-checkbox" id="myonoffswitch5">
	            <label class="onoffswitch-label" for="myonoffswitch5">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="6" class="onoffswitch-checkbox" id="myonoffswitch6">
	            <label class="onoffswitch-label" for="myonoffswitch6">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="7" class="onoffswitch-checkbox" id="myonoffswitch7">
	            <label class="onoffswitch-label" for="myonoffswitch7">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="8" class="onoffswitch-checkbox" id="myonoffswitch8">
	            <label class="onoffswitch-label" for="myonoffswitch8">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="9" class="onoffswitch-checkbox" id="myonoffswitch9">
	            <label class="onoffswitch-label" for="myonoffswitch9">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="10" class="onoffswitch-checkbox" id="myonoffswitch10">
	            <label class="onoffswitch-label" for="myonoffswitch10">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>




		<div class="rowWide">




			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" tabindex="15" name="weight" required="required" maxlength="5" placeholder="WEIGHT" onkeypress="return isNumber(event)"/>
				</span>
			</div>


		</div>
		<!-- Row five ended -->

		<div class="rowWide">
			<div class="checkBoxes">
				<div class="checkBoxMe">
					<input type="checkbox" id="c1" name="fbw" tabindex="17"  /><label for="c1" tabindex="17" ><span></span>Fish Boxes Weighed</label>
					 <!-- <input type='checkbox' name='thing' value='valuable1' id="thing1" data-bind="checked: chk"/><label for="thing1"></label><label for="thing1">Visible label 1</label> -->
    			</div>
				<div class="checkBoxMe">
					<input type="checkbox" id="c2" name="bwe" tabindex="18" /><label for="c2"><span></span>Box Weights Estimated</label>
				</div>
				<div class="checkBoxMe">
					<input type="checkbox" id="c3" name="bwff" tabindex="19" /><label for="c3"><span></span>Box Weights from Fishbuyer</label>
    			</div>
    			<div class="checkBoxMe" style="width: 687px; margin-bottom: 15px; height: 20px; padding-top: 1px; padding-left: 5px;" >
					I, hereby verify that my catch has been Assessed
					<input type="text" name="myName" required="required" tabindex="20" maxlength="25" placeholder="Type your name for signature" style="margin-left:5px; padding-top: 0px; margin-top: 2px; color: #000000;" />
					<i>Type your name for signature.</i>
    			</div>

			</div>

			<div class="inputFrame clearfix grpelem">
				<span class="textFrame grpelem effSheetBtn">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="21" name="addSampleSubmit" value="ADD A NEW SAMPLE" />
				</span>
			</div>

			<div class="inputFrame clearfix grpelem">
				<span class="textFrame grpelem effSheetBtn">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="22" name="enterSubmit" value="ENTER" />
				</span>
			</div>
		</div>

		<div class="bigrow">
			<div class="clearfix grpelem widgetu1212 widgetu1212W"  style="width: 676px; left: 0px; right: 0px; margin-right: 0px;">
				<span class="clearfix grpelem" id="u1214-4W" style="width:100%; left: 0px; margin-right: 0px; right: 0px;
					<?php
						if( isset( $_GET[ 'id' ] ) ) {
							$id = $_GET[ 'id' ];
							if( $id == 'w345ent_add' ){ echo 'visibility: visible; background-color: #d94a3f;"> Record is added.'; }
							if( $id == 'w345ent_err' ) { echo 'visibility: visible; background-color: #FF0000;"> There was an error! Record cannot be added.'; }
							if( $id == 'w197ans_add' ) { echo 'visibility: visible; background-color: #d94a3f;"> New Sample is added.'; }
							if( $id == 'w197ans_err' ) { echo 'visibility: visible; background-color: #FF0000;"> There was an error! New Sample cannot be added.'; }
						} else { echo '">'; }
					?>
				</span>
			</div>
		</div>
	</form>
</div>


