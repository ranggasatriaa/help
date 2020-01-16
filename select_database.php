<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>CI Input Parameter</title>
</head>
<body>
<form class="" action="select_database.php" method="post">
	<label>Is Tabel Standart?</label><br>
	<input type="checkbox" value="1" name="standard"> Yes <br><br>
	<label>Input your list of parameter</label><br>
	<textarea name="parameter" rows="8" cols="80"
	          placeholder="devide parameter with comma (,)"><?= empty($_POST['parameter']) ? '' : $_POST['parameter'] ?></textarea>
	<br>
	<input type="submit" name="submit" value="Submit">
	<a href="index.html">Back</a>
</form>
</body>
</html>

<?php
if (!empty($_POST['parameter'])) {
	$standard = $_POST['standard'];

	$input = $_POST['parameter'];

	$tabels = explode(";", $input);
	echo "<h3>Enjoy: </h3>";
	echo "<br>[";

	if (empty($standard)) {
		foreach ($tabels as $tabel) {
			$tabel_array = explode("=>", $tabel);
			$tabel_name = $tabel_array[0];
			$tabel_parameter = explode(",", $tabel_array[1]);

			foreach ($tabel_parameter as $param) {
				echo "'" . $tabel_name . "." . $param . "',";
			}
		}

	} else {
		foreach ($tabels as $tabel) {
			$tabel_array = explode("=>", $tabel);
			$tabel_name = $tabel_array[0];
			$tabel_parameter = explode(",", $tabel_array[1]);

			foreach ($tabel_parameter as $param) {
				echo "'" . $tabel_name . "." . $tabel_name . "_" . $param . "',";
			}
		}
	}
	echo "];";

}
?>
