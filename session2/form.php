<!DOCTYPE html>
<html>
<head>
	<title>Form example - session 2</title>
</head>
<body>
	<?php 
		$errName = $errPass = '';
		if (isset($_REQUEST['register'])) {
			if ($_REQUEST['name'] == '') {
				$errName = 'Please input your name';
			} else {
				$errName = '';
			}
			if ($_REQUEST['password'] == '') {
				$errPass = 'Please input your password';
			} else {
				$errPass = '';
			}
						
			echo $_REQUEST['name'];
			echo "<br>";
			echo $_REQUEST['password'];
		}	
	?>
	<h1>Register form</h1>
	<form action="#" name="RegisterForm" method="REQUEST">
		<p>Name :
			<input type="text" name="name">
			<p class="error"><?php echo $errName; ?></p>
		</p>
		<p>Password:
			<input type="password" name="password">
			<p class="error"><?php echo $errPass; ?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>