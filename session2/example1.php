<!DOCTYPE html>
<html>
<head>
	<title>Form 2 - session 2</title>
</head>
<body>
	<?php 
		$errNo1 = $errNo2 = '';
		if (isset($_REQUEST['register'])) {
			if ($_REQUEST['number1'] == '') {
				$errNo1 = 'Please input first number';
			} else {
				$errNo1 = '';
			}
			if ($_REQUEST['number2'] == '') {
				$errNo2 = 'Please input second number';
			} else {
				$errNo2 = '';
			}
						
			echo $_REQUEST['number1'];
			echo "<br>";
			echo $_REQUEST['number2'];
			echo "<br>";
			echo intval($_REQUEST['number1']) + intval($_REQUEST['number2']);
			// echo $sum;
		}	
	?>
	<h1>Example 1 form</h1>
	<form action="#" name="Example1Form" method="REQUEST">
		<p>First number :
			<input type="number" name="number1" value="">
			<p class="error"><?php echo $errNo1; ?></p>
		</p>
		<p>Second number :
			<input type="number" name="number2" value="">
			<p class="error"><?php echo $errNo2; ?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Plus">
		</p>
	</form>
</body>
</html>