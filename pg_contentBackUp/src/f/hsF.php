<div id="dsfLine"></div>
  <div id="main_page">
	<form class="hsfForm forumContanier" action="bin/addDataHSF.php" method="post" autocomplete="on" onload="disableMe();">

		<!-- Effort Number - Effort # - SUBMIT -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" placeholder="Effort #" readonly="true" />
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" style="width:150px;">
				<span class="textFrame clearfix grpelem" style="width:150px;">
					<input class="wrapped-input wid_input" id="effortNumberTT" style="width:150px; text-align:center;"  type="text" name="effortNumber" readonly="true" value="<?php $date = date_create(); echo ( date("Y") . '-HSF-' . date_timestamp_get($date) )?>"/>
				</span>
			</div>
			<div class="inputFrame clearfix grpelem" style="width:150px;">
				<span class="textFrame grpelem dataSheetBtn" style="width:205px;">
					<input class="wrapped-input wid_input dataSheetBtnText" type="submit" tabindex="17" name="enterSubmit" value="ENTER" style="width:130px; height:20px;" />
				</span>
			</div>
		</div>
		<!-- Effort Number - Effort # - SUBMIT -->

		<!-- First Row - Sample Numbers - ADD/ON BUTTONS-->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem"><span class="grpelem"></span></div>
	        <div class="inputFrame clearfix grpelem onoffswitch">
	            <input type="checkbox"  name="onoffswitch[]" value="checkBoxOne" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
	            <label class="onoffswitch-label" for="myonoffswitch1">
	                <span class="onoffswitch-inner"></span>
	                <span class="onoffswitch-switch"></span>
	            </label>
	        </div>
	        <!-- JavaScript is loading -->
	        <div class="checkboxContainer" onload="draw_CheckBoxes();"></div>
		</div>
		<!-- First Row Ends -->

		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame  grpelem">
					<input class="wrapped-input wid_input" type="text" name="sampleNumber" placeholder="Sample #" readonly="true" />
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="row_Numbers"></div>
		</div>

		<!-- Second Row - Row of Indiv.Codes-->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="indivCode" placeholder="Indiv. Code"  readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_IndivCode"></div>
		</div>
		<!-- Second Row Ends -->

		<!-- Third Row - Row of Length Totals -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="lengthTotal" placeholder="Length Total - [mm]"  readonly="true" />
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_LengthTotal"></div>
		</div>
		<!-- Third Row Ends -->

		<!-- Fourth Row - Row of Length Forks -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="lengthFork" placeholder="Length Fork - [mm]"  readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_LengthFork"></div>
		</div>
		<!-- Fourth Row Ends -->

		<!-- Fifth Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="roundWeight" placeholder="Round Weight - [kg]" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_RoundWeigth"></div>
		</div>
		<!-- Fifth Row Ends -->

		<!-- Sixth Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="dressedWeight" placeholder="Dressed Weight - [kg]"  readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_DressedWeigth"></div>
		</div>
		<!-- Sixth Row Ends -->

		<!-- Seventh Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="sex" placeholder="Sex -[M/F]" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_Sex"></div>
		</div>
		<!-- Seventh Row Ends -->

		<!-- Eigth Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="scarsWounds" placeholder="Scars / Wounds"  readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_ScarsWounds"></div>
		</div>
		<!-- Eigth Row Ends -->

		<!-- Nineth Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="finClips" placeholder="Fin Clips"  readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_FinClips"></div>
		</div>
		<!-- Nineth Row Ends -->

		<!-- Tenth Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="fishScode" placeholder="Fish Species Code" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_FishScode"></div>
		</div>
		<!-- Tenth Row Ends -->

		<!-- Eleventh Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="lamprey" placeholder="Lamprey" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_Lamprey"></div>
		</div>
		<!-- Eleventh Row Ends -->

		<!-- Twelfth Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="scales" placeholder="Scales" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_Scales"></div>
		</div>
		<!-- Twelfth Row Ends -->

		<!-- Thirhteen Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="otoliths" placeholder="Otoliths" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_Otoliths"></div>
		</div>
		<!-- Thirhteen Row Ends -->

		<!-- Fifthteen Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="ovariesGonads" placeholder="Ovaries / Gonads"  readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_OvariesGonads"></div>
		</div>
		<!-- Fifthteen Row Ends -->

		<!-- Sixthteen Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="stomach" placeholder="Stomach" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_Stomach"></div>
		</div>
		<!-- Sixthteen Row Ends -->

		<!-- Seventhteen Row -->
		<div class="rowWide">
			<div class="inputFrame clearfix grpelem">
				<span class="textFrame clearfix grpelem">
					<input class="wrapped-input wid_input" type="text" name="comment" placeholder="Comment" readonly="true"/>
				</span>
			</div>
			<!-- JavaScript is loading -->
			<div class="select_Comment"></div>
		</div>
		<!-- Seventhteen Column Ends -->

        <div class="bigrow">
            <div class="clearfix grpelem widgetu1212 widgetu1212W" style="width: 671px;">
                <span class="clearfix grpelem" id="u1214-4W" style="width: 671px;
                    <?php
                        if( isset( $_SESSION['responsID'])){
                        	switch ($_SESSION['responsID']) {

                        		case 'missingMantField':
                        			echo 'visibility: visible; background-color: #FF0000;"> Missing Mandotory Field(s). ';
                        			$_SESSION['responsID'] = null;
                        		break;

                        		case 'w197ent_err':
                        			echo 'visibility: visible; background-color: #FF0000;"> Something went wrong. Please try again.';
									$_SESSION['responsID'] = null;
								break;

								case 'w197ent_add':
									echo 'visibility: visible; background-color: #64c178;"> Good Work. Record(s) added.';
									$_SESSION['responsID'] = null;
								break;

                        		default:
                        			echo 'visibility: visible; background-color: #64c178;"> Something went VERY VERY wrong.. Call Cem Bakar.';
                        			break;
                        	}
                        } else { echo '">'; }
                    ?>
                </span>
            </div>
        </div>


	</form>

</div> <!-- main_page ends here -->

