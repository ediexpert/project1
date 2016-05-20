<?php session_start();
require_once('../mysqli_connect.php');
include('../includes/functions.php');
#login.php
#check user authentication

if( isset($_REQUEST['submitted']) ){
	$u = $_REQUEST['email'];
	$p = $_REQUEST['pass'];
	$q = $dbc->query("select * from user where username = '$u' AND pass = '$p' ");
	$r = $q->fetch_assoc();
	if($q->num_rows == 1){
		$_SESSION['id'] = $r['id'];

		login_entry($r['id'],$_SERVER['REMOTE_ADDR']);
?><script type="text/javascript">window.location.href="../";</script><?php 		
	}
}
?>
<script type="text/javascript">window.location.href="../";</script>