<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php
include("helper.php");
$fid=$_REQUEST['id'];
$result=$helper->read_record("*","user_details","user_detail_id='$fid'");

$uid=$result[0]['user_detail_id'];
$name=$result[0]['user_name'];
$mobile=$result[0]['mobile'];
$address=$result[0]['address'];
$city=$result[0]['city'];
$zip=$result[0]['zip'];

echo "<fieldset>";
echo "<legend> User Details </legend>";
echo "<b>User Name : </b>".$name."</br>";
echo "<b>User ID : </b>".$uid."</br>";
echo "<b>Mobile no : </b>".$mobile."</br>";
echo "<b>Address : </b>".$address."</br>";
echo "<b>City : </b>".$city."</br>";
echo "<b>Zip : </b>".$zip."</br>";
echo "</fieldset>";
?>
</body>
</html>
