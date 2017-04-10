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
        $lat = $_POST['lat'];
	$long = $_POST['long'];
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


	$sql = "INSERT INTO RealEstate (AStreetNo, AStreet, Acity, AreaTM, ACountry, APostalCode,ALatitude, ALongitude, ARegionCode,RegistrationTitleNo, PieceNo, FolderNo, ArithmosFilSxed, ArithmosAdOik, LegalControl,
	InitialPrice, EstimatedPrice, MortgageLoan, ObjectiveValue, FinalPrice,Corner,Zone, AvailableFrom, DateRegistered, RegistrationPurpose, Price, Currency, PricePerTM, TM, VAT,
	ShortDescription, Description, AboutRenting, RecommendedBy, Rating, RegistrationTitle, OwnerID, OwnerRating, AgentRating, OrderCode, TypeOrder, Exclusive, OrderStart,
	OrderStop, Category, Notes, NotifyColleague, AgentUsername, RealEstateStatus, AgentRewardPercentage, AgentReward, ViewAddress,TransferCost, TransferVAT, ConsiderationExchange)
	VALUES ('$astreet_no', '$astreet', '$acity', '$area_tm', '$acountry', '$apostal_code', '$lat', '$long', '$aregion_code','$registration_title_no', '$piece_no', '$folder_no', '$blueprint_no', '$arithmos_ad_oik', '$legal_control', '$initial_price', '$estimated_price', '$mortage_loan', '$objective_value', '$final_price','$corner', '$zone', '$available_from','$date_added', 
	'$registration_purpose', '$price', '$currency', '$price_per_tm', '$tm', '$vat', '$short_desc', '$desc', '$about_renting', '$recommended_by', '$rating', '$registration_title', '$owner_id', 
	'$owner_rating', '$agent_rating', '$order_code', '$type_order', '$exclusive','$order_start', '$order_stop','$category', '$notes', '$notify_colleague', '$username', '$realestate_status', '$agent_reward_percentage', '$agent_reward', '$view_address','$transfer_cost', '$transfer_vat', '$consideration_exchange')";

	$result = mysqli_query($conn,$sql)
	or die("Error: !".mysqli_error($conn));
	$_SESSION['addedProperty'] = "You've successfully added the property!";
	mysqli_close($conn);
	header("Location: broker_manage.php");
}
?>



