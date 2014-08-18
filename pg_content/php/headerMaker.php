<?php error_reporting( E_ALL ); ini_set( 'display_errors', '1' ); ob_start(); ?>

<?php 
	
	if( !isset( $_SESSION['user_name'])){ header( 'Location: ../index.php?id=gottaLogin' );}
	if( !isset( $_SESSION['account_type'])){ header('Location: ../index.php?id=noAccountType');}
	else{
		switch ($_SESSION['account_type']) {
			case 'Admin':
				include( 'src/nav/build_admnHeader.php' );
				break;
			case 'Statistician':
				include( 'src/nav/build_statHeader.php' );
				break;
			case 'Fisherman':
				include( 'src/nav/build_fishHeader.php' );
				break;
			case 'Clerk':
				include( 'src/nav/build_clerHeader.php' );
				break;
			default:
				header('Location: ../index.php?id=noAccountType');
				break;
		}
	}
  