<?php
	session_start();
	session_regenerate_id( true );
	ob_start();
	error_reporting(E_ALL);
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', '1');  //On or Off
?>

  <!-- Identify User  -->
<?php

	/* Connect to the database */
	if( !@include_once( 'db_connect.php' )) throw new Exception("Failed to include 'dbConnect.php'");


	if( isset( $_POST['username'])){

		// FETCH DATA FROM INPUT FIELD
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

 		// CHECK ALL FIELD HAS BEEN FILLED UP
 		if ($username && $password) {

 			// ADD SALT TO PASSWORD
			define( 'SALT', 'this is cems encryption text' );
			function encrypt( $text ) {
				return trim(
		      base64_encode(
		        mcrypt_encrypt(
		          MCRYPT_RIJNDAEL_256, SALT, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(
		            mcrypt_get_iv_size(
		              MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB ), MCRYPT_RAND )))); 
			}

			$password = encrypt( $password );
			$date = date('Y/m/d H:i:s');

			//LOGING 
			$sqlLog = "INSERT INTO `login_log`( `user_id`, `login_time` ) VALUES ( '$username' , '$date' ) ";
			$stmtLog = $conn->prepare( $sqlLog );
			$stmtLog->execute();


			$sql = "SELECT `user_name`, `password`, `account_type`, `account_status` FROM user WHERE user_name = ? and password = ?";
			$stmt = $conn->prepare( $sql );
			$stmt->bind_param( 'ss', $username, $password );
			$stmt->execute();
			$stmt->bind_result( $db_username, $db_password, $db_accType, $db_accStatus );
			

			if( $stmt->fetch() ){
				if( $db_username == $username && $db_password == $password && $db_accStatus == 'Active' ){
					$_SESSION[ 'account_type' ] = $db_accType;
					$_SESSION[ 'user_name' ] =	$username;
					
					header( 'Location: ../usrPg.php' );
				} else { header( 'Location: ../../index.php?id=nogood' ); }
			}
	  	}
	}

	/* Close the connection with database */
	if( !@include_once( 'db_close.php' ))  throw new Exception("Failed to include 'dbClose.php'") ;
?>

