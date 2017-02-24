<?php
if (isset($_POST['section'])) {
	$example1 = $_POST['section'];


	$conn = mysqli_connect("localhost", "CityRealty", "QKSH7XJws7MCpxWR", "CityRealty");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_query($conn,"SET NAMES utf8");
	if ($example1=="Nicosia") {
		$sql =  "SELECT RegionName FROM CityNicosia";
	}
	elseif ($example1=="Pafos") {
		$sql =  "SELECT RegionName FROM CityPafos";
	}
	elseif ($example1=="Larnaca") {
		$sql =  "SELECT RegionName FROM CityLarnaca";
	}
	elseif ($example1=="Limassol") {
		$sql =  "SELECT RegionName FROM CityLimassol";
	}
	elseif ($example1=="Famagusta") {
		$sql =  "SELECT RegionName FROM CityFamagusta";
	}
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_assoc($result)) {
		echo "<div class='col-lg-10'><div class='form-group'><div class='checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div></div></div>";
	}
}
?>