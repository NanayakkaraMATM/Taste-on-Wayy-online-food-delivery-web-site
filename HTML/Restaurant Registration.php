<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../styles/RestaurantRegistrationStyles.css">
<script src = "../js/myScript.js"></script>

<title>Restaurant Registration</title>
</head>

<body onload = "setSize()"> <!--Set the field sizes of the textareas when page is loaded-->

<!--Displays user log in and sign up buttons-->
<ul id = "myDIV" class="sign">
	<li class="sign active"><a href="SignUpPage.php">Sign Up</a></li>
	<li class="sign"><a href="login page.php">Login</a></li>
</ul>
		
<a href = "#">
		<img src = "../images/shopping cart.png" style="float:right; margin-right: 195px; margin-top:-28px" width = "40px" height = "29px">
</a>
	
<br><br><br>

<!--Logo-->
<img src="../images/profile1.png" alt="Logo" style="float:left; margin-left:10px" width = "210px" height = "170px">

<center>
<!--Navigation bar-->
<ul class="Home">
	<li class="Home"><a href="homepage.php">Home</a></li>
	<li class="Home"><a href="#"> About </a></li>
	<li class="Home"><a href="#">Menu</a></li>
	<li class="Home"><a href="#">Account Details</a> </li>
	<li class="Home"><a href="#">Contact Us</a></li>
</ul>
	
<br> <br> <br><br>
<h1 class = "topic"> Taste On Wayy</h1>

</center>
	
<br><br><br><br><br><br><br>
	
<h2 class = "topic" style = "float:center; margin-left:0px">Restaurant Registration </h2><br>

