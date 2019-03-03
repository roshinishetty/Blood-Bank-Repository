<?php
require 'global_vars.php';
$con = connect_to_db();
if(!$con)
{
	die('Couldn't connect: ' . mysql_error());
}

mysql_select_db("database_name", $con);

session_start();
$username = $_SESSION["username"];

$days = "";
if(isset($_POST["submit"])) {
if(!empty($_POST['day'])) {
	$counter = 0;
	foreach($_POST['day'] as $check) {
		$days .= $check;
		$counter++;
	}
} 
}

if(isset($_POST["submit"])) {
$time = "";
if(!empty($_POST['time'])) {
	$counter = 0;
	foreach($_POST['time'] as $check) {
		$time .= $check;
		$counter++;
	}
} 
}

$sql="INSERT INTO donor_info (username,height, weight, days, time) VALUES ($username,'$_POST[height]','$_POST[weight]', $days,$time,'$_POST[area]')";
if (!mysql_query($sql,$con))
{
  die('Error: ' . mysql_error());
}
echo "1 record added";
mysql_close($con)
?>
