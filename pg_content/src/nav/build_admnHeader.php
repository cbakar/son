<?php
	try{
		if( ! @include_once( 'btn_id.php' )) // @ - to suppress warnings, 
			throw new Exception( 'Require process for id button failed' );

		if( ! @include_once( 'btn_effort.php' ))
			throw new Exception( 'Reqire process for Harvest &amp; Effort button failed' );

		if( ! @include_once( 'btn_harvest.php' ))
			throw new Exception( 'Reqire process for Harvest &amp; Effort button failed' );
		
		if( ! @include_once( 'btn_indiv.php' ))
			throw new Exception( 'Reqire process for individual button failed' );

		if( ! @include_once( 'btn_dataProcess.php' ))
			throw new Exception( 'Reqire process for Data Process button failed' );
	
		// if( ! @include_once( 'btn_sts.php' ))
		// 	throw new Exception( 'Require process for Settings button failed' );
			
		// if( !file_exists('btn_id.php' ))
		// 			throw new Exception ('btn_id.php does not exist');
		// else
		// 			require_once('btn_id.php' ); 
	} catch( Exception $e ){    
  		echo "Message : " . $e->getMessage();
  		echo "Code : " . $e->getCode();
	}
