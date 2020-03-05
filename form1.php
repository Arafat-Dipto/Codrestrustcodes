<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Addition</title>
</head>
<body>
	<?php
	if(isset($_GET['submit'])){
		if(is_null($_GET['num1']) || is_null($_GET['num2']) || is_null($_GET['num3']) ){
			echo "Invalid";
		}else {
			echo $_GET['num1']+$_GET['num2']+$_GET['num3'];
		}
	}
	?>

	<form action="" method="">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="number" name="num3">
		<input type="submit" name="submit" value="Add">
	</form>
	
</body>
</html>