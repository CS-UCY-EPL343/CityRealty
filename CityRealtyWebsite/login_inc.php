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
	mysqli_close($conn);
	header("Location: index.php");
} else {
	$_SESSION['id'] = $display_name;
	$sql2 = "SELECT UserType FROM UserSimple WHERE Username='$display_name'";
	$result2 = mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);
	if (($row2['UserType']=="External Agent") || ($row2['UserType']=="Internal Agent")) {
		mysqli_close($conn);
		header("Location: broker_manage.php");
	}
	else if ($row2['UserType']=="Admin") {
		mysqli_close($conn);
		header("Location: admin.php");
	} else if ($row2['UserType']=="Simple User") {
		mysqli_close($conn);
		header("Location: index.php");
	}
}

?>
