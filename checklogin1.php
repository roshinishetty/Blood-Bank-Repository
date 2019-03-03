<?php
require 'global_vars.php';
$con = connect_to_db(); 

$username = $_POST['username'];
$password = $_POST['password'];
$category=  $_POST['category'];
echo"<h1>categ ok</h1>";
$hospital = "hospital";
if(implode($category)==$hospital){
	
	$result = mysqli_query($con,"SELECT * FROM hos_signup WHERE username = '$username' AND password = '$password'");
	$count = mysqli_num_rows($result);
	if($count == 1 ){   
		$row = mysqli_fetch_array($result);
		session_start();
		$_SESSION["username"] = $username;
		setcookie("username",'$username',time() + (86400 * 30));	
		header("location:hospital-registered.php");
	}
	else{
		echo"<h1> hosp taken</h1>";
		setcookie("error","1");
		header("location: index1.php");
	}
}
else{ 
	$result=mysqli_query($con,"SELECT * FROM ind_user WHERE username='$username' AND password='$password' ");
	$count=mysqli_num_rows($result);
	if($count==1){
		$row = mysqli_fetch_array($result);
		session_start();
		$_SESSION["username"] = $username;
		setcookie("username",'$username',time() + (86400 * 30));	
		header("location:user-registered.html");
	}else{
		setcookie("error","1");
		header("location: index1.php");
	}
	
} 
	
?>