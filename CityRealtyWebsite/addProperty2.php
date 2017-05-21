<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");
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

	if (isset($_POST['LD1'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD2'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD3'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD4'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD5'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD6'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD7'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD7']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LD8'])) {
		$sql11 = "INSERT INTO LDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['LD8']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LU1'])) {
		$sql11 = "INSERT INTO LUse (RealEstateNo, UseNo) VALUES ('$id', '".$_POST['LU1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LU2'])) {
		$sql11 = "INSERT INTO LUse (RealEstateNo, UseNo) VALUES ('$id', '".$_POST['LU2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['LU3'])) {
		$sql11 = "INSERT INTO LUse (RealEstateNo, UseNo) VALUES ('$id', '".$_POST['LU3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL1'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL2'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL3'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL4'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL5'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL6'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL7'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL7']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL8'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL8']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL9'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL9']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL10'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL10']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL11'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL11']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BL12'])) {
		$sql11 = "INSERT INTO BLocationDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BL12']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD1'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD2'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD3'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD4'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD5'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD6'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD7'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD7']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD8'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD8']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD9'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD9']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD10'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD10']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BD11'])) {
		$sql11 = "INSERT INTO BDetails (RealEstateNo, DetailNo) VALUES ('$id', '".$_POST['BD11']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFl1'])) {
		$sql11 = "INSERT INTO BFloorType (RealEstateNo, FloorTypeNo) VALUES ('$id', '".$_POST['BFl1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFl2'])) {
		$sql11 = "INSERT INTO BFloorType (RealEstateNo, FloorTypeNo) VALUES ('$id', '".$_POST['BFl2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFl3'])) {
		$sql11 = "INSERT INTO BFloorType (RealEstateNo, FloorTypeNo) VALUES ('$id', '".$_POST['BFl3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFl4'])) {
		$sql11 = "INSERT INTO BFloorType (RealEstateNo, FloorTypeNo) VALUES ('$id', '".$_POST['BFl4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFl5'])) {
		$sql11 = "INSERT INTO BFloorType (RealEstateNo, FloorTypeNo) VALUES ('$id', '".$_POST['BFl5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFl6'])) {
		$sql11 = "INSERT INTO BFloorType (RealEstateNo, FloorTypeNo) VALUES ('$id', '".$_POST['BFl6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr1'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr2'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr3'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr4'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr5'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr6'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr7'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr7']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr8'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr8']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr9'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr9']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr10'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr10']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr11'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr11']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr12'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr12']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr13'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr13']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr14'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr14']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr15'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr15']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr16'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr16']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr17'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr17']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['BFr18'])) {
		$sql11 = "INSERT INTO BFrames (RealEstateNo, FrameNo) VALUES ('$id', '".$_POST['BFr18']."')";
		$result11 = mysqli_query($conn,$sql11);
	}

	$_SESSION['addedProperty'] = "You've successfully added the property!";
	mysqli_close($conn);
	header("Location: broker_manage.php");
}
?>



