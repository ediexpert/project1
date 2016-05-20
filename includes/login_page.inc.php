<?php # Script 11.1 - login_page.inc.php

// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

//include the header

//include('includes/header.html');

//print any error messages, if they exist:



//Display the form
?>

<div class="col-md-6 col-md-offset-3">
	<h1>Login Form</h1>
<?php 	if(!empty($errors)){
	echo '<h1>Error!</h1><p class="text-danger">The Following error(s) occured:<br />';
	foreach ($errors as $key => $value) {
		echo ' - '.$value.' <br /><br>';
	}
	echo '</p><p>Please try again.</p>';
} ?>
<form action="functions/login.php" method="post">
	<div class="row">
		<div class="col-md-4"><h3>Username</h3></div>
		<div class="col-md-8">
			<input type="text" class="form-control" name="email" size="20" maxlength="20" value="user" autocomplte="off"/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4"><h3>Password</h3></div>
		<div class="col-md-8">
		<input type="password" class="form-control" name="pass" value="123456" size="20" maxlength="20"/>
		<input type="hidden" name="submitted" value="TRUE" />
		</div>
	</div>
	<fieldset style="margin-top:30px;">
		<input type="submit" class="btn btn-lg btn-primary" name="submit" value="Login" />
	</fieldset>
	
</form>
</div>


<?php
	//include the footer
//include('includes/footer.html');
?>