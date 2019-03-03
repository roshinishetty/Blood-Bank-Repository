<?php
require 'global_vars.php';
$con = connect_to_db();

if(!isset($_COOKIE["username"]) || ($_COOKIE["username"]=='0'))
   {header("location:index.php");}
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Home</title>
      <link rel="stylesheet" href="home_css/home_components.css">
      <link rel="stylesheet" href="home_css/home_responsee.css">
      <link rel="stylesheet" href="home_css/home_template-style.css">
      <link rel="stylesheet" href="home_css/home_table.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   </head>

   <body >
      <header>
         <nav>
            <div class="line">
               <div class="s-14 l-2">
                  <p class="logo"><strong>Home</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li><a href="hospital-registered.php">Account</a></li>
                     <li><a href="hospital-registered.php">Add blood units</a></li>
                     <li><a href="hospital-registered.php">delete blood units</a></li>
					      <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
	  <div class="start">

<table class="container">
   <thead>
      <tr>
         <th><h1>Blood group</h1></th>
         <th><h1>Available units</h1></th>
         <th><h1>Expiry Date</h1></th>
      </tr>
   </thead>
   <!-- <tbody>
      <?php
         #   $query = "select event.event_name as ename, event.event_description as des, event_cat.category_nam as cname, event.event_date as date, event.event_time as time, user.user_contact as contact from event inner join event_cat on event.event_id = event_cat.event_id inner join user on event.event_by = user.user_name";
     # $result = mysqli_query($con, $query);
     # while($row = mysqli_fetch_assoc($result))
      #{
       #  echo "<tr>";
        # echo "<td>".$row['ename']."</td>";
        # echo "<td>".$row['des']."</td>";
  
     # }
     # ?>
   </tbody> -->
</table>
	   
	  </div>
   </body>
</html>