<?php

	try{
		if( !@include_once( 'db/db_connect.php' )) 
		//if( ! @include_once( 'bin/dataLoader.php' )) // @ - to suppress warnings, 
			throw new Exception( 'Require process failed. Data loader not found!' );

	} catch( Exception $e ){    
  		echo "Message : " . $e->getMessage();
  		echo "Code : " . $e->getCode();
	}

?>

<!-- HTML Starts Here  -->
<div id="esfLine"></div>
<div id="main_page">
  <form class="forumContanier" action="bin/addEffort.php" method="post" autocomplete="on">

	<!-- Row One -->
	<div class="rowWide">
		<!-- Harvest Number -->
		<div class="inputFrame inputFrame-175 clearfix grpelem" style="text-align:center;">
			<span class="textFrame textFrame-175 clearfix grpelem" style="text-align:center;">
				<input class="wrapped-input wid_input wid_input-175" style="text-align:center;" type="text" readonly="readonly" name="effortNumber" required="required" value="<?php $date = date_create(); echo ( date("Y") . '-HST-' . date_timestamp_get($date) )?>"/>
			</span>
		</div>

		<!-- Fisher Full Name -->
		<div class="inputFrame clearfix grpelem" style="width: 377px;">
			<span style="width: 377px;">
				<?php
					echo '<select class="chosen-select" style="width:377px;" name="fisherName" tabindex="1">';
					echo '<option value="-1" selected="selected" disabled required="required">FISHERMAN\'s FULL NAME</option>';
					$request_FishermanName = $conn->prepare( "SELECT `fishermanName` FROM `fishermen` ORDER BY `fishermanName` ASC" );
					$request_FishermanName->execute();
					$request_FishermanName->bind_result( $db_fishermanName );
					while(  $request_FishermanName->fetch() ){
						$fisherName = strtoupper( $db_fishermanName );
						echo "<option value='" . $fisherName . "'>" . $fisherName . "</option>";
					}
					echo "</select>";
					$request_FishermanName->close();
				?>
			</span>
		</div>
    </div>

	<!-- Row Two -->
    <div class="rowWide">
    	<!-- BTSIZE -->
  		<div class="inputFrame inputFrame-175 clearfix grpelem styled-select">
			<span class="textFrame textFrame-175 clearfix grpelem">
 				<?php
 					echo '<select class="wrapped-input wid_input wid_input-175" name="btSize" tabindex="2">';
					echo '<option value="-1" selected="selected" disabled required="required"> BTSIZE </option>';
					$request_BoatSize = $conn->prepare( "SELECT `boatSize` FROM `boat_size`");
					$request_BoatSize->execute();
					$request_BoatSize->bind_result( $db_boatSize );
					while( $request_BoatSize->fetch() ){
						$boatName = strtoupper( $db_boatSize );
						echo "<option value='" . $boatName . "'>" . $boatName . "</option>";
					}	
					echo "</select>";
					$request_BoatSize->close();

				?>
			</span>
		</div>

		<!-- Entry Date -->
 		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
        		<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="3" name="effortDate" id="datepicker" required="required" style="cursor:pointer text-align:center" placeholder="DATE" />
			</span>
		</div>

		<!-- GRID -->
		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="4" name="grid" maxlength="10" placeholder="GRID - 1838"/>
			</span>
		</div>
	</div>


	<!-- Row Two -->
	<div class="rowWide">
		<!-- LATLONG -->
		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="5" name="latlong" maxlength="20" placeholder="LATLONG"/>	
			</span>
		</div>


		<!-- GRTP -->
		<div class="inputFrame inputFrame-175 clearfix grpelem styled-select">
			<span class="textFrame textFrame-175 clearfix grpelem">
 				<?php
					echo '<select  class="wrapped-input wid_input wid_input-175" name="grtp" tabindex="6">';
					echo '<option value="-1" selected="selected">GRTP</option>';
					$request_GrtpType = $conn->prepare( "SELECT `grtpType` FROM `grtp_type`");
					$request_GrtpType->execute();
					$request_GrtpType->bind_result( $db_grtpType );
					
					while( $request_GrtpType->fetch() ){
						$grtpName = strtoupper( $db_grtpType );
						echo "<option value='" . $grtpName . "'>" . $grtpName . "</option>";
					}	 						
					echo "</select>";

					$request_GrtpType->close();
				?> 					
			</span>
		</div>

		<!-- GRLEN -->
  		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="7" name="grlen5" maxlength="5" placeholder="GRLEN5 - [yards]"/>
			</span>
		</div>
    </div>

    <!-- Row Three -->
    <div class="rowWide">
    	<!-- GRHTM -->
    	<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="8" name="grhtm" maxlength="5" placeholder="GRHTM - [meshes]"/>
			</span>
		</div>

		<!-- MESH5 -->
		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="9" name="mesh5" maxlength="5" placeholder="MESH5 - [inches]"/>
			</span>
		</div>
 			
 		<!-- GRDEP5 -->
 		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="10" name="grdep5" maxlength="5" placeholder="GRDEP5 - [feet]"/>
			</span>
		</div>
	</div>


	<!-- Row Four -->
	<div class="rowWide">
		<!-- SIDEP5 -->
 		<div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="11" name="sidep5" maxlength="5" placeholder="SIDEP5 - [feet]"/>
			</span>
		</div>

		<!-- SETYPE -->
		<div class="inputFrame inputFrame-175 clearfix grpelem styled-select">
			<span class="textFrame textFrame-175 clearfix grpelem">
 				<?php
 					echo '<select class="wrapped-input wid_input wid_input-175" name="setype" tabindex="12">';
					echo '<option value="-1" selected="selected">SETYPE</option>';
					$request_SeType = $conn->prepare( "SELECT `seType` FROM `se_type`" );
					$request_SeType->execute();
					$request_SeType->bind_result( $db_seType );

					while( $request_SeType->fetch() ){
						$seName = strtoupper( $db_seType );
						echo "<option value='" . $seName . "'>" . $seName . "</option>";
					} 	

					echo "</select>";
					$request_SeType->close();
				?> 	
			</span>
		</div>

		<!-- EFFDUR -->
	    <div class="inputFrame inputFrame-175 clearfix grpelem">
			<span class="textFrame textFrame-175 clearfix grpelem">
				<input class="wrapped-input wid_input wid_input-175" type="text" tabindex="12" name="effdur" maxlength="4" placeholder="EFFDUR - [hours]"/>
			</span>
		</div>
    </div>

    <!-- For a space -->
    <div class="rowWide"></div>



    <div class="rowWide">	
    	<div class="inputFrame clearfix grpelem" style="width:164px; margin-left: 379px;">
        	<span class="textFrame grpelem dataSheetBtn" style="width:176px;">
          		<input class="wrapped-input wid_input" style="width:176px; text-align:center; position: 0px; left:0px right: 0px; height: 20px;" type="submit" tabindex="17" name="enterSubmit" value="ENTER" />
        	</span>
      	</div>
    </div>

    <div class="rowWide"></div>
    
    <div class="bigrow">
        <div class="clearfix grpelem widgetu1212 widgetu1212W">
        	<span class="clearfix grpelem" id="u1214-4W"
		<?php
		    if( isset( $_SESSION['responsID'])){
		    	
		    	switch ($_SESSION['responsID']) {

					case 'effdata_added':
						echo 'style="width:556px; visibility: visible; background-color: #64c178;"> Good Work. Record(s) added.';
						$_SESSION['responsID'] = null;
					break;

		    		case 'harvest_MissingField':
		    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Missing Mandotory Field(s).';
		    			$_SESSION['responsID'] = null;
		    		break;

		    		case 'w197ent_err':
		    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Something went wrong. Please try again.';
						$_SESSION['responsID'] = null;
					break;

		    		default:
		    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Something went VERY VERY wrong.. Call Cem Bakar.';
		    			break;
		    	}

		    }
		?>
		</span>
        </div>
    </div>
  </form>
</div>
