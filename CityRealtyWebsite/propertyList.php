<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$display_name = $_POST['display_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM REALESTATE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["REGISTRATIONTITLENO"]."<br>";
		echo $row["NOTES"]. $row["FINALPRICE"]."<br>";
		echo $row["STATUS"] ."<br>";
    }
} else {
    echo "0 results";
}

header("Location: propertyList.php");

mysqli_close($conn);