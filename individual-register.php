<!DOCTYPE html>

<html>

    <head>
        <title>Individual Registration</title>
        <link rel="stylesheet" type="text/css" href="hospital-register_css.css">  
		<link rel="stylesheet" href="home_css/home_components.css">
      <link rel="stylesheet" href="home_css/home_responsee.css">
      <link rel="stylesheet" href="home_css/home_template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>


    <body>
    	 <header>
         <nav>
            <div class="line">
               <div class="s-14 l-2">
                  <p class="logo"><strong>Home</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     
					      <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
	  <br/><br/><br/><br/>
    	  <h1 class="registration">INDIVIDUAL REGISTRATION</h1>
    	<div class="container">
  			<form action="insert_individual_register.php" method = "POST">
  													<h2>INFORMATION</h2>
  			<div class="row">
      			<div class="col-25">
      		    <label for="iname">Name of Individual*</label>
     		    </div>
      			<div class="col-75">
        		<input required type="text" id="iname" name="individualname" placeholder="name of individual...">
      			</div>
    		</div>

    		<div class="row">
      			<div class="col-25">
      		    <label for="PhoneNumber">Phone Number*</label>
     		    </div>
      			<div class="col-75">
        	    <input type="%Text" id="" name="Phonenumber" placeholder="Phone
				Number">
      			</div>
    		</div>

    		
			<div class="row">
      			<div class="col-25">
      		    <label for="Bloodgroup">Blood group*</label>
     		    </div>
      			<div class="col-75">
        	    <input type="%Text" id="" name="Bloodgroup" placeholder="Bloodgroup">
      			</div>
    		</div>
			<div class="row">
      			<div class="col-25">
      		    <label for="email">Email ID</label>
     		    </div>
      			<div class="col-75">
        		<input type="email" id="email" name="email" >
      			</div>
    		</div>
			<div class="row">
      			<div class="col-25">
      		    <label for="sex">SEX</label>
     		    </div>
      			<div class="col-75">
        	    <input type="radio" name="gender" value="female"> Female<br>
  				<input type="radio" name="gender" value="no"> Male<br>
				<input type="radio" name="gender" value="no"> Others<br>

      			</div>
    		</div>
			

    		
			
    												<h2>ENTER ADDRESS</h2>

    		<div class="row">
      			<div class="col-25">
          		<label for="subject">Address*</label>
     		 	</div>
     		    <div class="col-75">
        		<textarea id="address" name="address"  style="height:100px"></textarea>
      			</div>
   			 </div>

   			 <div class="row">
      			<div class="col-25">
      		    <label for="PINcode">PIN Code*</label>
     		    </div>
      			<div class="col-75">
        	    <input type="%Text" id="" name="PINcode">
      			</div>
    		</div>
    											   <h2>ENTER HEALTH ISSUES</h2>

			
			<div class="row">
      			<div class="col-25">
          		<label for="subject">Health Issues</label>
     		 	</div>
     		    <div class="col-75">
        		<textarea id="healthissues" name="healthissues"  style="height:100px"></textarea>
      			</div>
   			 </div>

    		<div class="row">
      			<div class="col-25">
      		    <label for="Donor">Want to become a donor*</label>
     		    </div>
      			<div class="col-75">
        	    <input type="radio" name="Choice" value="yes"> Yes<br>
  				<input type="radio" name="Choice" value="no"> No<br>
      			</div>
    		</div>
	


			
			

    		<div class="row">
      			<a href="user-registered.html"><input type="submit" value="Submit" name ="submit" class="button"></a>
   		    </div>





    		
    		













  			 </form>
        </div>	

    </body>


 </html>   