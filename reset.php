<?php 
session_start();
include('mysqli_connect.php');
include('includes/functions.php');
$dbc->query("delete from test_log");
?>
<script type="text/javascript">window.location.href="report"</script>