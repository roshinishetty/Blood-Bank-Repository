<?php
require 'global_vars.php';
$con = connect_to_db();


if (isset($_POST['submit']))
{
session_start();
$username = $_SESSION["username"];
$Bloodgroup = $_POST["bloodgroup"];
$address = $_POST["address"];
$urgency = $_POST["urg"];

$ver = mysqli_query($con,"INSERT INTO needBlood
	(username, bloodgroup, address, urgency)
VALUES 
('$username', '$Bloodgroup', '$address', '$urgency')");
header("location: user-registered.html");
}

?>