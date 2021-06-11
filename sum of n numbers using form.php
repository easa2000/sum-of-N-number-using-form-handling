<!DOCTYPE html>
<html>
<head>
	<title>sum of value</title>
</head>
<body>
	<form method="post">
		<input type="text" name="number">
		<input type="submit" value="Submit">
		
	</form>

</body>
</html>

<?php
  $n = $_POST["number"];
  $sum = 0;
  for($i=0;$i<$n;$i++){
  	$sum += $i;
  }
  echo "the of all numbers from 1 to ".$n." is " .$sum;

?>