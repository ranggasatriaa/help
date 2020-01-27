<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>CI Input Parameter</title>
</head>
<body>
<form class="" action="modal_data_generate.php" method="post">
	<label>Input your list of parameter</label><br>
	<textarea name="parameter" rows="8" cols="80"
	          placeholder="param1,param2,param3,..."><?= empty($_POST['parameter']) ? '' : $_POST['parameter'] ?></textarea>
	<br>
	<input type="submit" name="submit" value="Submit">
	<a href="index.php">Back</a>
</form>
</body>
</html>

<?php
if (!empty($_POST['parameter'])) {
	$input = $_POST['parameter'];

	$parameters = explode(",", $input);
	$return = '';

	echo "<h3>Enjoy: </h3>";

	foreach ($parameters as $param) {
		$return = $return.'data-'.$param.'="<\?=$'.$param.'?\>" ';
	}
	echo $return;
//	echo str_replace('="','\<\?\php echo',$return);
}
?>