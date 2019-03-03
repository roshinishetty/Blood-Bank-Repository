

<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Home</title>
      <link rel="stylesheet" href="home_css/home_components.css">
      <link rel="stylesheet" href="home_css/home_responsee.css">
      <link rel="stylesheet" href="home_css/home_template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   </head>

   <body >
   <?php
require 'global_vars.php';
$con = connect_to_db();

#if(!isset($_COOKIE["username"]) || ($_COOKIE["username"]=='0'))
 #  {header("location:index.php");}
?>
      <header>
         <nav>
            <div class="line">
               <div class="s-14 l-2">
                  <p class="logo"><strong>Home</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li><a href="individual-register.php">Account</a></li>
					      <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
	  <div class="start">
        <div class = "termline" > <h2>Welcome to A-Z Blood bank. Thanks for signing up </h2></div>
        <div class = "termline1" ><h6><strong>Need help?</strong> Go to Account settings and enter your details!</h6> </div>
	   
	  </div>
   </body>
</html>