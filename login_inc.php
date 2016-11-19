<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$display_name = $_POST['display_name'];
$password = $_POST['password'];

$sql =  "SELECT * FROM User WHERE Username='$display_name' AND Password='$password'";
$result = mysqli_query($conn, $sql); 

if(!$row=mysqli_fetch_assoc($result)) {
	$_SESSION['errorlogin']= "Your username or password is incorrect!";
} else {
	$_SESSION['id'] = "Logged in";
}

header("Location: index.php");

mysqli_close($conn);
?>