<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(! get_magic_quotes_gpc() )
{

    $realestate_no = addslashes($_POST['realestate_no']);
    $astreet_no = addslashes($_POST['astreet_no']);
    $astreet = addslashes($_POST['astreet']);
    $acity = addslashes($_POST['acity']); 
    $area = addslashes($_POST['area']);
    $acountry = addslashes($_POST['acountry']);
    $apostal_code = addslashes($_POST['apostal_code']);
    $registration_title_no = addslashes($_POST['registration_title_no']);
    $piece_no = addslashes($_POST['piece_no']);
    $folder_no = addslashes($_POST['folder_no']);
    $arithmos_fil_sxed = addslashes($_POST['arithmos_fil_sxed']);
    $arithmos_ad_oik = addslashes($_POST['arithmos_ad_oik']);
    $legal_control = addslashes($_POST['legal_control']);
    $initial_price = addslashes($_POST['initial_price']);
    $estimated_price = addslashes($_POST['estimated_price']);
    $mortgage_loan = addslashes($_POST['mortgage_loan']);
    $objective_value = addslashes($_POST['objective_value']);
    $final_price = addslashes($_POST['final_price']);
    $aview = addslashes($_POST['aview']);
    $corner = addslashes($_POST['corner']);
    $subarea = addslashes($_POST['subarea']);
    $zone = addslashes($_POST['zone']);
    $availability_from = addslashes($_POST['availability_from']);
    $status = addslashes($_POST['status']);
    $date_added = addslashes($_POST['date_added']);
    $registration_purpose = addslashes($_POST['registration_purpose']);
    $price = addslashes($_POST['price']);
    $currency = addslashes($_POST['currency']);
    $price_per_tm = addslashes($_POST['price_per_tm']);
    $tm = addslashes($_POST['tm']);
    $vat = addslashes($_POST['vat']);
    $short_desc = addslashes($_POST['short_desc']);
    $desc = addslashes($_POST['desc']);
    $for_rent = addslashes($_POST['for_rent']);
    $view = addslashes($_POST['view']);
    $contacted_via = addslashes($_POST['contacted_via']);
    $rating = addslashes($_POST['rating']);
    $registration_title = addslashes($_POST['registration_title']);
    $owner_id = addslashes($_POST['owner_id']);
    $owner_rating = addslashes($_POST['owner_rating']);
    $agent_rating = addslashes($_POST['agent_rating']);
    $order_code = addslashes($_POST['order_code']);
    $type_order = addslashes($_POST['type_order']);
    $exclusive = addslashes($_POST['exclusive ']);
    $no_agent_reward = addslashes($_POST['no_agent_reward']);
    $order_start = addslashes($_POST['order_start']);
    $order_stop = addslashes($_POST['order_stop']);
    $aarea = addslashes($_POST['aarea']);
    $category = addslashes($_POST['category']);
    $notes= addslashes($_POST['notes']);
    $notify_colleauge= addslashes($_POST['notify_colleauge']);
    $agent_id= addslashes($_POST['agent_id']);
    $realestate_status = addslashes($_POST['realestate_status ']);
    $agent_reward_percentage= addslashes($_POST['agent_reward_percentage']);
    $agent_reward= addslashes($_POST['agent_reward']);
    $view_address= addslashes($_POST['view_address']);
    $estate_no= addslashes($_POST['estate_no']);
    $transfer_cost= addslashes($_POST['transfer_cost']);
    $transfer_vat= addslashes($_POST['transfer_vat']);
    $consideration_exchange= addslashes($_POST['consideration_exchange']);
}
else
{
    $realestate_no = $_POST['realestate_no'];
    $astreet_no = $_POST['astreet_no'];
    $astreet = $_POST['astreet'];
    $acity = $_POST['acity']; 
    $area = $_POST['area'];
    $acountry = $_POST['acountry'];
    $apostal_code = $_POST['apostal_code'];
    $registration_title_no = $_POST['registration_title_no'];
    $piece_no = $_POST['piece_no'];
    $folder_no = $_POST['folder_no'];
    $arithmos_fil_sxed = $_POST['arithmos_fil_sxed'];
    $arithmos_ad_oik = $_POST['arithmos_ad_oik'];
    $legal_control = $_POST['legal_control'];
    $initial_price = $_POST['initial_price'];
    $estimated_price = $_POST['estimated_price'];
    $mortgage_loan = $_POST['mortgage_loan'];
    $objective_value = $_POST['objective_value'];
    $final_price = $_POST['final_price'];
    $aview = $_POST['aview'];
    $corner = $_POST['corner'];
    $subarea = $_POST['subarea'];
    $zone = $_POST['zone'];
    $availability_from = $_POST['availability_from'];
    $status = $_POST['status'];
    $date_added = $_POST['date_added'];
    $registration_purpose = $_POST['registration_purpose'];
    $price = $_POST['price'];
    $currency = $_POST['currency'];
    $price_per_tm = $_POST['price_per_tm'];
    $tm = $_POST['tm'];
    $vat = $_POST['vat'];
    $short_desc = $_POST['short_desc'];
    $desc = $_POST['desc'];
    $for_rent = $_POST['for_rent'];
    $view = $_POST['view'];
    $contacted_via = $_POST['contacted_via'];
    $rating = $_POST['rating'];
    $registration_title = $_POST['registration_title'];
    $owner_id = $_POST['owner_id'];
    $owner_rating = $_POST['owner_rating'];
    $agent_rating = $_POST['agent_rating'];
    $order_code = $_POST['order_code'];
    $type_order = $_POST['type_order'];
    $exclusive = $_POST['exclusive '];
    $no_agent_reward = $_POST['no_agent_reward'];
    $order_start = $_POST['order_start'];
    $order_stop = $_POST['order_stop'];
    $aarea = $_POST['aarea'];
    $category = $_POST['category'];
    $notes= $_POST['notes'];
    $notify_colleauge= $_POST['notify_colleauge'];
    $agent_id= $_POST['agent_id'];
    $realestate_status = $_POST['realestate_status '];
    $agent_reward_percentage= $_POST['agent_reward_percentage'];
    $agent_reward= $_POST['agent_reward'];
    $view_address= $_POST['view_address'];
    $estate_no= $_POST['estate_no'];
    $transfer_cost= $_POST['transfer_cost'];
    $transfer_vat= $_POST['transfer_vat'];
    $consideration_exchange= $_POST['consideration_exchange'];
}

