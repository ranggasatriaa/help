<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>CI Input Parameter</title>
</head>
<body>
<form class="" action="router_generate.php" method="post">
	<label>Input your controller and list of parameter</label><br>
	<textarea name="parameter" rows="8" cols="80"
	          placeholder="controller_name1=>param1,param2,.. <br> controller_name2=>param1,param2,..."><?= empty($_POST['parameter']) ? '' : $_POST['parameter'] ?></textarea>
	<br>
	<input type="submit" name="submit" value="Submit">
	<a href="index.html">Back</a>
</form>
</body>
</html>

<?php
if (!empty($_POST['parameter'])) {
	$input = $_POST['parameter'];

	$types = explode("\n", $input);
	$return = '';

	echo "<h3>Enjoy: </h3>";

	foreach ($types as $type) {
		$controllers = explode("=>", $type);
		$parameters = explode(",", $controllers[1]);
		foreach ($parameters as $param) {
			if ($param == 'index') {
				$all1 = $controllers[0];
				$all2 = $param;
				$post1 = 'post'.ucwords($controllers[0]);
				$post2 = 'post';
				$detail1 = $controllers[0];
				$detail2 = 'detail';
			} else {
				$all1 = $param;
				$all2 = $param;
				$post1 = 'post' . ucwords($param);
				$post2 = 'post' . ucwords($param);
				$detail1 = $param;
				$detail2 = 'detail' . ucwords($param);
			}
//			echo '$router["' . $param . '"] = "' . $controllers[0] . '/' . $param . '";<br>';
			$return = $return . '$route["' . $all1 . '"] = "' . ucwords($controllers[0]) . '/' . $all2 . '";<br>';
			$return = $return . '$route["' . $detail1 . '/(:any)"] = "' . ucwords($controllers[0]) . '/' . $detail2 . '/$1";<br>';
			$return = $return . '$route["' . $post1 . '"] = "' . ucwords($controllers[0]) . '/' . $post2 . '";<br><br>';
		}
	}
	echo str_replace('"', '\'', $return);
//	echo $return;
}
?>