<?php  
	$year = 3;
	$capital = 150000000;
	$interest = 0.7/100;
	$initial = 3000000;
	for ($i = 1; $i <= $year*12; $i++) {
		$capital = $capital + $capital*$interest;
		if ($i % 3 == 0) {
			$capital = $capital - ($initial + 1000000*($i/3 - 1));
		}
	}
	echo "Sau $year nam nhan duoc ca goc lan lai la : ";
	echo number_format($capital, 0,',','.');
?>