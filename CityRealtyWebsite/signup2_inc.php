<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"SET NAMES utf8");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$display_name = $_POST['display_name'];
$gender = $_POST['gender'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$date = $year."-".$month."-".$day;
$email = $_POST['email'];
$password = $_POST['password'];
$rdate = date("Y-m-d", time());
$street = $_POST['Street'];
$street_num = $_POST['Street_num'];
$City = $_POST['City'];
$country_name = $_POST['country_name'];
$phone = $_POST['phone'];

$sql =  "SELECT * FROM UserSimple WHERE Username ='$display_name' OR Email='$email'";
$result = mysqli_query($conn, $sql); 

if(!$row=mysqli_fetch_assoc($result)) {
	$sql2 =  "INSERT INTO UserSimple (Username, Password, Name, Surname, Email, UserType, UserStatus, RegistrationDate, LastLoggedin)
	VALUES ('$display_name', '$password', '$first_name', '$last_name', '$email', 'External Agent', 'Active User', '$rdate', '$rdate')";
	$result2 = mysqli_query($conn, $sql2);
	$sql3 = "INSERT INTO UserExtended (Username, PrivatePhone, ANumber, AStreet, ACity, ACountry) VALUES ('$display_name', '$phone', '$street_num', '$street', '$City', '$country_name')";
	$result3 = mysqli_query($conn, $sql3); 
	$_SESSION['signedup'] = "You have successfully signed up!";
	header("Location: index.php");
} else {
	$_SESSION['errormessage'] = "Username or email already used!";
	header("Location: index.php");
	
}

mysqli_close($conn);
?>
