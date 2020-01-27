
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CI Input Parameter</title>
  </head>
  <body>
  <table border="1">
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
			  $param1 = $this->input->post('param1');<br>
			  $param2 = $this->input->post('param2');<br>
			  $param3 = $this->input->post('param3');<br>
			  [<br>
			  'param1' => $param1,<br>
			  'param2' => $param2,<br>
			  'param3' => $param3,<br>
			  ];
		  </td>
	  </tr>
	  </tbody>
  </table>
  <br>
  <br>
    <form class="" action="input_parameter.php" method="post">
      <label>Input your list of parameter</label><br>
	    <br>
      <textarea name="parameter" rows="8" cols="80" placeholder="devide parameter with comma (,)"><?=empty($_POST['parameter'])?'':$_POST['parameter']?></textarea>
      <br>
      <input type="submit" name="submit" value="Submit">
      <a href="index.php">Back</a>
    </form>
  </body>
</html>

<?php
if (!empty($_POST['parameter'])) {
  $input = $_POST['parameter'];

  $parameters = explode(",",$input);
  echo "<h3>Enjoy: </h3>";
  foreach ($parameters as $param) {
    echo "<br>$".$param." = \$this->input->post('".$param."');";
  }
  echo "<br>[";
  foreach ($parameters as $param) {
    echo "<br>'".$param."' => $".$param.",";
  }
  echo "<br>];";
}
 ?>
