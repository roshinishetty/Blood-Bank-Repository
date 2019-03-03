<?php
require 'global_vars.php';
$con = connect_to_db();

$username = $_POST['user'];
$password = $_POST['pass'];
$password2 = $_POST['pass1'];
$email_id = $_POST['emailid'];
$category = $_POST['category'];

if($password == NULL || $email_id==NULL || $username == NULL)
{
	setcookie("error","4");
	header("location: index1.php");	
}
if($category == "hospital"){
	echo $category;
	$result = mysqli_query($con,"SELECT username FROM hos_signup WHERE username = '$username'");
	$count = mysqli_num_rows($result);
	if($count != 0)
	{	
		setcookie("error","2");
		header("location: index1.php");
	}
	else
	{		if($password == $password2)
		{$ver = mysqli_query($con,"INSERT INTO hos_signup(username, password, email_id) VALUES('$username','$password','$email_id')");
		 setcookie("signup","1");
		 session_start();
		 $_SESSION["username"] = $username;
		setcookie("username",'$username',time() + (86400 * 30));
		 header("location: hospital-registration.php");
         }
		else
		{setcookie("error","3");
		 header("location: index1.php");
		}
	}
} 
else 
{
	$result = mysqli_query($con,"SELECT username FROM ind_user WHERE username = '$username'");
	$count = mysqli_num_rows($result);
	if($count != 0)
	{	
		setcookie("error","2");
		header("location: index1.php");
	}
	else
	{		if($password == $password2)
		{$ver = mysqli_query($con,"Insert into ind_user Values('$username','$password','$email_id')");
		 setcookie("signup","1");
		 header("location: individual-registration.php");	 
		}
		else
		{setcookie("error","3");
		 header("location: index1.php");
		}
	}
}


?>