<?php 
session_start();
if( !isset($_SESSION['id']) ){
?><script type="text/javascript">window.location.href="index";</script><?php 	
}

include('header.php');

include('pages/report.php');



include('footer.php');


?>