$sql = "INSERT INTO REALESTATE (RealEstateNo, AStreetNo, AStreet, Acity, Area, Country, APostalCode, RegistrationTitleNo, PieceNo, FolderNo, ArithmosFilSxed, ArithmosAdOik, LegalControl,
InitialPrice, EstimatedPrice, MortgageLoan, ObjectiveValue, FinalPrice, AView, Corner, SubArea, AvailabilityFrom, Status, DateAdded, RegistrationPurpose, Price, Currency, PricePerTM, TM, VAT,
ShortDescription, Description, ForRent, View, ContactedVia, Rating, RegistartionTitle, OwnerID, OwnerRating, AgentRating, OrderCode, TypeCode, Exclusive, NoAgentReward, OrderStart,
OrderStop, AArea, Category, Notes, NotifyColleague, AgentID, RealEstateStatus, AgentRewardPercentage, AgentReward, ViewAddress, EstateNo,TransferCost, TransferVAT, ConsiderationExchange)
VALUES ('$realestate_no', '$astreet_no', '$astreet', '$acity', '$area', '$acountry', '$apostal_code', '$registration_title_no', '$piece_no', '$folder_no', '$arithmos_fil_sxed', '$arithmos_ad_oik', '$legal_control', '$initial_price', '$estimated_price', '$mortgage_loan', '$objective_value', '$final_price', '$aview', '$corner', '$subarea, $zone', '$availability_from', '$status','$date_added', 
'$registration_purpose', '$price', '$currency', '$price_per_tm', '$tm', '$vat', '$short_desc', '$desc', '$for_rent', '$view', '$contacted_via', '$rating', '$registration_title', '$owner_id', 
'$owner_rating', '$agent_rating', '$order_code', '$type_order', '$exclusive', '$no_agent_reward', '$order_start', '$order_stop', '$aarea', '$category', '$notes', '$notify_colleauge', '$agent_id', '$realestate_status', '$agent_reward_percentage', '$agent_reward', '$view_address', '$estate_no', '$transfer_cost', '$transfer_vat', '$consideration_exchange')";


mysql_select_db('CityRealty');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}else{
echo "Entered data successfully\n";
}

header("Location: AddProperty.php");

mysqli_close($conn);
?>



