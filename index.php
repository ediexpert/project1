<?php 
session_start();
include 'header.php'; 
if(!isset($_SESSION['id'])){

    include('pages/login.php');
} 
else{
	$id= $_SESSION['id'];
	if($q = $dbc->query("select * from user where id='$id' AND test_given=1")){
		if($q->num_rows > 0){
?><script type="text/javascript">window.location.href="status";</script><?php
}
	}
	if(check_attempt($id) === "yes"){
		if(check_alltopicsattempted($id) == "no" ){
			

			include('pages/report.php');
			echo "<h3 class='text-primary'>We identified that you have already started your test, Now we are left with only few topics, Lets start again.</h3><br>";
			echo "<button class='btn-lg btn-primary' onclick='window.location.href=\"conditions\"'>Start Next Test</button>";
		}else{
			include('pages/test_already_completed.php');
		}
	}else{
		include('pages/home.php');
	}
    
} 
include 'footer.php';
?>