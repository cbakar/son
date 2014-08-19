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


if( isset( $_POST[ 'fbw' ] ) == 'on' ) { $fbw ='Yes'; } else { $fbw = 'No'; }
if( isset( $_POST[ 'bwe' ] )  == 'on' ) { $bwe ='Yes'; } else { $bwe = 'No'; }
if( isset( $_POST[ 'bwff' ] )  == 'on' ) { $bwff ='Yes'; } else { $bwff = 'No'; }

echo 'fbw > ' . $fbw . '</br>';
echo 'bwe > ' . $bwe . '</br>';
echo 'bwff > ' . $bwff . '</br>';
echo 'Signed By > ' . $_POST[ 'signedBy' ] . '</br>';


echo 'FBW : ' . $fbw . '</br>';
		echo 'BWE : ' . $bwe . '</br>';
		echo 'BWFF : ' . $bwff . '</br>';
		echo 'Signed By : ' . $signedBy . '</br>';