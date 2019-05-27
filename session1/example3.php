<link rel="stylesheet" type="text/css" href="css/style_star.css">

<!-- right triangle -->
<?php 
	$height = 10;
	for ($i = 1; $i <= $height; $i++) {
		for ($j = 1; $j	<= $height; $j++) {
			if ($j <= $i) echo "<div class='element'>*</div>";
		}
	echo "<br>";
	}
echo "<br>";
?>

<!--  equilateral triangle  -->
<?php 
	echo "<br>";
	$height = 10;
	for ($i = 1; $i <= $height; $i++) {
		$n = $height - $i;
		while ($n > 0) {
			echo  "<div class='space'></div>";
			$n--;
		}
		for ($j = 1; $j	<= $height; $j++) {
			if ($j <= $i) {

				echo "<div class='element'>*</div>";
			}
		}
	echo "<br>";
	}
?>