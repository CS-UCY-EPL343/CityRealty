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
    $arithmos_fil_sxed = addslashes($_POST['arithmos_fil_sxed ']);
    $arithmos_ad_oik = addslashes($_POST['arithmos_ad_oik']);
    $legal_control = addslashes($_POST['legal_control']);
    $initial_price = addslashes($_POST['initial_price ']);
    $estimated_price = addslashes($_POST['estimated_price']);
    $mortgage_loan = addslashes($_POST['mortgage_loan']);
    $objective_value = addslashes($_POST['objective_value']);
    $final_price = addslashes($_POST['final_price']);
    $aview = addslashes($_POST['aview']);
    $corner = addslashes($_POST['corner']);
    $subarea = addslashes($_POST['subarea']);
    $zone = addslashes($_POST['zone']);
    $availability_from = addslashes($_POST['availability_from ']);
    $date_added = addslashes($_POST['date_added']);
    $registration_purpose = addslashes($_POST['aview']);
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
    $arithmos_fil_sxed = addslashes($_POST['arithmos_fil_sxed ']);
    $arithmos_ad_oik = addslashes($_POST['arithmos_ad_oik']);
    $legal_control = addslashes($_POST['legal_control']);
    $initial_price = addslashes($_POST['initial_price ']);
    $estimated_price = addslashes($_POST['estimated_price']);
    $mortgage_loan = addslashes($_POST['mortgage_loan']);
    $objective_value = addslashes($_POST['objective_value']);
    $final_price = addslashes($_POST['final_price']);
    $aview = addslashes($_POST['aview']);
    $corner = addslashes($_POST['corner']);
    $subarea = addslashes($_POST['subarea']);
    $zone = addslashes($_POST['zone']);
    $availability_from = addslashes($_POST['availability_from ']);
    $date_added = addslashes($_POST['date_added']);
    $registration_purpose = addslashes($_POST['aview']);
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

$sql = "INSERT INTO  ".
       "(USERNAME,ID,COMPANY,BIRTHDAY,GENDER) ".
       "VALUES ".
  "($display_name, $name,$surname,$profession,$birthday,$gender)";
  
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



