<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>CI Input Parameter</title>
</head>
<body>
<table border="1" style="display: none">
	<thead>
	<tr>
		<th>Input</th>
		<th>Output</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>param1,param2,param3</td>
		<td>
			data-param1="<\?=$param1?>" data-param2="<\?=$param2?>" data-param3="<\?=$param3?>"
		</td>
	</tr>
	</tbody>
</table>
Note: in text editor delete "\" "<\?="
<br>
<br>

<form class="" action="modal_body_input.php" method="post">
	<label>Input your list of parameter</label><br><br>
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

	echo '<h3>Enjoy: </h3>';
	echo '<div class="modal-body"><br><div class="row">';

	foreach ($parameters as $param) {
		?>
		<div class="col-md-12 col-xs-12">
			<div class="form-group">
				<label>Ticker</label>
				<input class="form-control" name="stock_name" type="text" value="">
			</div>
		</div>
<?php
/*		$return = $return.'data-'.$param.'="<\?=$'.$param.'?>" ';*/
	}
	echo '</div><br></div>';

//	echo str_replace('="','\<\?\php echo',$return);
}
?>