<html>
<head>

<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../styles/style1S.css">

<!--<script src="../js/java.js"></script>
-->
<title>Customer Reg</title>

</head>

<body onload = "Backg()">
<ul class="sign">

	<li class="sign active"><a href="SignUpPage.php">Sign Up</a></li>
	<li class="sign"><a href="login page.php">Login</a></li>
		</ul>
		<a href = "#">
		<img src = "../images/shopping cart.png" style="float:right; margin-right: 195px; margin-top:-25px" width = "40px" height = "29px">
		</a>
	
<br><br><br>

<img src="../images/logo.png" alt="logo" style="float:left" width = "210px" height = "170px">
		<center><ul class="Home">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="#"> About </a></li>
		<li class="Home"><a href="#">Menu</a></li>
		<li class="Home"><a href="#">Account Details</a> </li>
		<li class="Home"><a href="#">Contact Us</a></li>
	</ul>
	<br> <br><br><br>
	
	<h1 class = "topic"> Taste On Wayy</h1>
	
	
	<br><br><br><br><br><br><br>
	
	<!--Ending of the header-->
	
	
	<h2><b><u> Customer Registration</u></b></h2>
	<br>
	</center>
	
	<br>
	
	<form method ="POST" action="CustomerReg.php">
	
	<fieldset style = "float:left; background-color: white; opacity: 0.7; border-color:none; width: 990px; margin-left:70px; padding-left:10px;">
	
	<br>
	<label class = "text1"> Title <font color="red">* </font> : <input type="text" name = "CusTitle" size="15" style = "font-size : 20px; margin-left:78px;" placeholder = "Mr/Ms .." required>
	</label>
	<br><br>
	
	<label class = "text1">First Name <font color="red">* </font> : <input type="text" name = "CusFname" size="20" style = "font-size : 20px; margin-left:20.5px;" required>
					 &nbsp Last Name  <font color="red">* </font> : <input type="text" name="CusLname" size="20" style = "font-size : 20px; margin-left:56px;" required>
	</label>
	<br><br>
	
	<label class = "text1">Address <font color="red">* </font> : <input type="text" name ="CusAdd1"size="40" style = "font-size : 20px; margin-left:49px;"> <input type="text" name = "CusAdd2"size="6" style = "font-size : 20px;" placeholder = "Country" required>
	<input type="text" name = "CusAdd3"size="6" style = "font-size : 20px;" placeholder = "Postal Code" required>
	<br><br>
	</label>
	
	<label class = "text1">Contact No <font color="red">* </font> : <input type="text" name="CusPCc"size="2" style = "font-size : 20px; margin-left:19px;" placeholder = "+94" ><input type="text" name ="CusPhone" size="12" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" style = "font-size : 20px;" placeholder = "07********" required>
	<br><br>
	</label>
	
	<label class = "text1">Email <font color="red">* </font> : <input type="text" name ="CusEmail"size="40" style = "font-size : 20px; margin-left:64px;" required>
	<br><br>
	</label>
	
	<label class = "text1">NIC No <font color="red">* </font> : <input type="text" name="CusNIC"size="20" style = "font-size : 20px; margin-left:50px;" required>
	<br><br>
	</label>
	
	<label class = "text1">Birthday <font color="red">* </font> : <input type="date" name ="CusBd"size="20" style = "font-size : 20px;  margin-left:40px;" required>
	<br><br>
	
	<label class = "text1">Password <font color="red">* </font> : <input type="password"  id = "pwd" name = "CusPw"size="10" style = "font-size : 20px; margin-left:30px;" required>
	</label>
	
	<label class = "text1">&nbsp &nbsp &nbsp &nbsp &nbsp Re-Enter Password <font color="red">* </font> : <input type="password" name = "RePW"size="10" style = "font-size : 20px;  margin-left:54px;" id="RePassd" name="RePassd" required>
	</label>
	<br><br>
	
	<input type="checkbox" id="policy" name="policy" required onclick="enableButton()">
	
	<label>Accept Privacy Policy Terms</label> <br><br>
	
	<input type="submit" id="bt1" value ="Submit" class = "bt" >
	
	<input type="reset" value="Edit" class="bt">
	
	<button name = "Back" class = "bt1" onclick = "alert('Back to Home Page')"><a href = "homepage.php" >Back </a></button><br>
	
	</fieldset>
	
	</form>
	
	<!-- Uploading the pro pic -->
	
	<div class = "propic">
	<p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
	<button class = "btnUpload" class = "up1"><label for="file" style="font-size: 20px; cursor: pointer;">Upload Profile Picture</label></button><br><br>
	<img src = "../images/avatar.png" style = " margin-right: 90px" id="output" width="150" /><br><br>
	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
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