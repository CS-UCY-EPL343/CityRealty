<?php 
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	session_start();
	
	$conn = mysqli_connect("localhost", "CityRealty", "QKSH7XJws7MCpxWR", "CityRealty");
	mysqli_query($conn,"SET NAMES utf8");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST['newsletter_button']))
	{
		$email = $_POST['nemail'];
		$name = $_POST['nname'];
	
		$sql = "INSERT INTO NewsletterList (Email,Name) VALUES ('$email','$name');";

		$result = mysqli_query($conn,$sql)
		or die("Error: !".mysqli_error($conn));
		mysqli_close($conn);
		echo "You've successfully registered to our Newsletter!";
	}
?>
