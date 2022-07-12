<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../styles/ContactUsStyles.css">
<script src = "../js/myScript.js"></script>

<title>Contact Us Page</title>
</head>

<body onload = "setHeight()"> <!--Set the field sizes of the textareas when page is loaded-->

<!--Displays user log in and sign up buttons-->
<ul id = "myDIV" class="sign">
	<li class="sign active"><a href="SignUpPage.php">Sign Up</a></li>
	<li class="sign"><a href="login page.php">Login</a></li>
</ul>
		
	<a href = "My Shopping Cart.php">
		<img src = "../images/shopping cart.png" style="float:right; margin-right: 195px; margin-top:-28px" width = "40px" height = "29px">
	</a>
	
<br><br><br>

<!--Logo-->
<img src="../images/profile1.png" alt="Logo" style="float:left; margin-left:10px" width = "210px" height = "170px" >

<!--Navigation bar-->
<center>
<ul class="Home">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="AboutUs.php"> About </a></li>
		<li class="Home"><a href="MenuPage.php">Menu</a></li>
		<li class="Home"><a href="User Account Page.php">Account Details</a> </li>
		<li class="Home"><a href="ContactUs.php">Contact Us</a></li>
</ul>
<br> <br> <br><br>

<h1 class = "topic"> Taste On Wayy</h1>

<br><br><br><br><br><br><br>

<center>
	<h2 class = "topic">General Inquiries </h2><br>
</center>

<!--Contact Us Form-->
<form action = "ContUs.php" target = "_self" method = "POST">
	
	<fieldset class = "fieldset" style = "background-color: white; opacity: 0.6; width: 390px; height: 270px; float:right; margin-right: 100px">
		<p> <h3 style = "font-weight:bold; color: red; margin-top:20px; text-align:left; margin-left: 20px"> Connect with Us: </h3> </p>
		<p style = "color: black; margin-top:0px; text-align:left; font-size: 18px; font-weight: bold; margin-left: 20px"> For support or any other questions <br><br> Email us at: </p>
		<h4 style = "color: black; margin-top:0px; text-align:left; font-weight: bold; margin-left: 20px"> tasteonwayy@gmail.com</h4>
		<br>
		<p> <h3 style = "font-weight:bold; color: red; margin-top:0px; text-align:left; margin-left: 20px"> Address: </h3> </p>
		<h4 style = "color:black; margin-top:0px; text-align:left; font-weight: bold; margin-left: 20px"> 23/1, Malwatta Road, Colombo </h4> 
		<h4 style = "color:black; margin-top:0px; text-align:left; font-weight: bold; margin-left: 20px"> 56A, Jayaweli Mawatha, Kiribathgoda, Gampaha</h4>
	</fieldset>
	

	<textarea style = "margin-left: 50px" name ="ContUsName" class = "contactForm" id = "name" cols = "75" placeholder = "Name: " onfocus = "this.placeholder = ''" onblur = "this.placeholder = 'Name:* '" required></textarea><br><br><br>
	<textarea style = "margin-left: 50px" name ="ContUsEmail" class = "contactForm" id = "email" cols = "75" placeholder = "Email: " onfocus = "this.placeholder = ''" onblur = "this.placeholder = 'Email:* '" required></textarea><br><br><br>
	
	<!--Dropdown list-->
	<input class = "selectSubject" id = "subject" type="text" list="text_editors" placeholder = "  Subject: " onfocus = "this.placeholder = ''" onblur = "this.placeholder = '  Subject:* '" required>
	<datalist name ="ContUsSubject" id="text_editors">
		<option value="Account settings"></option>
		<option value="Basics"></option>
		<option value="Driving and Delivering"></option>
		<option value="Payment"></option>
		<option value="Policies"></option>
		<option value="Pricing"></option>
		<option value="Promotions and Referrals"></option>
		<option value="Restaurants"></option>
	</datalist><br><br><br>
	
	<textarea style = "margin-left: 50px" class = "contactForm" name ="ContUsEmail" id = "write" cols = "75" placeholder = "Write Something To Us: " onfocus = "this.placeholder = ''" onblur = "this.placeholder = 'Write something to us: '" required></textarea><br><br><br><br><br><br><br><br><br><br><br><br>
	<button style = "margin-left: 50px" class = "btnAddLines" type = "button" onclick = "addLines()"> Click to add more>> </button><br>
	
	<button class = "reset" type = "button" onclick = "eraseText()" style= "margin-left:-250px; padding: 5px 35px 5px 35px"> Reset </button>
	<input type = "submit" class = "reset" id = "submitbtn" name = "submitbtn" value = "Confirm" style= "margin-left:0px; padding: 5px 30px 5px 30px"> 

	</form>
</center>	
<!--Footer-->
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
</html>