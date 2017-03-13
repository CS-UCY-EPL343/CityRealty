<?php
session_start();

$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(! get_magic_quotes_gpc() )
{

    $display_name = addslashes($_POST['display_name']);
    $password = addslashes($_POST['password']);
    $type = addslashes($_POST['type']);
    $state = addslashes($_POST['state']); 
    $location = addslashes($_POST['location']);
    $area = addslashes($_POST['area']);
    $price = addslashes($_POST['price']);
    $owners_name = addslashes($_POST['owners_name']);
    $built_date = addslashes($_POST['built_date']);
    $renovated_date = addslashes($_POST['renovated_date']);
    $notes = addslashes($_POST['notes']);
}

$sql = "INSERT INTO REALESTATE ".
       "(CORNER,ZONE,ACITY,AAREA,FINALPRICE,RENOVATEDDATE,BUILTDATE) ".
       "VALUES ".
       "($type,$state,$location,$area,$price,$owners_name,$built_date,$renovated_date,$notes)";

mysql_select_db('CityRealty');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}else{
echo "Entered data successfully\n";
}

header("Location: broker_create.php");

mysqli_close($conn);
?>

