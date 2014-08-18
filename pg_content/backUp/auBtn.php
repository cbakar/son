<?php if(!isset($_SESSION)){session_start(); } ?>
<!--
***********************************************************************************
*
*	Add Use Button
*
***********************************************************************************
-->
<div class="clearfix" id="u1904"> <!-- Add User Button  -->
	<ul class="MenuBar clearfix grpelem" id="menuu1475" >
		<li id="u1542">
			<a class="nontext clearfix colelem" id="u1543" 
			<?php 	if( $_SESSION["account_type"] == "Admin" ) { echo 'href="../usr_pgs/au.php"'; } ?> >
				<div class="clearfix grpelem" id="u1545-5">
					<p id="u1545-3">
						<?php 	if( $_SESSION["account_type"] == "Admin" ) { echo 'USER SETTINGS'; } else {echo ''; } ?>
					</p>
				</div>
			</a>
		</li>
	</ul>
</div>