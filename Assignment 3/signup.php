<?php
session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="091600";

$firstname = "";
$lastname = "";
$username = "";
$password = "";
$email = "";
$errors = array();

$dbconn = mysqli_connect($dbhost,$dbuser,$dbpass);

mysqli_select_db($dbconn, 'assignment3');


if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['emailaddress'];
}

if (empty($firstname)) {
	array_push($errors, "Please enter a Firstname");
}
if (empty($lastname)) {
	array_push($errors, "Please enter a Lastname");
}
if (empty($username)) {
	array_push($errors, "Please enter a Username");
}
if (empty($password)) {
	array_push($errors, "Please enter a Password");
}
if (empty($email)) {
	array_push($errors, "Please enter a Email Address");
}


$s = "SELECT * FROM users WHERE username = '$username'";

$result = mysqli_query($dbconn, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	array_push($errors, "Username taken.");
}

if (count($errors) == 0) {

	$password = md5($password);
	$sql = "INSERT INTO users (FirstName, LastName, Userame, Password, EmailAddress) VALUES ('$firstname, '$lastname, '$username', '$password','$email')";
	mysqli_query($dbconn, $sql);
	$_SESSION['email'] = $emailaddress;
	$_SESSION['success'] = "You have been successfully signed up!";
	header('location: home.php');
 }

?>