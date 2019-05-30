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
					if (($i == 0) && ($j == 0)) echo "$k to 50.000";
					else if (($i == 0) && ($k == 0)) echo "$j to 20.000";
					else if (($j == 0) && ($k == 0)) echo "$i to 10.000";
					else if ($i == 0) echo "$j to 20.000, $k to 50.000";
					else if ($j == 0) echo "$i to 10.000, $k to 50.000";
					else if ($k == 0) echo "$i to 10.000, $j to 20.000";
					else echo "$i to 10.000, $j to 20.000, $k to 50.000";
					echo "<br>";
				}
			}
		}
	}
?>