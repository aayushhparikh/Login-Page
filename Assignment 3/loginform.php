<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "login-field">
		<div class = "login/signup">
			<div class="login">
			<h2>Login To My Website</h2>
				<form action="login.php" method="post">
					<?php (include('signup.php')) ?>
					<div class = "login-form">
						<label>Email</label>
						<input type="text" name="email" class="email" required="">
					</div>
					<div class ="login-form">
						<label>Password</label>
						<input type="text" name="password" class="password" required="">
					</div>
					<div class = "login-tab">
					<button type="submit" class="button">Login</button>
					</div>
					<div class = "login-tab">
					<p>Don't Have an Account? <a href="signupform.php">Sign Up Here</a></p>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>