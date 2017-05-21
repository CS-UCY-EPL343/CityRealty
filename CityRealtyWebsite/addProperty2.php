<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = mysqli_connect("localhost", "CityRealty", "QKSH7XJws7MCpxWR", "CityRealty");
mysqli_query($conn,"SET NAMES utf8");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['send']))
{
	$category = $_GET['category'];
	$piece_no = $_GET['piece_no'];
	$sqls = "SELECT RealEstateNo FROM RealEstate WHERE PieceNo=$piece_no";
	$results = mysqli_query($conn, $sqls)
	or die("Error: !".mysqli_error($conn));
	$row = mysqli_fetch_assoc($results);
	$id = $row['RealEstateNo'];

	if ($category=="Γη") {

		/*gi-land*/
		$LandType= $_POST['LandType'];
		$TMLand= $_POST['TMLand'];
		$TMBuilding= $_POST['TMBuilding'];
		$Builded= $_POST['Builded'];
		$NotBuilded= $_POST['NotBuilded'];
		$CityPlan= $_POST['CityPlan'];
		$InvestmentField= $_POST['InvestmentField'];
		$BuildIn= $_POST['BuildIn'];
		$SD= $_POST['SD'];
		$SK= $_POST['SK'];
		$Front= $_POST['Front'];
		$Depth= $_POST['Depth'];
		$AOT= $_POST['AOT'];
		$NumOfPlots= $_POST['NumOfPlots'];

		$sql1 = "INSERT INTO Land (RealEstateNo,LandType,TMLand,TMBuilding,Builded,NotBuilded,CityPlan,InvestmentField,
		BuildIn,SD,SK,Front,Depth,AOT,NumOfPlots)VALUES('$id','$LandType','$TMLand','$TMBuilding','$Builded','$NotBuilded','$CityPlan',
		'$InvestmentField','$BuildIn','$SD','$SK','$Front','$Depth','$AOT','$NumOfPlots')";
	}

	if ($category=="Κατοικία") {
		/*katoikia-Residence*/
		$ResidenceType= $_POST['ResidenceType'];
		//echo $ResidenceType;
		$Kitchen= $_POST['Kitchen'];
		$Bathrooms= $_POST['Bathrooms'];
		$RooftopArea= $_POST['RooftopArea'];
		$TotalBedrooms= $_POST['TotalBedrooms'];
		$MasterBedroom= $_POST['MasterBedroom'];
		$LivingRooms= $_POST['LivingRooms'];
		$BalconyArea= $_POST['BalconyArea'];
		$Furnished= $_POST['Furnished'];

		$sql2 = "INSERT INTO Residence (RealEstateNo,ResidenceType,Kitchen,Bathrooms,RooftopArea,TotalBedrooms,MasterBedroom,LivingRooms,
		BalconyArea,Furnished)VALUES('$id','$ResidenceType','$Kitchen','$Bathrooms','$RooftopArea','$TotalBedrooms','$MasterBedroom',
		'$LivingRooms','$BalconyArea','$Furnished')";
	}

	if ($category=="Επαγγελματικός χώρος") {
		/*epaggelmatikos xwros-office*/
		$OfficeType= $_POST['OfficeType'];
		$NumOfBasements= $_POST['NumOfBasements'];
		$NumOfFloors= $_POST['NumOfFloors'];
		$StoreFrontArea= $_POST['StoreFrontArea'];
		$GroundFloorArea= $_POST['GroundFloorArea'];
		$EquipmentIncluded= $_POST['EquipmentIncluded'];
		$Investment= $_POST['Investment'];
		$NumOfSegments= $_POST['NumOfSegments'];
		$SurfaceArea= $_POST['SurfaceArea'];
		$LoftArea= $_POST['LoftArea'];
		$BasementArea= $_POST['BasementArea'];
		$AirPrice= $_POST['AirPrice'];

		$sql3 = "INSERT INTO Office (RealEstateNo,OfficeType,NumOfBasements,NumOfFloors,StoreFrontArea,GroundFloorArea,EquipmentIncluded,Investment,NumOfSegments,SurfaceArea,LoftArea,BasementArea,AirPrice) VALUES ('$id','$OfficeType','$NumOfBasements','$NumOfFloors','$StoreFrontArea','$GroundFloorArea','$EquipmentIncluded','$Investment','$NumOfSegments','$SurfaceArea','$LoftArea','$BasementArea','$AirPrice')";
	}

	if (($category=="Ξενοδοχείο") || ($category=="Κατοικία") || ($category=="Επαγγελματικός χώρος")) {
		/*ksenodoxeio-building*/
		$BuildingType= $_POST['BuildingType'];
		$ConstructionYear= $_POST['ConstructionYear'];
		$NumOfFloorsB= $_POST['NumOfFloorsB'];
		$ParkingSpots= $_POST['ParkingSpots'];
		$NumOfRooms= $_POST['NumOfRooms'];
		$EnergyCertificate= $_POST['EnergyCertificate'];
		$Levels= $_POST['Levels'];
		$Renovated= $_POST['Renovated'];
		$RenovationYear= $_POST['RenovationYear'];
		$NumOfWC= $_POST['NumOfWC'];
		$Drainage= $_POST['Drainage'];
		$HeatingFuel= $_POST['HeatingFuel'];
		$HeatingType= $_POST['HeatingType'];
		$AvgSharedCosts= $_POST['AvgSharedCosts'];
		$UnderConstruction= $_POST['UnderConstruction'];

		$sql4 = "INSERT INTO Building(RealEstateNo,BuildingType,ConstructionYear,NumOfFloors,ParkingSpots,NumOfRooms,EnergyCertificate,Levels,
		Renovated,RenovationYear,NumOfWC,Drainage,HeatingFuel,HeatingType,AvgSharedCosts,UnderConstruction)VALUES('$id','$BuildingType',
		'$ConstructionYear','$NumOfFloorsB','$ParkingSpots','$NumOfRooms','$EnergyCertificate','$Levels','$Renovated',
		'$RenovationYear','$NumOfWC','$Drainage','$HeatingFuel','$HeatingType','$AvgSharedCosts','$UnderConstruction')";
	}

	if (isset($sql1)) {
		$result1 = mysqli_query($conn,$sql1)
		or die("Error: !".mysqli_error($conn));
	}
	if (isset($sql2)) {
		$result2 = mysqli_query($conn,$sql2)
		or die("Error: !".mysqli_error($conn));
	}
	if (isset($sql3)) {
		$result3 = mysqli_query($conn,$sql3)	
		or die("Error: !".mysqli_error($conn));
	}
	if (isset($sql4)) {
		$result4 = mysqli_query($conn,$sql4)	
		or die("Error: !".mysqli_error($conn));
	}
	$_SESSION['addedProperty'] = "You've successfully added the property!";
	mysqli_close($conn);
	header("Location: broker_manage.php");
}
?>



