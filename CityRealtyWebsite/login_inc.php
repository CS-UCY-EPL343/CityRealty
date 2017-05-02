<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$display_name = $_POST['display_name'];
$password = $_POST['password'];

if ($sql = $conn->prepare("SELECT UserType FROM UserSimple WHERE Username=? AND Password=?")) {
	$sql->bind_param("ss", $display_name, $password);
	$sql->execute();
	$sql->bind_result($row);
	$sql->fetch();

	if(!$row) {
		$_SESSION['errorlogin']= "Your username or password is incorrect!";
		mysqli_close($conn);
		$sql->close();
		header("Location: index.php");
	} else {
		$_SESSION['id'] = $display_name;
		if (($row=="External Agent") || ($row=="Internal Agent")) {
			mysqli_close($conn);
			$sql->close();
			header("Location: broker_manage.php");
		}
		else if ($row=="Admin") {
			mysqli_close($conn);
			$sql->close();
			header("Location: admin.php");
		} else if ($row=="Simple User") {
			mysqli_close($conn);
			$sql->close();
			header("Location: index.php");
		}
	}
}

?>
