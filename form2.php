<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Addition</title>
</head>
<body>
	<?php
		$user = "Arafat";
		$password = "dipto123";
	if(isset($_GET['submit'])){
		if(!empty($_GET['username']) && !empty($_GET['pass']) ){
			if($user == $_GET['username'] && $password == $_GET['pass'] ){
			 	echo "Logged in ";
			}else{
				echo "Invalid user...";
			}
		}else{
			echo "Input both fields";
			
		}
	}
	?>

	<form action="" method="">
		<input type="text" name="username">
		<input type="password" name="pass">
		<input type="submit" name="submit" value="Send">
	</form>
	
</body>
</html>