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
	if( !@include_once( '../db/db_connect.php' )) throw new Exception("Failed to include 'dbConnect.php'");

	$user = $_POST['username'];
	$passwd = $_POST['password'];

	define( 'SALT', 'this is cems encryption text' );

function encrypt( $text ) {
		return trim(
      base64_encode(
        mcrypt_encrypt(
          MCRYPT_RIJNDAEL_256, SALT, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(
            mcrypt_get_iv_size(
              MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB ), MCRYPT_RAND )))); }

$passwd = encrypt( $passwd );
$date = date('Y/m/d H:i:s');

$enter_log = "INSERT INTO `login_log`( `user_id`, `login_time` )  VALUES( '$user', '$date' ) ";

$ask_login = "SELECT * FROM `user` WHERE `user_name`='$user' AND password='$passwd'" ;
$result = mysql_query( $ask_login );
$row = mysql_fetch_array( $result );

if( $row['user_name'] == $user && $row['password'] == $passwd && $row['account_status'] == 'Active' ){
		$_SESSION[ 'account_type' ] =	$row['account_type'];
		$_SESSION[ 'user_name' ] =	$row['user_name'];
		$entered = mysql_query( $enter_log );
		header( 'Location: ../usrPg.php' );
	} else { header( 'Location: ../../index.php?id=nogood' ); }

	/* Close the connection with database */
	if( !@include_once( '../db/db_close.php' ))  throw new Exception("Failed to include 'dbClose.php'") ;

?>

