<title> Add Questions</title>
<?php

?>

<form method="POST" action="">
<label>Number of Options required</label>
<input name="nopt" type="number" value="1">
<input type="submit" name="noptsubmit" value="Add Options">
</form>
<form  method="POST" action ="" >
	<legend>Add Question</legend>

	<fieldset>
		<label>Question</label>
		<input type="text" name="quest" placeholder="" />
	</fieldset>
	<fieldset>
		<label>Category</label>
		<input type="text" name="" placeholder="" />
	</fieldset>
	<fieldset>
		<label>Topic</label>
		<input type="text" name="" placeholder="" />
	</fieldset>
	<fieldset>
		<label>Description</label>
		<input type="text" name="" placeholder="" />
	</fieldset>
<?php  
if(isset($_POST['nopt'])){
	for($i=0; $i< $_POST['nopt']; $i++){
		echo '<fieldset>
		<label>Options</label>
		<input type="text" name="" placeholder="" />
	
		<label>Points</label>
		<input type="text" name="" placeholder="" />
	</fieldset>';
	}
	echo '<input type="submit" value="submit">';
}
?>
</form>