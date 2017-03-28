<?php
if (isset($_POST['section'])) {
	$example1 = $_POST['section'];


	$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_query($conn,"SET NAMES utf8");
	if ($example1=="Λευκωσία") {
		$sql =  "SELECT RegionName, RegionCode FROM CityNicosia";
	}
	elseif ($example1=="Πάφος") {
		$sql =  "SELECT RegionName, RegionCode FROM CityPafos";
	}
	elseif ($example1=="Λάρνακα") {
		$sql =  "SELECT RegionName, RegionCode FROM CityLarnaca";
	}
	elseif ($example1=="Λεμεσός") {
		$sql =  "SELECT RegionName, RegionCode FROM CityLimassol";
	}
	elseif ($example1=="Αμμόχωστος") {
		$sql =  "SELECT RegionName, RegionCode FROM CityFamagusta";
	}
	$result = mysqli_query($conn, $sql);
	$i=1;
	while($row=mysqli_fetch_assoc($result)) {
		$nameandvalue = $row['RegionCode'];
		if ($i<30)
			echo "<div class='col-sm-2 checkbox'><label><input name='$nameandvalue' type='checkbox' value='$nameandvalue'>".$row['RegionName']."</label></div>";
		elseif ($i<60)
			echo "<div class='col-sm-2 checkbox'><label><input name='$nameandvalue' type='checkbox' value='$nameandvalue'>".$row['RegionName']."</label></div>";
		elseif ($i<90)
			echo "<div class='col-sm-2 checkbox'><label><input name='$nameandvalue' type='checkbox' value='$nameandvalue'>".$row['RegionName']."</label></div>";
		elseif ($i<120)
			echo "<div class='col-sm-2 checkbox'><label><input name='$nameandvalue' type='checkbox' value='$nameandvalue'>".$row['RegionName']."</label></div>";
		elseif ($i<150)
			echo "<div class='col-sm-2 checkbox'><label><input name='$nameandvalue' type='checkbox' value='$nameandvalue'>".$row['RegionName']."</label></div>";
		elseif ($i<180)
			echo "<div class='col-sm-2 checkbox'><label><input name='$nameandvalue' type='checkbox' value='$nameandvalue'>".$row['RegionName']."</label></div>";
		$i++;
	}
}
?>
