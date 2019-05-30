<?php  
	$year = 3;
	$capital = 20000000;
	$interest = 0.6/100;
	for ($i = 1; $i <= $year*12; $i++) {
		$capital = $capital + $capital*$interest;
	}
	echo "Sau $year nam nhan duoc ca goc lan lai la : ";
	echo number_format($capital, 0,',','.');
?>