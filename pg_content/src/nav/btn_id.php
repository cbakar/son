<!--
***********************************************************************************
*
*	Label Box - Has same characteristics
*
***********************************************************************************
-->
<?php  session_regenerate_id( true ); ob_start(); ?>

<div class="clearfix" id="btnContainer"> <!-- Add User Button  -->
	<ul class="MenuBar clearfix grpelem" id="btnMenu">
		<li id="btnMenuItem">
			<div class="clearfix grpelem" id="u1545-5">
				<p id="u1545-3" style="padding-bottom: 0px;">
					<label id="label" class="statusLabel">
						<?php echo 'Hello ' .  strtoupper( $_SESSION[ 'user_name' ] ) . ',';?>	
					</label>
				</p>
			</div>
			<div class="clearfix grpelem" id="u1545-5" style="top:0px;">
				<p id="u1545-3" style="padding-bottom: 0px;">
					<a href="../index.php?id=logout" class="logout" title="Logout"></a>
					<a href="#" class="usersetting" title="User Settings"></a>
				</p>
			</div>
		</li>
	</ul>
</div> <!-- Add User Button  Ends Here -->