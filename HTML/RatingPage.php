<?php 
 require 'Config.php';
?>

<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/Rating.css">
<script src="../js/rating.js"> </script>
 <meta charset="UTF-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<script src="js/rating.js"></script>

<title>Rating Page</title>
</head>

<body onload = "hide()">
<fieldset style = "height: 30px; width:98%; background-color: white; border-color: white; margin-left: 10px; margin-top:10px">
	<div class="dropdown" style = "margin-top: -1px; float:right; margin-right: -2px">
	
    <button class="dropbtn" style = "width:166px">User ID-888Ba <i class="arrow down"></i>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="purchase history page.php">Purchase History</a>
      <a href = "login page.php">Log Out</a>
    </div>
  </div> 
</div>
		<a href = "My Shopping Cart.php">
		<img src = "../images/shopping cart.png" style="float:right; margin-right: 5px; margin-top: -1px" width = "40px" height = "29px">
		</a>
	</fieldset>
<br>

<img src="../images/logo.png" alt="logo" style="float:left" width = "210px" height = "170px">
		<center><ul class="Home">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="AboutUs.php"> About </a></li>
		<li class="Home"><a href="MenuPage.php">Menu</a></li>
		<li class="Home"><a href="User Account Page.php">Account Details</a> </li>
		<li class="Home"><a href="ContactUs.php">Contact Us</a></li>
	</ul>
	<br> <br> <br><br><br><br><br>
	
	<h1 class = "topic"> Taste On Wayy</h1>

	
	<br><br><br><br>
	<h2 class = "topic1">Thank You</h2>
</center>	
<br><br>

	<form method="POST" action= "submitadditem.php" class="box1" style = "float:left">
	
	<fieldset style = "float:center; height:300px; width:400px" >

	<legend style= "color: 81AF2A; font-weight:bold; font-size: 20px"> Rate Driver</legend>

	<div class="rate" id = "DriverRate" style = "float:center; margin-left:120px">

    <input type="radio" onclick = "starA()" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>

    <input type="radio" onclick = "starB('')" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>

    <input type="radio" onclick = "starC()" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>

    <input type="radio" onclick = "starD()" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>

    <input type="radio" onclick = "starE()" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>

	</div>
  
  <br><br>
  
  <textarea style = "margin-left:100px;"id = "feedback"> </textarea>  
  <p style = "margin-left:60px;"><br>
   <label for="fname" style="color:orange"  > <b>Name:</b></label>
  <input type="text" id="fname" name="fname" required><br><br>
  
  <label style = "color: orange; font-weight:bold; float:center;">Comments</label><br><br>
		<input type="text" id="myText" name="myText" placeholder = "Add text here"  style = "width:250px; height:70px; float:center"><br><br>
		<button onclick="myFunction()" style = "width:100px; height: 30px; background-color: 81AF2A; color:white; border-color:white">Submit</button>
</p>
    </fieldset>
	</form>
	
	
	<br><br><br><br><br><br><br>
	
	<form method="POST" action= "submitAddItem1.php" class="notes" style="float:right" >
		<label style = "margin-right: 200px; font-size:24px" for = "speMsg" ><b>Any Special Messages : </b></label> <br>
		<button onclick="myFunction()"style = "width:100px; height: 30px; background-color: 81AF2A; color:white; border-color:white">Submit</button>
		<textarea id="speMsg" name="speMsg" rows="15" cols="40"  style="margin-right:120px" placeholder = "Click to add text"></textarea>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<fieldset style = "background-color: white; opacity: 0.7; margin-left:450px; margin-right:550px;">
	
	<form href="RatingPage.php" style= "border-color:white " >
	<table border="1" width="25%">
	<tr>
	<th class="col1" >ID</th>
	<th class="col1" >Ratings</th>
	<th class="col2" >Customer Name</th>
	<th class="col3" >Comments</th>
	</tr>
	<?php
	$sql="select* from ratings";
	$result = $con->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc()){
			echo"<tr><td>".$row["ID"]."</td><td>".$row["Stars"]."</td><td>".$row["Name"]."</td><td>".$row["FeedbackText"]."</td></tr>";
		}
	}	
		else{
			echo "No Ratings";
		}
		echo "</table>";
	
	$con->close();
	?>
	
	</form>
	
	</fieldset>
		 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<div id="footer">
		<div id="innerFooter">
			<div id="footerLogo">
				<img src="../images/footerImg.png" style = "height:170px; width:200px"class="logo" alt="Logo">
				<div id="Title">
					
				</div>
			</div>
			<div id="Child1">
				<h1  style = "font-weight: bold; text-decoration: underline">Need Help?</h1><br>
				<li><a href="Terms and Conditions.php">TERMS & CONNDITIONS</a></li><br>
				<li><a href="Privacy Policy.php">PRIVACY POLICY</a></li><br>
				<li><a href="promotion page.php">PROMOTIONS</a></li>
			</div>
			<div id="Child2">
				<h1 style = "font-weight: bold; text-decoration: underline"> Quick Link </h1><br>
				<li><a href="homepage.php">HOME</a></li><br>
				<li><a href="search page.php">HOW IT WORKS</a></li><br>
				<li><a href="AboutUs.php">ABOUT US</a></li><br>
				<li><a href="promotion page.php">NEWS</a></li>
			</div>
			<div id="Child3">
				<h1  style = "font-weight: bold; text-decoration: underline">Follow Us</h1><br>
			
				<div class="socialMediaLinks">
					<ul>
						<div><li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li></div>
						<div><li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li></div>
						<div><li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li></div>
						<div><li><a href="https://lk.linkedin.com"><i class="fa fa-linkedin-square"></i></a></li></div>
						<div><li><a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li></div>
					</ul>
				</div><br><br>
			
				<br><i>23/1, Malwatta Road, Colombo <br> 56A, Jayaweli Mawatha, Kiribathgoda, Gampaha</i>
			</div>
		</div>
		<div id="copyRigth">
			<p>Copyright 2020 © Taste On Wayy Foods All Rights Reserved.</p>
		</div>
		</div>
	</div>



</body>
</php>