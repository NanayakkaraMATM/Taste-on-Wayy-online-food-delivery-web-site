<html>
<head>

<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../styles/style1S.css">

<script src="../js/java.js"></script>

<title>User Details</title>

</head>

<body>
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
	<br> <br><br><br>
	
	<h1 class = "topic"> Taste On Wayy</h1>
	
	
	<br><br><br><br><br><br>
	
	<!--Ending of the header-->
	
	<h2><u><b> User Account Details </b></u></h2>
	<br>

	</center>
	
	<br>

	<fieldset style = "float:left; background-color: white; opacity: 0.7; border-color:none; width: 990px; margin-left:70px; padding-left:10px;">
	
	<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<input type="text" name="CusNIC" style = "font-size : 20px; margin-left:50px;" placeholder="Customer NIC No">
	
	<input type="submit" style ="background-color: Yellow; border: none; color: black; text-align: center; text-decoration: none; font-size: 20px;">
	<br><br>
	
	<?php
	
	error_reporting (E_ALL ^ E_NOTICE);
	
	require'config.php';
	
	$conn = $_POST['CusNIC'];
	
	$sql = "SELECT * FROM customerreg WHERE (NIC_No = '$conn') ";
	
	$result = $con -> query($sql);
		
	if($result -> num_rows > 0)
	{
		while ($row = $result -> fetch_assoc())
		{
			echo "<h3>Title : ".$row["Title"]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp First Name : ".$row["First_Name"]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Last Name : ".$row["Last_Name"]."<br><br> Address : ".$row["Address"]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Country : ".$row["Country"]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Postal Code : ".$row["Postal_Code"]."<br><br> Country Code ".$row["Contact_No_Country_Code"]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContact No : ".$row["Contact_No"]."<br><br> Email : ".$row["Email"]."<br><br> NIC No : ".$row["NIC_No"]."<br><br> Birthday : ".$row["Birthday"]."<br><br> Password : ".$row["Password"]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Re Enter Password : ".$row["Re_Enter_Password"]."<br><br></h3>";
		}
	}
	else
	{
	
	}
	$con ->close();
	?>

	
	<input type="reset" value="Edit" class="bt">
	
	<button name = "Back" class = "bt1" onclick = "alert('Back to Home Page')"><a href = "homepage.php" >Back </a></button><br>
		
	</fieldset>
	
	</form>
	
	<button name = "Payment Details" class = "bt1" onclick = "alert('Displaying Payment Details')"><a href = "PaymentRet.php" >Payment Details </a></button><br>
	<!-- Uploading the pro pic -->
	
	<div class = "propic">
	<p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
	<button class = "btnUpload" class = "up1"><label for="file" style="font-size: 20px; cursor: pointer;">Upload Profile Picture</label></button><br><br>
	<img src = "../images/real.png" style = " margin-right: 90px" id="output" width="150" /><br><br>
	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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