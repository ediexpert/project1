<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "onlineexam";
if($con = mysql_connect($host,$user,$pass)){
	mysql_select_db($db,$con);
}

?>