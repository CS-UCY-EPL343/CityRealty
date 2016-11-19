<?php
session_start();
$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$display_name = $_POST['display_name'];
$gender = $_POST['gender'];
$month = $_POST['month'];
$year = $_POST['year'];
$date = $year."-".$month."-".$day;
$email = $_POST['email'];
$phone = $_POST['phone'];
$password2 = $_POST['password2'];
$rdate = date("Y-m-d", time());

$sql =  "SELECT * FROM User WHERE Username ='$display_name' OR Email='$email'";
$result = mysqli_query($conn, $sql); 

if(!$row=mysqli_fetch_assoc($result)) {
	$sql2 =  "INSERT INTO User (Username, Password, Gender, Name, Surname, Email, UserType, Status, RegistrationDate, LastLoggedin, PhoneNumber)
	VALUES ('$display_name', '$password2', '$gender', '$first_name', '$last_name', '$email', 'External Broker', 'Active User', '$rdate', '$rdate', '$phone')";
	$result2 = mysqli_query($conn, $sql2); 
	$_SESSION['signedup'] = "You have successfully signed up!";
	header("Location: index.php");
} else {
	$_SESSION['errormessage'] = "Username or email already used!";
	header("Location: index.php");
	
}

mysqli_close($conn);
?>
