<!DOCTYPE html>
<html>
<head>
	<title>Form 3 - session 2</title>
</head>
<body>
	<?php 
		$errName = $errEmail = $errPhoneNumber = $errGender = $errHomeLand = $errBirthday = '';
		if (isset($_REQUEST['register'])) {
			if ($_REQUEST['name'] == '') {
				$errName = 'Please input name';
			} else {
				$errName = '';
			}
			if ($_REQUEST['email'] == '') {
				$errEmail = 'Please input email';
			} else {
				$errEmail = '';
			}
			if ($_REQUEST['phonenumber'] == '') {
				$errPhoneNumber = 'Please input phone number';
			} else {
				$errPhoneNumber = '';
			}
			if ($_REQUEST['gender'] == '') {
				$errGender = 'Please input gender';
			} else {
				$errGender = '';
			}
			if ($_REQUEST['homeland'] == '') {
				$errHomeLand = 'Please input home land';
			} else {
				$errHomeLand = '';
			}
			if ($_REQUEST['birthday'] == '') {
				$errBirthday = 'Please input birthday';
			} else {
				$errBirthday = '';
			}
						
			echo $_REQUEST['name'];
			echo "<br>";
			echo $_REQUEST['email'];
			echo "<br>";
		}	
	?>
	<h1>Example 1 form</h1>
	<form action="#" name="Example2Form" method="REQUEST">
		<p>Name :
			<input type="text" name="name" value="">
			<p class="error"><?php echo $errName; ?></p>
		</p>
		<p>Email :
			<input type="text" name="email" value="">
			<p class="error"><?php echo $errEmail; ?></p>
		</p>
		<p>Phone Number :
			<input type="text" name="phonenumber" value="">
			<p class="error"><?php echo $errPhoneNumber; ?></p>
		</p>
		<p>Gender :
			<input type="radio" name="gender" value="male" checked> Male<br>
			<input type="radio" name="gender" value="female"> Female<br>
			<input type="radio" name="gender" value="other"> Other
			<p class="error"><?php echo $errGender; ?></p>
		</p>
		<p>Homeland :
			<select name="homeland">
				<option value="hanoi">Ha Noi</option>
				<option value="danang">Da Nang</option>
				<option value="hochiminh">Ho Chi Minh</option>
			</select>
			<p class="error"><?php echo $errHomeland; ?></p>
		</p>
		<p>Birth Day :
			<input type="date" name="birthday" value="">
			<p class="error"><?php echo $errBirthday; ?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Submit">
		</p>
	</form>
</body>
</html>