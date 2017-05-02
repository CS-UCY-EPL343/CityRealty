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
$password = sha1($_POST['password']);
$rdate = date("Y-m-d", time());
$street = $_POST['Street'];
$street_num = $_POST['Street_num'];
$City = $_POST['City'];
$country_name = $_POST['country_name'];
$phone = $_POST['phone'];

if ($sql = $conn->prepare("SELECT UserType FROM UserSimple WHERE Username =? OR Email=?")) {
	$sql->bind_param("ss", $display_name, $email);
	$sql->execute();
	$sql->bind_result($row);
	$sql->fetch();

	if(!$row) {
		if ($sql2 = $conn->prepare("INSERT INTO UserSimple (Username, Password, Name, Surname, Email) VALUES (?, ?, ?, ?, ?)")) {
			$sql2->bind_param("sssss", $display_name, $password, $first_name, $last_name, $email);
			$sql2->execute();
			$sql3 = $conn->prepare("UPDATE UserSimple SET UserType='Simple User', UserStatus='Active User', RegistrationDate='$rdate', LastLoggedin='$rdate' WHERE Username =?");
			$sql3->bind_param("s", $display_name);
			$sql3->execute();
			$sql4 = $conn->prepare("INSERT INTO UserExtended (Username, PrivatePhone, ANumber, AStreet, ACity, ACountry) VALUES (?, ?, ?, ?, ?, ?)");
			$sql4->bind_param("sdssss", $display_name, $phone, $street_num, $street, $City, $country_name);
			$sql4->execute();
			$_SESSION['signedup'] = "You've successfully signed up!";
			mysqli_close($conn);
			$sql->close();
			$sql2->close();
			$sql3->close();
			$sql4->close();
			header("Location: index.php");
		}
	} else {
		$_SESSION['errormessage'] = "Username or email already used!";
		mysqli_close($conn);
		$sql->close();
		header("Location: sell.php");
	}
} 
?>