<!--Registration Form-->	
<form action = "RestaurantRegi.php" target = "_self" method = "POST" onsubmit = "return checkPassword()">

	<fieldset style = "float: center; background-color: white; opacity: 0.7; border-color:none; width: 1250px; margin-left: 50px"><br>
	
		<h3 style = "float: left; margin-top:0px; margin-left:10px; opacity:1; font-weight:bold"> Restaurant Name* </h3>
		<textarea class = "regForm" name="restaurantName" id = "restaurantName" cols = "71" style = "font-size: 16px; margin-left: 40px; resize: none; overflow: hidden" required></textarea><br><br>

		<h3 style = "float: left; margin-top:0px; margin-left: 10px; opacity:1; font-weight:bold"> Restaurant Address* </h3>
		<textarea class = "regForm" name="restaurantAddress" id = "restaurantAddress" cols = "71" style = "font-size: 16px; opacity:1; float:left; margin-left: 19px; resize: none; overflow: hidden" required></textarea><br><br>
		
		<h3 style = "float: left; margin-top:10px; margin-left: 10px; opacity:1; font-weight:bold"> Floor/Suite </h3>
		<textarea class = "regForm" name="restaurantFloor" id = "restaurantFloor" cols = "71" style = "font-size: 16px; opacity:1; float:left; margin-left: 98px; margin-top:10px; resize: none; overflow: hidden"></textarea><br><br><br>
		
		<h3 style = "float: left; margin-top:0px; margin-left: 10px; opacity:1; font-weight:bold"> First Name* </h3>
		<textarea class = "regForm" name="RestFname" id = "firstName" cols = "24" style = "font-size: 16px; opacity:1; float:left; margin-left: 87px;  resize: none; overflow: hidden" required></textarea>
		
		<h3 style = "float: left; margin-top:0px; margin-left: 25px; opacity:1; font-weight:bold"> Last Name* </h3>
		<textarea class = "regForm" name="RestLname" id = "lastName" cols = "23" style = "font-size: 16px; opacity:1; float:left; margin-left: 74px; resize: none; overflow: hidden" required></textarea><br><br><br>
		
		<h3 style = "float: left; margin-top:0px; margin-left: 10px; opacity:1; font-weight:bold"> Mobile Number* </h3>
		<input type = "text" name="RestMCc" id = "code"  style = "opacity:1; float:left; margin-left: 50px; resize: none; overflow: hidden; width: 30px; height: 25px" placeholder = "+94">
		<input type = "text" name="RestMobile" class = "regForm" id = "mobile" style = "font-size: 16px; width: 200px; opacity:1; float:left; margin-left: 5px; resize: none; overflow: hidden" pattern = "[0-9]{10}" required>
		
		<h3 style = "float: left; margin-top:0px; margin-left: 25px; opacity:1; font-weight:bold"> Email Address* </h3>
		<input type = "text" class = "regForm" name="RestEmail" id = "email" style = "font-size: 16px; width: 228px; opacity:1; float:left; margin-left: 43px; resize: none; overflow: hidden"  pattern = "[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required><br><br><br>
		
		<h3 style = "float: left; margin-top:0px; margin-left: 10px; opacity:1; font-weight:bold"> Password* </h3>
		
		<input type="password" class = "regForm" name="RestPass" id = "password" size="10" style = "font-size: 16px; opacity:1; float:left; width: 235px; margin-left: 100px; resize: none; overflow: hidden"  pattern = "[A-Za-z0-9]{5,10}" required>
		
		<h3 style = "float: left; margin-top:0px; margin-left: 25px; opacity:1; font-weight:bold"> Confirm Password* </h3>
		<input type="password" class = "regForm" name="RestRePass" id = "confirmPassword" size="10" style = "font-size: 16px; opacity:1; float:left; width: 230px; margin-left: 11px; resize: none; overflow: hidden" required><br><br>
		
		<!--Shows passwords input as characters, when clicked-->
		<input type="checkbox" onclick="showPass()" style = "float: left; margin-left: 196px; margin-top:2px; width: 15px; height:15px"><p style = "float:left; margin-left:10px; font-size: 18px; color: black; font-family:Times New Roman, Times, seri">Show Passwords</p>  <br>
		<br>
		<textarea readonly	rows = "2" cols = "80" style = "font-size: 18px; color: 81AF2A; border-style: none; border-color: transparent; font-family:Times New Roman, Times, seri; opacity:1; float:left; margin-left: 5px; resize: none; overflow: hidden"> Use 8 or more characters with a mix of letters, numbers & symbols </textarea><br>
		<br>
		
		<!--Dropdown list-->
		<select name = "RestNumberOfLocations" id = "locations" placeholder = "Number of locations" style = "float: left; width:220px; margin-left:-730px; font-family:Times New Roman, Times, seri; font-size:20px; font-weight: bold">
		<option value = "" disabled selected hidden required> Number of Locations* </option>
			<option value = "1">1</option>
			<option value = "2-5">2-5</option>
			<option value = "6-10">6-10</option>
			<option value = "11-25">11-25</option>
			<option value = "25+">25+</option>
		</select>
		
		<br><br>
		
		<select name = "RestTypeOfCuisine" id = "cuisine" placeholder = "Type of Cuisine" style = "float:left; width:220px; margin-left:12px; opacity:1; font-family:Times New Roman, Times, seri; font-size:20px; font-weight: bold">
			<option value = "" disabled selected hidden  required> Type of Cuisine* </option>
			<option value = "Alcohol">Alcohol</option>
			<option value = "BBQ">BBQ</option>
			<option value = "Bakery">Bakery</option>
			<option value = "Burgers">Burgers</option>
			<option value = "Chicken">Chicken</option>
			<option value = "Chinese">Chinese</option>
			<option value = "Dessert">Dessert</option>
			<option value = "Italian">Italian</option>
			<option value = "Japanese">Japanese</option>
			<option value = "Korean">Korean</option>
			<option value = "Pizza">Pizza</option>
		</select>
		<br><br><br><br>
		
		<input type = "checkbox" id = "checkAccept" style = "float:left; height:20px; width: 20px; margin-left:10px; margin-top: -25px" required onclick = "enableButton()">
		<label for "checkAccept" style = "font-size: 18px; float:left; margin-left: 38px; margin-top: -24px"> By clicking "Submit" you agree to <b style = "color:81AF2A"> Taste On Wayy's General Terms and Conditions </b> and acknowledge you have read the <b style = "color:81AF2A"> Privacy Policy. </b> 
		
		<p><input type="file"  accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none; float: right"></p>
		<button class = "btnUpload" onchange = "" style = "float:right; margin-right:-120px; margin-top: -400px" ><label for="file" style="font-weight:bold; font-family:Times New Roman, Times, seri; font-size: 20px; cursor: pointer; paddding: 3px 25px">Upload Restaurant Image</label></button>
		<img src = "../images/avatar1.png" style = "opacity:1; float:right; margin-right: -75px; margin-top: -350px"id="output" width="150" /><br><br>
		
	</fieldset> 
		<input type = "submit" onclick = "eraseData()" id = "btnClear" name = "btnClear" value = "Clear"  style = "float:left; margin-top: 10px; margin-left:570px; padding: 8px 31px; background-color:#FFFF00; border-color:#FFFF00; font-family:Times New Roman, Times, seri; font-size:16px; font-weight:bold">
		
		<input type = "submit" id = "btnSubmit" name = "btnSubmit" value = "Submit"  style = "float:left; margin-top: 10px; margin-left:10px; padding: 8px 24px; background-color:#32CD32 ; border-color:#32CD32; font-family:Times New Roman, Times, seri; font-size:16px; font-weight:bold"  onclick = "alert('Record inserted successfuly')" disabled>
		
		<a href = "homepage.php" style = "float:left; margin-top: 10px; margin-left:10px; padding: 8px 24px; background-color:#32CD32 ; border-color:#32CD32; font-family:Times New Roman, Times, seri; font-size:16px; font-weight:bold">Back</a>

</form>
	
<br><br><br><br>

		<!--Footer-->
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