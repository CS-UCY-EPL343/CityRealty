<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");
mysqli_query($conn,"SET NAMES utf8");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['next']))
{
	$category = $_POST['category'];

	/*real estate*/
	$astreet = $_POST['astreet'];
	$acity = $_POST['acity']; 
	$region = $_POST['region'];
	$zone = $_POST['zone'];
	$area_tm = $_POST['area_tm'];
	$realestate_status = $_POST['realestate_status'];
	$legal_control = $_POST['legal_control'];
	$RegistrationTitleNo = $_POST['RegistrationTitleNo'];
	$ArithmosFilSxed = $_POST['ArithmosFilSxed'];
	$currency = $_POST['currency'];
	$vat = $_POST['vat'];
	$RegistartionTitle = $_POST['RegistartionTitle'];
	$AgentUsername= $_POST['AgentUsername'];
	$OrderCode = $_POST['OrderCode'];
	$TypeCode = $_POST['TypeCode'];
	$OrderStart = $_POST['OrderStart'];
	$OrderStop = $_POST['OrderStop'];
	$AgentRewardPercentage= $_POST['AgentRewardPercentage'];
	$AgentReward= $_POST['AgentReward'];	
	$available_from = $_POST['AvailableFrom'];
	$transfer_cost= $_POST['TransferCost'];
	$transfer_vat= $_POST['TransferVAT'];
	$astreet_no = $_POST['astreet_no'];
	$acountry = $_POST['acountry'];
	$apostal_code = $_POST['apostal_code'];
	$Latitude = $_POST['Latitude'];
	$Longitude = $_POST['Longitude'];
	$purpose = $_POST['purpose'];
	$piece_no = $_POST['piece_no'];
	$folder_no = $_POST['folder_no'];
	$ArithmosAdOik = $_POST['ArithmosAdOik'];
	$price = $_POST['price'];
	$MortgageLoan = $_POST['ipothiki'];
	$notes= $_POST['notes'];
	$short_desc = $_POST['short_desc'];
	$desc = $_POST['desc'];
	$consideration_exchange= $_POST['ConsiderationExchange'];

	$sql = "INSERT INTO RealEstate (AStreet, Acity,ARegionCode,Zone,AreaTM,RealEstateStatus,LegalControl,RegistrationTitleNo,ArithmosFilSxed,Currency,
	VAT,RegistrationTitle,AgentUsername,OrderCode, TypeOrder,OrderStart,OrderStop,AgentRewardPercentage,
	AgentReward,AvailableFrom,TransferCost, TransferVAT,AStreetNo,ACountry,APostalCode,Latitude,Longitude,
	RegistrationPurpose,PieceNo, FolderNo, ArithmosAdOik,Price,MortgageLoan,Notes,ShortDescription, Description,ConsiderationExchange,Category)
	VALUES ('$astreet','$acity','$region','$zone','$area_tm','$realestate_status','$legal_control',
	'$RegistrationTitleNo','$ArithmosFilSxed','$currency',
	'$vat','$RegistartionTitle','$AgentUsername','$OrderCode','$TypeCode','$OrderStart',
	'$OrderStop','$AgentRewardPercentage','$AgentReward','$available_from','$transfer_cost',
	'$transfer_vat','$astreet_no','$acountry','$apostal_code','$Latitude','$Longitude',
	'$purpose','$piece_no','$folder_no','$ArithmosAdOik','$price','$MortgageLoan',
	'$notes','$short_desc','$desc','$consideration_exchange','$category')";

	$result = mysqli_query($conn,$sql)
	or die("Error: !".mysqli_error($conn));

	$sqls = "SELECT RealEstateNo FROM RealEstate WHERE PieceNo=$piece_no";
	$results = mysqli_query($conn, $sqls);
	$row = mysqli_fetch_assoc($results);
	$id = $row['RealEstateNo'];

	if (isset($_POST['REA1'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA2'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA3'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA4'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA5'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA6'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA7'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA7']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA8'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA8']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REA9'])) {
		$sql11 = "INSERT INTO REAppearance (RealEstateNo, AppearanceNo) VALUES ('$id', '".$_POST['REA9']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REV1'])) {
		$sql11 = "INSERT INTO REView (RealEstateNo, ViewNo) VALUES ('$id', '".$_POST['REV1']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REV2'])) {
		$sql11 = "INSERT INTO REView (RealEstateNo, ViewNo) VALUES ('$id', '".$_POST['REV2']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REV3'])) {
		$sql11 = "INSERT INTO REView (RealEstateNo, ViewNo) VALUES ('$id', '".$_POST['REV3']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REV4'])) {
		$sql11 = "INSERT INTO REView (RealEstateNo, ViewNo) VALUES ('$id', '".$_POST['REV4']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REV5'])) {
		$sql11 = "INSERT INTO REView (RealEstateNo, ViewNo) VALUES ('$id', '".$_POST['REV5']."')";
		$result11 = mysqli_query($conn,$sql11);
	}
	if (isset($_POST['REV6'])) {
		$sql11 = "INSERT INTO REView (RealEstateNo, ViewNo) VALUES ('$id', '".$_POST['REV6']."')";
		$result11 = mysqli_query($conn,$sql11);
	}

	mysqli_close($conn);
	if ($category=="Ξενοδοχείο")
		header("Location: addHotel.php?piece_no=$piece_no&category=$category");
	else if ($category=="Επαγγελματικός χώρος")
		header("Location: addOffice.php?piece_no=$piece_no&category=$category");
	else if ($category=="Γη")
		header("Location: addLand.php?piece_no=$piece_no&category=$category");
	else if ($category=="Κατοικία")
		header("Location: addRecident.php?piece_no=$piece_no&category=$category");
}
?>
