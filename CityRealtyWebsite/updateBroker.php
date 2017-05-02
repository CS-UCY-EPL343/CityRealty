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
$email = $_POST['email'];
$password = sha1($_POST['new_password']);
$street = $_POST['Street'];
$street_num = $_POST['Street_num'];
$City = $_POST['City'];
$country_name = $_POST['country_name'];
$phone = $_POST['phone']; 

$id = $_SESSION['id'];
$sql =  "UPDATE UserSimple SET Username='$display_name', Password='$password', Name='$first_name', Surname='$last_name', Email='$email' WHERE Username='$id'";
$result = mysqli_query($conn, $sql);
$sql3 = "UPDATE UserExtended SET Username='$display_name', PrivatePhone='$phone', ANumber='$street_num', AStreet='$street', ACity='$City', ACountry='$country_name' WHERE Username='$id'";
$result3 = mysqli_query($conn, $sql3); 

mysqli_close($conn);
$_SESSION['updatedBroker'] = "You've successfully updated your profile!";
header("Location: broker_manage.php");
?>
