<?php
 require 'global_vars.php';
$con = connect_to_db();
 #if((isset($_COOKIE["username"])) && ($_COOKIE["username"]!='0'))
  #{header("location:home.php");}

$ver = mysqli_query($con,"INSERT INTO hos_signup(username, password, email_id) VALUES ('a','b','c')" );

?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="index_style1.css">

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		<form action="checklogin1.php" method="POST">
			<div class="sign-in-htm">
				<div class="group">
					<label for="username" class="label"><br><br>Username</label>
					<input name="username" type="text" class="input" required = "required">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input name="password" type="password" class="input" data-type="password" required = "required">
				</div>	
                <div class="group">
					<label for="category" class="label">Category</label>
					<select name="category[]" required = "required">
					 <option value="hospital" name="hospital" class ="input" >Hospital</option>
                     <option value="individual" name = "individual" class ="input">Individual</option>
                    </select>
				</div>							
				<br>
				<?php
				if (isset($_COOKIE["signup"])) 
				{
					if($_COOKIE["signup"]=="1")
					echo "<h3>Successful. You can login now</h3>";
					setcookie("signup", "0", time()-120);
				}
				elseif(isset($_COOKIE["error"]))
				{
					if($_COOKIE["error"]=="1")
					{
						echo "<h3 COLOR = #FFFFFF>Invalid Username or Password</h3>";
					}
					elseif($_COOKIE["error"]=="2")
					{
						echo "<h3>Username Already Exists</h3>";
					}
					elseif($_COOKIE["error"]=="3")
					{
						echo "<h3>Passwords donot match</h3>";
					}
					elseif($_COOKIE["error"]=="4")
					{
						echo "<h3>Please enter valid details</h3>";
					}
					setcookie("error", "0", time()-120);
				}
				// elseif (isset($_COOKIE["signup"])) 
				// {
				// 	if($_COOKIE["signup"]=="1")
				// 	{echo "<h3>Successful. You can login now</h3>";}
				// 	setcookie("signup", "0", time()-120);
				// }
				elseif (isset($_COOKIE["delete"])) 
				{
					if($_COOKIE["delete"]=="1")
					{echo "<h3>Account deleted</h3>";}
					setcookie("delete", "0", time()-120);
				}

				?>
				<div class="group">
				<input type="submit" name="signin" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
		</form>
			</div>
			<div class="sign-up-htm">
			<form action="createlogin1.php" method="POST">
				<div class="group">
					<label for="user" class="label" COLOR = #FFFFFF><br>Username</label>
					<input name="user" type="text" class="input" placeholder="abc@xxx" required = "required">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input"  data-type="password" placeholder="Must be atleast 8 characters" required = "required">
				</div>
				<div class="group">
					<label for="pass1" class="label">Repeat Password</label>
					<input name="pass1" type="password"  class="input" data-type="password" required = "required">
				</div>
				<div class="group">
					<label for="emailid" class="label">emailId</label>
					<input name="emailid" type="text" class="input" placeholder="Email ID" required = "required">
				</div>
				<div class="group">
					<label for="category" class="label">Category</label>
					<select name ="category" required = "required">
					 <option value="hospital" class ="input" name = "hospital">Hospital</option>
                     <option value="individual" class ="input" name ="individual">Individual</option>
                    </select>
				</div>	
				
				<div class="group">
					<input type="submit" name="signup" class="button" value="Sign Up">
				</div>
			</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
