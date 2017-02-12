<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$display_name = $_POST['display_name'];
$password = $_POST['password'];

$sql = "SELECT NOTES, TYPE, STATE, LOCATION, AAREA,FINALPRICE,BUILTDATE,DATEPUBLISHED FROM REALESTATE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["NOTES"]."<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo $row["TYPE"]."<br>";
		echo $row["STATE"]."<br>";
		echo $row["LOCATION"]."<br>";
		echo $row["AAREA"]."<br>";
		echo $row["FINALPRICE"]."<br>";
		echo $row["DATEBUILT"]."<br>";
		echo $row["DATEPUBLISHED"]."<br>";
    }
} else {
    echo "0 results";
}
 $conn->close();

header("Location: propertyDetails.php");

mysqli_close($conn);
?>
<?php


?> 
