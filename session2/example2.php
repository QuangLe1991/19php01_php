<!DOCTYPE html>
<html>
<head>
	<title>Form 3 - session 2</title>
	<style type="text/css">
		.error {
			color: red;
			font-style: italic;
		}
	</style>
</head>
<body>
	<?php 
		//Validate fields
		$errName = $errEmail = $errPhoneNumber = $errGender = $errHomeland = $errBirthday = '';
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
			if (!isset($_REQUEST['gender'])) {
					$errGender = 'Please input gender';
			} else {
					$errGender = '';
			}
			if ($_REQUEST['homeland'] == '') {
				$errHomeland = 'Please input home land';
			} else {
				$errHomeland = '';
			}
			if ($_REQUEST['birthday'] == '') {
				$errBirthday = 'Please input birthday';
			} else {
				$errBirthday = '';
			}				

	//Save data for retain after submitting
		$name 			= $_REQUEST['name'];
		$email 			= $_REQUEST['email'];
		$phonenumber 	= $_REQUEST['phonenumber'];
		$birthday 		= $_REQUEST['birthday'];
		$homeland 		= $_REQUEST['homeland'];
	}
	?>
	<h1>Example 1 form</h1>
	<form action="#" name="Example2Form" method="REQUEST">
		<p>Name :
			<input type="text" name="name" value="<?php if (isset($name)) echo "$name";?>">
			<p class="error"><?php echo $errName; ?></p>
		</p>
		<p>Email :
			<input type="text" name="email" value="<?php if (isset($email)) echo "$email";?>">
			<p class="error"><?php echo $errEmail; ?></p>
		</p>
		<p>Phone Number :
			<input type="number" name="phonenumber" value="<?php if (isset($phonenumber)) echo "$phonenumber"; ?>">
			<p class="error"><?php echo $errPhoneNumber; ?></p>
		</p>
		<p>Gender :
			<input type="radio" name="gender" value="male" 
				<?php 
					if (isset($_REQUEST['gender'])) { 
						if ($_REQUEST['gender'] == 'male') echo"checked=\"checked\"";
					}
				?>
			> Male<br>
			<input type="radio" name="gender" value="female"
				<?php 
					if (isset($_REQUEST['gender'])) { 
						if ($_REQUEST['gender'] == 'female') echo"checked=\"checked\"";
					}
				?>
			> Female<br>
			<input type="radio" name="gender" value="other"
				<?php 
					if (isset($_REQUEST['gender'])) { 
						if ($_REQUEST['gender'] == 'other') echo"checked=\"checked\"";
					}
				?>
			> Other
			<p class="error"><?php echo $errGender; ?></p>
		</p>
		<p>Homeland :
			<select name="homeland">
				<option value=""></option>
				<option value="hanoi"
					<?php 
						if (isset($_REQUEST['homeland'])) { 
							if ($_REQUEST['homeland'] == 'hanoi') echo "selected=\"selected\"";
						}
					?>>Ha Noi
				</option>
				<option value="danang" 
					<?php 
						if (isset($_REQUEST['homeland'])) { 
							if ($_REQUEST['homeland'] == 'danang') echo "selected=\"selected\"";
						}
					?>>Da Nang
				</option>
				<option value="hochiminh"
					<?php 
						if (isset($_REQUEST['homeland'])) { 
							if ($_REQUEST['homeland'] == 'hochiminh') echo "selected=\"selected\"";
						}
					?>>Ho Chi Minh
				</option>
			</select>
			<p class="error"><?php echo $errHomeland; ?></p>
		</p>
		<p>Birth Day :
			<input type="date" name="birthday" value="
				<?php 
					if (isset($birthday)) echo "$birthday"; 
				?>"
			>
			<p class="error"><?php echo $errBirthday; ?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Submit">
		</p>
	</form>
</body>
</html>