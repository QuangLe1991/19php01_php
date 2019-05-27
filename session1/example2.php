<link rel="stylesheet" type="text/css" href="css/style.css">
<?php 
	$row = 8;
	$col = 8;
	for ($i = 1; $i <= $row; $i++) {
		for ($j = 1; $j < $col; $j++) { 
			if (($i + $j) % 2 == 0) echo "<div class='white'></div>";
			else echo "<div class='black'></div>";
		}
	echo "<br>";
	}
?>