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
	$astreet_no = $_POST['astreet_no'];
	$astreet = $_POST['astreet'];
	$acity = $_POST['acity']; 
	$area_tm = $_POST['area_tm'];
	$acountry = $_POST['acountry'];
	$apostal_code = $_POST['apostal_code'];
	$aregion_code = $_POST['aregion_code'];
	$registration_title_no = $_POST['registration_title_no'];
	$piece_no = $_POST['piece_no'];
	$folder_no = $_POST['folder_no'];
	$blueprint_no = $_POST['blueprint_no'];
	$arithmos_ad_oik = $_POST['arithmos_ad_oik'];
	$legal_control = $_POST['legal_control'];
	$initial_price = $_POST['initial_price'];
	$estimated_price = $_POST['estimated_price'];
	$mortage_loan = $_POST['mortage_loan'];
	$objective_value = $_POST['objective_value'];
	$final_price = $_POST['final_price'];
	$corner = $_POST['corner'];
	$zone = $_POST['zone'];
	$available_from = $_POST['available_from'];
	$date_added = $_POST['date_added'];
	$registration_purpose = $_POST['registration_purpose'];
	$price = $_POST['price'];
	$currency = $_POST['currency'];
	$price_per_tm = $_POST['price_per_tm'];
	$tm = $_POST['tm'];
	$vat = $_POST['vat'];
	$short_desc = $_POST['short_desc'];
	$desc = $_POST['desc'];
	$about_renting = $_POST['about_renting'];
	$recommended_by = $_POST['recommended_by'];
	$rating = $_POST['rating'];
	$registration_title = $_POST['registration_title'];
	$owner_id = $_POST['owner_id'];
	$owner_rating = $_POST['owner_rating'];
	$agent_rating = $_POST['agent_rating'];
	$order_code = $_POST['order_code'];
	$type_order = $_POST['type_order'];
	$exclusive = $_POST['exclusive'];
	$order_start = $_POST['order_start'];
	$order_stop = $_POST['order_stop'];
	$category = $_POST['category'];
	$notes= $_POST['notes'];
	$notify_colleague= $_POST['notify_colleague'];
	$username= $_POST['username'];
	$realestate_status = $_POST['realestate_status'];
	$agent_reward_percentage= $_POST['agent_reward_percentage'];
	$agent_reward= $_POST['agent_reward'];
	$view_address= $_POST['view_address'];
	$transfer_cost= $_POST['transfer_cost'];
	$transfer_vat= $_POST['transfer_vat'];
	$consideration_exchange= $_POST['consideration_exchange'];


	$sql = "UPDATE RealEstate SET AStreetNo='$astreet_no', AStreet='$astreet', Acity='$acity', AreaTM='$area_tm', ACountry='$acountry', APostalCode='$apostal_code', ARegionCode='$aregion_code',RegistrationTitleNo='$registration_title_no', PieceNo='$piece_no', FolderNo='$folder_no', ArithmosFilSxed='$blueprint_no', ArithmosAdOik='$arithmos_ad_oik', LegalControl='$legal_control', InitialPrice='$initial_price', EstimatedPrice='$estimated_price', MortgageLoan='$mortage_loan', ObjectiveValue='$objective_value', FinalPrice='$final_price',Corner='$corner',Zone='$zone', AvailableFrom='$available_from', DateRegistered='$date_added', RegistrationPurpose='$registration_purpose', Price='$price', Currency='$currency', PricePerTM='$price_per_tm', TM='$tm', VAT='$vat', ShortDescription='$short_desc', Description='$desc', AboutRenting='$about_renting', RecommendedBy='$recommended_by', Rating='$rating', RegistrationTitle='$registration_title', OwnerID='$owner_id', OwnerRating='$owner_rating', AgentRating='$agent_rating', OrderCode='$order_code', TypeOrder='$type_order', Exclusive='$exclusive', OrderStart='$order_start', OrderStop='$order_stop', Category='$category', Notes='$notes', NotifyColleague='$notify_colleague', AgentUsername='$username', RealEstateStatus='$realestate_status', AgentRewardPercentage='$agent_reward_percentage', AgentReward='$agent_reward', ViewAddress='$view_address', TransferCost='$transfer_cost', TransferVAT='$transfer_vat', ConsiderationExchange='$consideration_exchange'";

	$result = mysqli_query($conn,$sql)
	or die("Error: !".mysqli_error($conn));
	$_SESSION['updatedProperty'] = "You've successfully updated the property!";
	$sql2 = "SELECT UserType FROM UserSimple WHERE Username=$username";
	$result2 = mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_assoc($result2);
	if ($row2['UserType']=="Admin") {
		mysqli_close($conn);
		header("Location: admin.php");
	} else {
		mysqli_close($conn);
		header("Location: broker_manage.php");
	}
}
?>



