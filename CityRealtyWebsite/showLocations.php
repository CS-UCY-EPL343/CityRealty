<?php
if (isset($_POST['section'])) {
	$example1 = $_POST['section'];


	$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

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
	$i=0;
	while($row=mysqli_fetch_assoc($result)) {
		if ($i<30)
			echo "<div class='col-sm-2 form-group checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div>";
		elseif ($i<60)
			echo "<div class='col-sm-2 form-group checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div>";
		elseif ($i<90)
			echo "<div class='col-sm-2 form-group checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div>";
		elseif ($i<120)
			echo "<div class='col-sm-2 form-group checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div>";
		elseif ($i<150)
			echo "<div class='col-sm-2 form-group checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div>";
		elseif ($i<180)
			echo "<div class='col-sm-2 form-group checkbox'><label><input type='checkbox' value=''>".$row['RegionName']."</label></div>";
		$i++;
	}
}
?>
