<?php
session_start();
$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$display_name = $_POST['display_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$rdate = date("Y-m-d", time());

$sql =  "SELECT * FROM User WHERE Username ='$display_name' OR Email='$email'";
$result = mysqli_query($conn, $sql); 

if(!$row=mysqli_fetch_assoc($result)) {
	$sql2 =  "INSERT INTO User (Username, Password, Name, Surname, Email, UserType, Status, RegistrationDate, LastLoggedin)
	VALUES ('$display_name', '$password', '$first_name', '$last_name', '$email', 'Simple User', 'Active User', '$rdate', '$rdate')";
	$result2 = mysqli_query($conn, $sql2); 
	$_SESSION['signedup'] = "You've successfully signed up!";
	header("Location: index.php");
} else {
	$_SESSION['errormessage'] = "Username or email already used!";
	header("Location: index.php");
	
}

mysqli_close($conn);
?>
