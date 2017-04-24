<?php 
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"SET NAMES utf8");

$reid = $_GET['reid'];
$sql = "DELETE FROM RealEstate WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM REAppearance WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM Residence WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM REView WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM Office WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM OfficeTeenant WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql);
$sql = "DELETE FROM Land WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql);  
$sql = "DELETE FROM LDetails WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM LUse WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM Building WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM BDetails WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM BFloorType WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM BFrames WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 
$sql = "DELETE FROM BLocationDetails WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql); 

$id = $_SESSION['id'];
$sql2 = "SELECT UserType FROM UserSimple WHERE Username=$id";
$result2 = mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
if ($row2['UserType']=="Admin") {
	mysqli_close($conn);
	header("Location: admin.php");
} else {
	mysqli_close($conn);
	header("Location: broker_manage.php");
}

?>
