<?php
require 'global_vars.php';
$con = connect_to_db();

#if(!isset($_COOKIE["username"]) || ($_COOKIE["username"]=='0'))
 #  {header("location:index.php");}
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Home</title>
	  <link rel="stylesheet" type="text/css" href="hospital-register_css.css"> 
      <link rel="stylesheet" href="home_css/home_components.css">
      <link rel="stylesheet" href="home_css/home_responsee.css">
      <link rel="stylesheet" href="home_css/home_template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   </head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Sans-serif;}

.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #ccc;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px 105px;
  transition: 0.3s;
  font-size: 17px;
  font-color: white;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
   font-color: #000;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.box1{
	width:45%;
	margin-left:auto;
    margin-right:auto;
	padding: 10px 10px;
	text-align:center;
	border-radius: 85px;
	background-color: #bbb;
}
.box2{
	width:53%;
	margin-left:auto;
    margin-right:auto;
	padding: 10px 10px;
	text-align:center;
	border-radius: 85px;
	background-color: #bbb;
}
.box{
	width:30%;
	margin-left:auto;
    margin-right:auto;
	padding: 10px 10px;
	text-align:center;
	border-radius: 85px;
	background-color: #bbb;
	
}
.matter1{
	padding-top:20px;
	font-size:17px;
}
.matter{
	padding-top:20px;
	font-size:20px;
	margin-left:auto;
	margin-right:auto;
	width:75%
	text-align: center;
	padding-left:250px;
	padding-right:250px;
}
.col-251{
  float: left;
  width: 25%;
  margin-top: 6px;
  font-size:20px;
  padding-left:150px;
}
.bloodcamp{
	font-size:20px;
	font-family:Sans-serif;
	font-color: #fff;
}
.sno{
	width:5%;
}
.others{
	width:15%
}
.others1{
	width:25%;
}
.accordion .ac-title {
    background: #8064A2;
    color: #fff;
    font-size: 15px;
    }
   
.accordion .ac-content {
    background: #EAF1DD;
    }
</style>
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
                     <li><a href="index1.php">Register</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
	  <div class="start">
        <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
        <button class="tablinks" onclick="openCity(event, 'Blood Banks')">Blood Banks</button>
        <button class="tablinks" onclick="openCity(event, 'Blood Donation camps')">Blood Donation camps</button>
		<button class="tablinks" onclick="openCity(event, 'FAQ')"> FAQ </button>
		<button class="tablinks" onclick="openCity(event, 'Contact Us')">Contact Us</button>
        </div>

        <div id="Home" class="tabcontent">
        <h3>Home</h3>
        <p>Need to think of it!</p>
        </div>
  
        <div id="Blood Banks" class="tabcontent">
        <br/>
		  <div class="box">
		  <h3>Blood Banks</h3> 
		  </div>
		  <div class="matter1"> Click on the categories to know about the available and preferrable blood banks</div>
		  <div class="row">
      			<div class="col-251">
      		    <label for="area">Area:</label>
     		    </div>
      			<div class="col-75">
        		<input class="area" type="text" placeholder="Search for blood banks in your area.." id="area" onkeyup="myFunction()">
      			</div>
    	  </div>
		  <table class="container">
   <thead class="bloodcamp">
      <tr>
         <th class="sno">S.No.</th>
         <th class="others">District</th>
         <th class="others">Blood Bank</th>
		 <th class="others1">Institution Name</th>
		 <th class="others">Phone number</th>
		 <th class="others1">Email</th>
      </tr>
   </thead>
   <tbody>

   </tbody>
</table>
        </div>
  
        <div id="Blood Donation camps" class="tabcontent">
         <br/>
		 <div class="box1">
		 <h3>Blood Donation Camps</h3>
         </div>
		  <div class="matter">
		 The Blood You Donate Gives Someone Another Chance At Life. One Day That Someone May Be A Close Relative, A Friend, A Loved One—Or Even You.
		 Your blood circulates forever if you keep donating it! Want to be a donor, here are the list of blood donation camps conducted in few cities by various hospitals. 
		 </div>
		 <div class="matter">
		 Do donate, Do make a change!
		 </div>
		 </div>
	     <div id="FAQ" class="tabcontent">
            <br/>
		    <div class="box2">
		    <h3>Frequently Asked questions</h3>
            </div>
		</div>
                         
	    <div id="Contact Us" class="tabcontent">
        <h3>Contact Us</h3>
        <p>Blood Donation camps is the capital of Japan.</p>
       </div>
      </div>
	  <script>
 function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script> 
   </body>
</html>