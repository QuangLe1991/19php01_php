<?php  
	$m = 10;
	$n = 20;
	$p = 50;
	$budget = 1000;
	echo "1.000.000 co the doi duoc : <br>";
	for ($i = 0; $i <= $budget/$m; $i++) {
		for ($j = 0; $j <= $budget/$n; $j++) { 
			for ($k = 0; $k <= $budget/$p; $k++) { 
				if (($i*$m + $j*$n + $k*$p) == $budget) {
					echo "$i to 10.000, $j to 20.000, $k to 50.000";
					echo "<br>";
				}
			}
		}
	}
?>