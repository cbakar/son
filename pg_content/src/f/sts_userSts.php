<!-- Establishing the Database Connection -->
<?php 
	function connectDB() {
		if( !@include_once ( '../db_pgs/db_connect.php' ) ) {
			throw new Exception( 'Failed to connect to Database' );	
		}
		return true; 
	}
	try{ connectDB(); }
	catch( Exception $e ) {	echo 'Message: ' .$e->getMessage(); }
?>

<?php
connectDB();
$query = "SELECT `id`,`user_name`,`first_name`,`last_name`,`email`,`phone`,`account_type`,`time_created`,`account_status` FROM `son`.`user` WHERE `user_name` != ''";
$result = mysql_query( $query );
while( $row = mysql_fetch_assoc( $result )){
?>

<div class="row" style="width: 563px;">
	<fieldset class="clearfix grpelem widgetu1212All yellowBG">
		<div style="padding-top:3px;"> 
			<span class="labelUsr"><label class="userListLabel" style="padding-right: 49px;">ID</label></span>
			<span class="labelUsr"><label class="userListLabel" style="padding-right: 53px;">Fisrt Name</label></span>
			<span class="labelUsr"><label class="userListLabel" style="padding-right: 54px;">Last Name</label></span>
			<span class="labelUsr"><label class="userListLabel">Account Type</label></span>
		</div>
	</fieldset>
	
	<fieldset class="clearfix grpelem widgetu1212All yellowBG">
		<div>
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="userid"  maxlength="4" style="width: 60px; color: black;" value="<?php print $row['id'];?>"/>
			</span>
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="firstName"  maxlength="50" style="width: 120px; color: black;" value="<?php print $row['first_name'];?>" />
			</span>	
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="lastName"  maxlength="50" style="width: 120px; color: black;" value="<?php print $row['last_name'];?>"/>
			</span>		
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="accountType"  maxlength="50" style="width: 120px; color: black;" value="<?php print $row['account_type'];?>" />
			</span>
		</div>
	</fieldset>
	
	<fieldset class="clearfix grpelem widgetu1212All yellowBG">
		<div> 
			<span class="labelUsr"><label class="userListLabel" style="padding-left: 63px;">User Name</label></span>
			<span class="labelUsr"><label class="userListLabel" style="padding-left: 53px;">E-mail</label></span>
			<span class="labelUsr"><label class="userListLabel" style="padding-left: 81px;">Phone</label></span>
		</div>
	</fieldset>
	
	<fieldset class="clearfix grpelem widgetu1212All yellowBG">	
		<div>
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="userName"  maxlength="4" style="width: 120px; color: black; margin-left:62px;" value="<?php print $row['user_name'];?>"/>
			</span>
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="email"  maxlength="50" style="width: 120px; color: black;" value="<?php print $row['email'];?>"/>
			</span>	
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="phone"  maxlength="50" style="width: 120px;  color: black;" value="<?php print $row['phone'];?>"/>
			</span>		
		</div>
	</fieldset>	
	
	<fieldset class="clearfix grpelem widgetu1212All yellowBG">	
		<div> 
			<span class="labelUsr"><label class="userListLabel" style="padding-left: 60px;">Time Created</label></span>
			<span class="labelUsr"><label class="userListLabel" style="padding-left: 41px;">Account Status</label></span>
		</div>
	</fieldset>
	
	<fieldset class="clearfix grpelem widgetu1212All yellowBG">
		<div style="margin-bottom: 4px;">
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="timeCreated"  maxlength="4" style="width: 120px; color: black; margin-left:62px;" value="<?php print $row['time_created'];?>"/>
			</span>
			<span class="labelUsr">	
				<input class="labelUsrText" type="text" name="accountStatus"  maxlength="50" style="width: 120px; color: black;" value="<?php print $row['account_status'];?>"/>
			</span>	
		</div>
	</fieldset>
	
	<fieldset class="clearfix yellowBG">
		<div class="usrLblBtn" style="padding-left: 28px;">
			<input class="widgetu1212_submit" type="submit" value="Delete" name="delete" style="width: 100px; height: 55px; background-color: red;" />
		</div>
	</fieldset>
	<fieldset class="clearfix yellowBG">
		<div class="usrLblBtn" style="padding-left: 28px;">
			<input class="widgetu1212_submit" type="submit" value="De-Activate" name="deactivate" style="width: 100px; height: 55px; "/>
		</div>
	</fieldset>


	
</div>


<?php
	}
	closeDB();
?>


<!-- Close the Database Connection -->
<?php 
	function closeDB() {
		if( !@include_once ( '../db_pgs/db_close.php' ) ) {
			throw new Exception( 'Failed to close the Database' ); 
		}
		return true; 
	}
	try { closeDB(); }
	catch ( Exception $e) { echo 'Message: ' .$e->getMessage(); }
?>




