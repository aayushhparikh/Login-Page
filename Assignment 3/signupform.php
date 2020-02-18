<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<div class="signup">
		<div class=header> 
			<h1> Sign Up </h1>
			<p> Please fill out this form to register </p>
		</div>
				<form action="signup.php" method="post">
					<?php include('signup.php'); ?>
					<div class = "signup-form">
						<label>First Name</label>
						<br>
						<input type="text" name="firstname" value="<?php echo $firstname; ?>">
					</div>
					<div class ="signup-form">
						<label>Last Name</label>
						<br>
						<input type="text" name="lastname" value="<?php echo $lastname; ?>">
					</div>
					<div class = "signup-form">
						<label>Username</label>
						<br>
						<input type="text" name="username" value="<?php echo $username; ?>">
					</div>
					<div class = "signup-form">
						<label>Password</label>
						<br>
						<input type="text" name="password" value="<?php echo $password; ?>">
					</div>
					<div class = "signup-form">
						<label>Email Address</label>
						<br>
						<input type="text" name="emailaddress" value="<?php echo $email; ?>">
					</div>
					<div class = "signup-tab">	
					<button type="submit" name="submit" class="button">Sign Up</button>
					</div>
					<div class = "signup-tab">
					<p>Already have an Account? <a href="loginform.php">Login Here</a></p>
					</div>
				</form>
			</div>
	</body>
</html>
