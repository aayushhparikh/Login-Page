<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="091600";

$password = "";
$email = "";
$errors = array();

$dbconn = mysqli_connect($dbhost,$dbuser,$dbpass);

mysqli_select_db($dbconn, 'assignment3');


if (isset($_POST['submit'])) {
	$password = $_POST['password'];
	$email = $_POST['emailaddress'];
}

if (empty($password)) {
	array_push($errors, "Please enter a Password");
}
if (empty($email)) {
	array_push($errors, "Please enter a Email Address");
}

else {
	echo "";
}

if (isset($_POST['login-tab']) {
	
	$password = md5($password);
	
	$s = "SELECT * FROM users WHERE emailaddress = '$email' && password	= '$password'";

	$result = mysqli_query($connection, $s);

	$num = mysqli_num_rows($result);

	if($num == 1) {
	$_SESSION['emailaddress'] = $email;
	$_SESSION['success'] = "Logged in!";
	header('location:home.php');
	}

	else {
		array_push($errors. "wrong email/password. Please try again!");
	}

}

if (count($errors) == 0) {

	$password = md5($password);
	$sql = "INSERT INTO assignment3 (FirstName, LastName, Userame, Password, EmailAddress) VALUES ('$firstname, '$lastname, '$username', '$password','$email')";
	mysqli_query($dbconn, $sql);
}


?>

