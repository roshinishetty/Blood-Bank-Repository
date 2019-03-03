<?php
 require 'global_vars.php';
$con = connect_to_db();


if (isset($_POST['submit']))
{
session_start();
$username= $_SESSION['username'];
$hospitalname = $_POST['hospitalname'];
$instituteType = $_POST['instituteType'];
$HospitalRegistrationNumber = $_POST['HospitalRegistrationNumber'];
$District = $_POST['District'];
$City = $_POST['City'];
$State = $_POST['State'];
$PINcode = $_POST['PINcode'];
$Telephone = $_POST['Telephone'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$year = $_POST['year'];

$ver = mysqli_query($con,"INSERT INTO hospital_register1 
VALUES
('$username', '$hospitalname', '$instituteType', '$HospitalRegistrationNumber', '$District', '$City', '$State', '$PINcode', '$Telephone', '$mobilenumber', '$email', '$year')");
header("location: hospital-registered.php");
}
 
?>
	