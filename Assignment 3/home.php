<?php	

if(!isset($_SESSION['username'])) {
	header('location:signupform.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = homepage >
	<h1>Logged In!</h1>
	<p>Welcome <?php echo $_SESSION['username']; ?>.<p>
	</div>
</body>
</html>