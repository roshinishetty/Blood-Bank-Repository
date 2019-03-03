<?php
 require 'global_vars.php';
$con = connect_to_db();


if (isset($_POST['submit']))
{
session_start();
$username = $_SESSION['username'];
$individualname = $_POST['individualname'];
$Phonenumber = $_POST['Phonenumber'];
$Bloodgroup = $_POST['Bloodgroup'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$PINcode = $_POST["PINcode"];
$healthissues = $_POST['healthissues'];
$WillingToBeDonor = $_POST['Choice'];

$ver = mysqli_query($con,"INSERT INTO individual_register1 
VALUES
('$username', '$individualname', '$Phonenumber', '$Bloodgroup', '$email', '$gender', '$address', '$PINcode', '$healthissues', '$WillingToBeDonor')");
if ($WillingToBeDonor == "yes") {
header ("location: donor-form.html");
} else
header("location: user-registered.html");

} 
?>