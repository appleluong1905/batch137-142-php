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
		$errUserName = $errPassword = '';
		$username = $password = '';
		if (isset($_POST['register'])) {
			$username =  $_POST['username'];
			$password =  $_POST['password'];
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
		}
	?>
	<form action="#" method="POST">
		<p>Username: 
			<input type="text" name="username" value="<?php echo $username?>">
			<p class="error"><?php echo $errUserName;?></p>
		</p>
		<p>Password: 
			<input type="password" name="password" value="<?php echo $password?>">
			<p class="error"><?php echo $errPassword;?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>
