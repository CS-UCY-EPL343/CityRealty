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
    $name = addslashes($_POST['name']);
    $surname = addslashes($_POST['surname']);
    $gender = addslashes($_POST['gender']);
    $profession = addslashes($_POST['profession']);
    $birthday = addslashes($_POST['birthday']);
    $street = addslashes($_POST['street']);
    $street_no = addslashes($_POST['street_no']);
    $city = addslashes($_POST['city']);
    $country = addslashes($_POST['country']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    
    $sql =  "INSERT INTO User (USERNAME,ID,COMPANY,BIRTHDAY,GENDER)
    VALUES ($display_name, $name,$surname,$profession,$birthday,$gender)";
}
mysql_select_db('CityRealty');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}else{
echo "Entered data successfully\n";
}
header("Location: AddNewBroker.php");
mysqli_close($conn);
?>
