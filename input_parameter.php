
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CI Input Parameter</title>
  </head>
  <body>
    <form class="" action="input_parameter.php" method="post">
      <label>Input your list of parameter</label><br>
      <textarea name="parameter" rows="8" cols="80" placeholder="devide parameter with comma (,)"><?=empty($_POST['parameter'])?'':$_POST['parameter']?></textarea>
      <br>
      <input type="submit" name="submit" value="Submit">
      <a href="index.html">Back</a>
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
