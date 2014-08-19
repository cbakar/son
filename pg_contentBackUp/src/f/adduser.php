<!-- navigation_bar ends here -->
<div id="adduserLine" class="box"></div>
<div id="main_page">

	<form class="fromContainer" action="src/db_biz/adduser.php" method="post" autocomplete="on">
		<div class="row">
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input id="imText" class="wrapped-input widgetu1212_input" type="text" tabindex="1" name="firstLastName" required="required" maxlength="35" placeholder="User Name: John Smith"/>
				</span>
			</div>
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input widgetu1212_input"  type="text" tabindex="2" name="email" required="required" maxlength="40" placeholder="Email Address: jsmith@email.com"  pattern="[^ @]*@[^ @]*"  data-type="email" />
				</span>
			</div>
		</div>
		<!-- First Row Ends Here -->

		<div class="row">
			<div class="clearfix grpelem widgetu1212">
				<span class="NoWrap actAsDiv clearfix grpelem" id="u1214-4">
					<input class="wrapped-input widgetu1212_input"  type="text" tabindex="3" name="username" required="required" maxlength="15" placeholder="User ID"  />
				</span>
			</div>
			<div class="clearfix grpelem widgetu1212">
				<span class="NoWrap actAsDiv clearfix grpelem" id="u1214-4">
					<input class="wrapped-input widgetu1212_input mixed" type="text" tabindex="4" name="phoneNumber"  maxlength="12" placeholder="Phone Number" pattern='\d{3}[\-]\d{3}[\-]\d{4}' >
				</span>
			</div>
		</div>
		<!-- Second Row Ends Here -->

		<div class="row">
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input widgetu1212_input" type="password" tabindex="5" name="passwd1" required="required" maxlength="18" id="password" placeholder="Password"  />
				</span>
			</div>
			<div class="clearfix grpelem widgetu1212">
				<span class="clearfix grpelem" id="u1214-4">
					<input class="wrapped-input widgetu1212_input" type="password" tabindex="6" name="passwordVerify" required="required" maxlength="18" id="passwordVerify" placeholder="Password Again" onkeyup="checkPass();return false;" />
				</span>
			</div>
		</div>
		<!-- Third Row Ends Here -->

		<div class="row">
			<div class="clearfix grpelem widgetu1212 styled-select">
				<span class="clearfix grpelem" id="u1214-4">
					<select  class="wrapped-input widgetu1212_input optionBox" tabindex="7"  name="userType"  style="padding-top: 18px;" >
				 		<option class="optionBox" value="Admin" >Admin</option>
						<option class="optionBox" value="Statistician">Statistician</option>
						<option class="optionBox" value="Fisherman">Fisherman</option>
						<option class="optionBox" value="Clerk">Data Entry</option>
					</select>
				</span>
			</div>

			<div class="grpelem widgetu1212 widgetu1212_submit">
				<span class="grpelem" id="u1214-5">
					<input class="widgetu1212_submit" type="submit" tabindex="8" name="submit" value="Add User" />
				</span>
			</div>
		</div>
		<!-- Fourth Row Ends Here -->

		<div class="bigrow">
			<div class="clearfix grpelem widgetu1212 widgetu1212W" style="width: 554px;">
				<span class="clearfix grpelem" id="u1214-4W" style="width: 554px;
					<?php
						if( isset( $_GET[ 'id' ] )){
							if( $_GET['id'] == 'w345uad' ){
								echo 'visibility: visible; background-color: #64c178;"> New user is registered.';
							}
							if( $_GET['id'] == 'w076err' ) {
								echo 'visibility: visible; background-color: #FF0000;"> User ID [or] Email Address is already registed.';
							}
						} else { echo '">'; }
					?>
				</span>
			</div>
		</div>
		<!-- Third Row Ends Here -->



	</form>
</div>
<!-- main_page ends here -->


	<!-- Include Scripts -->
	<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="lib/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

	<script type="text/javascript">
  $(function() {
    $('.mixed').mask('000-000-0000');
    $('.cep_with_callback').mask('00000-000', {onComplete: function(cep) {
        console.log('Mask is done!:', cep);
      },
       onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
      }
    });

    $('.crazy_cep').mask('00000-000', {onKeyPress: function(cep){
      var masks = ['00000-000', '0-00-00-00'];
        mask = (cep.length>7) ? masks[1] : masks[0];
      $('.crazy_cep').mask(mask, this);
    }});


    var SaoPauloCelphoneMask = function(phone, e, currentField, options){
      return phone.match(/^(\(?11\)? ?9(5[0-9]|6[0-9]|7[01234569]|8[0-9]|9[0-9])[0-9]{1})/g) ? '(00) 00000-0000' : '(00) 0000-0000';
    };

    $(".sp_celphones").mask('(00) 00009-0000');

    $(".bt-mask-it").click(function(){
      $(".mask-on-div").mask("000.000.000-00");
      $(".mask-on-div").fadeOut(500).fadeIn(500)
    })

    $('pre').each(function(i, e) {hljs.highlightBlock(e)});
  });
</script>

