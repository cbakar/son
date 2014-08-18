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

	<div class="effortForumContainer">
		<div class="forumContainer">
			<!-- bin/load_effortsData.php -->
			<form class="forumContanier" action="" method="post" autocomplete="on">
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

				<div class="inputFrame clearfix grpelem">
					<span class="textFrame grpelem dataSheetBtn" style="width:106px; cursor: pointer;">
				  		<input class="wrapped-input wid_input" style="width:106px; text-align:center; position: 0px; left:0px right: 0px; height: 20px; cursor: pointer;" type="submit" tabindex="2" name="searchSubmit" value="SEARCH" />
					</span>
				</div>
			</form>
		</div>
	</div>


	<?php
		if( isset($_POST['searchSubmit'])){
			include('php/load_effortRecords.php');
		}

		if ( isset($_POST['addNewSample'])){

			if(isset($_GET['id'])){
				$callPage = $_GET['id'];

				switch( $callPage ){
					case 'addHarvest':
						include('php/addHarvest.php');	
					break;
					
					case 'addIndividual':
						include('php/addIndividual.php');	
					break;

					default:
						include('sww.php?id=noFromFound');
					break;
				}
			}
		}
	?>


    <div class="bigrow">
        <div class="clearfix grpelem widgetu1212 widgetu1212W">
            <span class="clearfix grpelem" id="u1214-4W"
                <?php
                    if( isset( $_SESSION['responsID'])){
                    	switch ($_SESSION['responsID']) {

                    		case 'harvestNumber_MissingField':
                    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Missing Mandotory Field(s). ';
                    			$_SESSION['responsID'] = null;
                    		break;


                    		case 'harvest_noRecordFound':
                    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Missing Harvest Numbers.';
                    			$_SESSION['responsID'] = null;
                    		break;



                    		case 'w197ent_err':
                    			echo 'style="width:556px; visibility: visible; background-color: #FF0000;"> Something went wrong. Please try again.';
								$_SESSION['responsID'] = null;
							break;

							case 'hdaw1976ent_added':
								echo 'style="width:556px; visibility: visible; background-color: #64c178;"> Good Work. Record is added.';
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
</div>
