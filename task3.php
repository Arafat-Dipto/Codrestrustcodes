<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print</title>
</head>
<body>
	<h1>
	
	<?php
		
		function multi($count,$mult){
			if($count == 6){
				echo "multiplication of 1 x 2 x 3 x 4 x 5 = ". $mult;
				exit();
			}else {
				$mult = $mult * $count;
				multi($count+1,$mult);
			}
		}
		multi(1,1);
	?>
	
	</h1>
</body>
</html>