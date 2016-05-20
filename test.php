<?php 
// session_start();
// include('mysqli_connect.php');
//include('includes/functions.php');
?>


<?php 
session_start();

include 'header.php'; 
?>
<h4>Question: Hello this is new Question??</h4>
<table class='table'>
<tr><td><img src='logo/logo.png'></td><td>
	if qtype=1
<table class='table table-bordered table-hover table-sm'><tbody>
    <tr><td><input class='form-control' type='radio' name='{$ans}' value='{$x[0]}'></td><td class='text-primary'>Helelo this is oprion</td></tr><tr></tr>
    <tr><td><input class='form-control' type='radio' name='{$ans}' value='{$x[0]}'></td><td class='text-primary'>Helelo this is oprion</td></tr><tr></tr>
    <tr><td><input class='form-control' type='radio' name='{$ans}' value='{$x[0]}'></td><td class='text-primary'>Helelo this is oprion</td></tr><tr></tr>
    <tr><td><input class='form-control' type='radio' name='{$ans}' value='{$x[0]}'></td><td class='text-primary'>Helelo this is oprion</td></tr><tr></tr>
</table>
if qtype=2
<table class='table table-bordered table-hover table-sm'>
			<tbody>
    		<tr><td><input class="form-control"></td></tr><tr></tr>
    	</table>

</td></tr>
</table>


<table class='table table-sm' >
<tr>
	<td><img src='logo/logo.png'></td>
	<td>
		<table class='table table-bordered table-hover table-sm'>
			<tbody>
    		<tr><td><input class="form-control"></td></tr><tr></tr>
    	</table>
    
	</td>
</tr>
</table>

<?php 
include 'footer.php';

?>

<a class="btn btn-primary" href="reset.php" > Reset Data </a>