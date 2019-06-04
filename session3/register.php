<!DOCTYPE html>
<html>
<head>
	<title>Register - Session 3</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<h1>Register form</h1>
	<?php 
		$errUserName = $errPassword = $errGender = $errCity = '';
		$username = $password = '';
		if (isset($_POST['register'])) {
			$username =  $_POST['username'];
			$password =  $_POST['password'];
			$gender   =  $_POST['gender'];
			$city     =  $_POST['city'];
			var_dump($_POST['city']);
			if ($username == '') {
				$errUserName  = 'Please input your username';
			} else {
				$errUserName = '';
			}
			if ($password == '') {
				$errPassword  = 'Please input your password';
			} else {
				$errPassword = '';
			}
			if ($gender == NULL) {
				$errGender  = 'Please choose your gender';
			} else {
				$errGender = '';
			}
			if ($city == '') {
				$errCity  = 'Please choose your city';
			} else {
				$errCity = '';
			}
		}
	?>
	<form action="#" method="POST">
		<p>Username: 
			<input type="text" name="username" value="<?php echo $username?>">
		</p>
		<p class="error"><?php echo $errUserName;?></p>
		<p>Password: 
			<input type="password" name="password" value="<?php echo $password?>">
		</p>
		<p class="error"><?php echo $errPassword;?></p>
		<p>Gender:
			<input type="radio" name="gender" value="male" <?php if ($gender == 'male') {echo "checked";}?>> Male
			<input type="radio" name="gender" value="female" <?php if ($gender == 'female') {echo "checked";}?> > Female
			<input type="radio" name="gender" value="other" <?php if ($gender == 'other') {echo "checked";}?>> Other
		</p>
		<p class="error"><?php echo $errGender;?></p>
		<p>City:
		<select name="city">
			<option value="" <?php if ($city == '') {echo "selected";}?>>Please choose city</option>
			<option value="danang" <?php if ($city == 'danang') {echo "selected";}?>>Da Nang</option>
			<option value="hanoi" <?php if ($city == 'hanoi') {echo "selected";}?>>Ha Noi</option>
			<option value="hochiminh" <?php if ($city == 'hochiminh') {echo "selected";}?>>Ho Chi Minh</option>
		</select>
		</p>
		<p class="error"><?php echo $errCity;?></p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>
