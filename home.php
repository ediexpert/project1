<?php session_start();
if( !isset($_SESSION['id']) ){
?><script type="text/javascript">window.location.href="index";</script><?php 	
}


include('header.php');
//include('pages/test_already_completed.php');
 
if(  check_attempt($_SESSION['id']) == "yes" ){


	if(check_alltopicsattempted($_SESSION['id']) == "yes"){
		include('pages/test_already_completed.php');
	}else{
		include('pages/conditions.php');
	}
	
}else{

	include('pages/conditions.php');
}


include('footer.php');
?>