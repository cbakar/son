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

	<!-- Extra Buttons for download -->
	<?php	
		if( isset( $_GET[ 'id' ] )){
			$value = $_GET['id'];
			switch( $value ){
				case 'fpt_created';
					include_once( 'sts_exportData.php' );
					break;
				case 'sts_import';
					 include_once( 'sts_importData.php' );
					 break;
				case 'usr_sts';
					include_once( 'sts_userSts.php' );
					break;
				case 'other_sts';
					include_once( 'sts_otherSts.php' );
					break;
				case 'Gender';
					include_once( 'gc_gender.php' );
					break;
				case 'Length';
					include_once( 'gc_length.php' );
					break;
				case 'Kilos';
					include_once( 'gc_kilos.php' );
					break;
				case 'Species';
					include_once( 'gc_species.php' );
					break;
				default;
					include_once( 'sww.php' );
					break;
			}			
		}


		
	?>
	<!-- Extra Buttons for download -->
</div>
<!-- main_page ends here -->
