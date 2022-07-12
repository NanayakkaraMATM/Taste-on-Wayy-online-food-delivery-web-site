<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../styles/Homestyle.css">
<script src="js/script.js"> </script>
<title>Home</title>

</head>

<body>
<br><br>
<ul id = "topnav" class="sign" style="width:100%">
	<li class="sign active"><a href="SignUpPage.php">Sign Up</a></li>
	<li class="sign"><a href="login page.php">Login</a></li>
		</ul>
		
		
<br><br><br>

<img src="../images/profile1.png" alt="Shopping Cart" style="float:left" width = "250px" height = "200px" >
		<center><ul class="Home" id="mybtn">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="#"> About </a></li>
		<li class="Home"><a href="#">Menu</a></li>
		<li class="Home"><a href="#">Account Details</a> </li>
		<li class="Home"><a href="#">Contact Us</a></li>
	</ul>
	<br><br><br><br><br><br>
	
	<h1 style="font-size : 45px; float: left; margin-left:150px; color:white; font-size:100px; font-family: 'Lobster', cursive;"> Taste On Wayy</h1>
	
	
	<br><br><br><br><br><br><br><br><br><br>
	
	<fieldset class="homesearch" style=" background-color:#f2f2f2; margin-top:50px;">
	<br>
	<div class="animated-text" style="margin-top:200px;">
      <div class="line">Super Fast delivery </div>
      <div class="line">It's always hot</div>
      <div class="line">Don't skip meals</div>
      <div class="line">Taste On Wayy..</div>
    </div>
	<br><br>
	<button class="homesearchbtn"><a href="search page.php" style = "color:black">Find Restaurants in Your Area</button></a>
	</center>
	</fieldset>

<!--reference Code from W3 Schools(Strating) -->
	
<div class="slideshow-container" id="restaurantImage">

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="../images/promotion2.jpg" width ="95%" height="600px" >	
	
  
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="../images/promotion3.jpg" width ="95%" height="600px" >

</div>

<div class="mySlides fade" align="center">
  <div class="numbertext"></div>
  <img src="../images/promotion8.jpg" width ="95%" height="600px" >

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <script>
  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
} 
  </script>
</div></div>

<!--reference Code from W3 Schools(Ending) -->

<center>
<fieldset class="homedetails1" style=" background:black; margin-top:50px;  width:95%; height:80%;">

<img src="../images/delivery.jpg" style="float:left; margin-left:50px; margin-top:50px;" height="50%" width="25%">

<img src="../images/homedetails2.jpg" style="float:left; margin-left:100px; margin-top:50px;" height="50%" width="25%">

<img src="../images/deliverdetails3.jpg" style="float:left; margin-left:100px; margin-top:50px;" height="50%" width="25%">

<h2 style="float:left; margin-left:135px; font-size:30px; color:yellow;"><b>Smarter Delivery</b></h2>
<h2 style="float:left; margin-left:200px; font-size:30px; color:yellow;"><b>Gain Time</b></h2>
<h2 style="float:left; margin-left:270px;font-size:30px; color:yellow;"><b>More Choices</b></h2>

<p style="float:left; margin-left:50px; color:white;">Watch your order from the moment you <br>place it until the food is at your door.</p>
<p style="float:left; margin-left:90px; color:white;">Life can be complicated but<br> ordering food doesn't have to be.<br> Let us take care of the details<br> while you focus on what really matters.</p>
<p style="float:left; margin-left:120px; color:white;">We have thousands of restaurants,<br> including local favorites that don't<br> normally deliver.<br> Discover new cuisines all around you.
</p>
</fieldset>

<fieldset class="homedetails2" style=" background:white;   width:95%; height:70%;">
<img src="../images/downloadapp.jpg" style="float:left; margin-left:50px;  height:100%; width:50%">
<a href = "https://www.playstore.com/">
	<img src="../images/download.jfif" alt="Play Store" style="float:center; margin-top:120px;" width = "300px" height = "100px" >
	</a>
	
	<br><br><br><a href = "https://www.appstore.com/">
	<img src="../images/appstore.png" alt="App Store" style="float:center" width = "300px" height = "100px" >
	</a>
</fieldset>

<fieldset class="homesearch3" style=" background-color:#f2f2f2; width:95%; height:70%;">
	<br><br><br>
	
	<button class="homesearchbtn2" ><a href="promotion page.php" style = "color:white">Click to see Promotions</button></a>
	
	</fieldset>
</center>

	<br><br><br>
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
				<li><a href="#">HOW IT WORKS</a></li><br>
				<li><a href="#">ABOUT US</a></li><br>
				<li><a href="#">NEWS</a></li>
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
</html>