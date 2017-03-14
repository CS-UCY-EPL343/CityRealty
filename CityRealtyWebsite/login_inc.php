<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$display_name = $_POST['display_name'];
$password = $_POST['password'];

$sql =  "SELECT * FROM UserSimple WHERE Username='$display_name' AND Password='$password'";
$result = mysqli_query($conn, $sql); 

if(!$row=mysqli_fetch_assoc($result)) {
	$_SESSION['errorlogin']= "Your username or password is incorrect!";
} else {
	$_SESSION['id'] = $display_name;
}

if($_POST['username'] == $username && $_POST['password'] == $password){
         header("Location: index.php");
}else{
	if($_SESSION['UserType'] == "ADMIN"){
	   header("Location: admin.php");
       header("Location: admin.html");
    }else if($_SESSION['UserType'] == "External Broker"|| $_SESSION['UserType'] == "Internal Broker" || $_SESSION['UserType'] == "Broker"){
			   header("Location: broker_manage.php");
       header("Location: broker_manage.html");
	}
}

header("Location: index.php");

mysqli_close($conn);
?>
