<?php 
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"SET NAMES utf8");

$reid = $_GET['reid'];
$sql = "SELECT REState FROM RealEstate WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$row=mysqli_fetch_assoc($result);
if ($row['REState']=="Published")
	$sql2 =  "UPDATE RealEstate SET REState = 'Unpublished' WHERE RealEstateNo=$reid";
else 
	$sql2 =  "UPDATE RealEstate SET REState = 'Published' WHERE RealEstateNo=$reid";
$result2 = mysqli_query($conn, $sql2); 
header("Location: admin.php");

?>