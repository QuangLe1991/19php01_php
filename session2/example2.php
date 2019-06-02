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
		if (isset($_GET['register'])) {
			if ($_GET['name'] == '') {
				$errName = 'Please input name';
			} else {
				$errName = '';
			}
			if ($_GET['email'] == '') {
				$errEmail = 'Please input email';
			} else {
				$errEmail = '';
			}
			if ($_GET['phonenumber'] == '') {
				$errPhoneNumber = 'Please input phone number';
			} else if (!is_numeric($_GET['phonenumber'])) {
				$errPhoneNumber = 'Please input number not string';
			} else {
				$errPhoneNumber = '';
			}
			if (!isset($_GET['gender'])) {
					$errGender = 'Please input gender';
			} else {
					$errGender = '';
			}
			if ($_GET['homeland'] == '') {
				$errHomeland = 'Please input home land';
			} else {
				$errHomeland = '';
			}
			if ($_GET['birthday'] == '') {
				$errBirthday = 'Please input birthday';
			} else {
				$errBirthday = '';
			}				

		//Save data for retain after submitting
			$name 			= $_GET['name'];
			$email 			= $_GET['email'];
			$phonenumber 	= $_GET['phonenumber'];
			$birthday 		= $_GET['birthday'];
		
		//Print form
			echo 'Name : '.$_GET['name']; echo "<br>";
			echo 'Email :'.$_GET['email']; echo "<br>";
			echo 'Phone Number : '.$_GET['phonenumber']; echo "<br>";
			if (isset($_GET['gender'])) {
				echo 'Gender : '.$_GET['gender']; 
				echo "<br>";
			}
			echo 'Homeland : '.$_GET['homeland']; echo "<br>";
			echo 'Birthday : '.$_GET['birthday']; echo "<br>";
		}
	?>
	<h1>Example 2 form</h1>
	<form action="#" name="Example2Form" method="GET">
		<p>Name :
			<input type="text" name="name" value="<?php if (isset($name)) echo "$name";?>">
			<p class="error"><?php echo $errName; ?></p>
		</p>
		<p>Email :
			<input type="text" name="email" value="<?php if (isset($email)) echo "$email";?>">
			<p class="error"><?php echo $errEmail; ?></p>
		</p>
		<p>Phone Number :
			<input type="text" name="phonenumber" value="<?php if (isset($phonenumber)) echo "$phonenumber";?>">
			<p class="error"><?php echo $errPhoneNumber; ?></p>
		</p>
		<p>Gender :
			<input type="radio" name="gender" value="Male" 
				<?php 
					if (isset($_GET['gender'])) { 
						if ($_GET['gender'] == 'Male') echo"checked=\"checked\"";
					}
				?>
			> Male
			<input type="radio" name="gender" value="Female"
				<?php 
					if (isset($_GET['gender'])) { 
						if ($_GET['gender'] == 'Female') echo"checked=\"checked\"";
					}
				?>
			> Female
			<input type="radio" name="gender" value="Other"
				<?php 
					if (isset($_GET['gender'])) { 
						if ($_GET['gender'] == 'Other') echo"checked=\"checked\"";
					}
				?>
			> Other
			<p class="error"><?php echo $errGender; ?></p>
		</p>
		<p>Homeland :
			<select name="homeland">
				<option value=""></option>
				<option value="Ha Noi"
					<?php 
						if (isset($_GET['homeland'])) { 
							if ($_GET['homeland'] == 'Ha Noi') echo "selected=\"selected\"";
						}
					?>>Ha Noi
				</option>
				<option value="Da Nang" 
					<?php 
						if (isset($_GET['homeland'])) { 
							if ($_GET['homeland'] == 'Da Nang') echo "selected=\"selected\"";
						}
					?>>Da Nang
				</option>
				<option value="Ho Chi Minh"
					<?php 
						if (isset($_GET['homeland'])) { 
							if ($_GET['homeland'] == 'Ho Chi Minh') echo "selected=\"selected\"";
						}
					?>>Ho Chi Minh
				</option>
			</select>
			<p class="error"><?php echo $errHomeland; ?></p>
		</p>
		<p>Birth Day :
			<input type="date" name="birthday" value="<?php if (isset($birthday)) echo "$birthday";?>">
			<p class="error"><?php echo $errBirthday; ?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Submit">
		</p>
	</form>
</body>
</html>