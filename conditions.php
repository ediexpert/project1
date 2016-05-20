<?php session_start();
if( !isset($_SESSION['id']) ){
?><script type="text/javascript">window.location.href="index";</script><?php 	
}
?>

<?php 
include('header.php');
$uid = $_SESSION['id']; // setting Userid varibale of logged in user
$ip=$_SERVER['REMOTE_ADDR']; // getting ip address of remote client machine
// if user has attempted test before
if(check_attempt($uid) === "yes"){
	if(check_alltopicsattempted($uid) == "yes" ){
		include('pages/test_already_completed.php');
	}
	if(check_alltopicsattempted($uid) == "no"){
		include("pages/conditions.php");		
	}
	
}

// if user has not attempted anything yet
if(check_attempt($uid) === "no"){
	include('pages/conditions.php');
}


include('footer.php');
?>