<?php
	include_once 'config.php';
?>

<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../styles/style1S.css">
<script src = "../js/java.js"></script>

<title>Shopping Cart</title>

</head>

<body>
	<br>
	<fieldset style = "height: 30px; width:100%; background-color: white; border-color: white; float: center">
	
	<div class="dropdown" style = "margin-top: -7px; float:right; margin-right: -12px">
	
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
		<img src = "../images/shopping cart.png" style="float:right; margin-right: 5px; margin-top: -7px" width = "40px" height = "29px">
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
	<br> <br> <br><br>
	
	<h1 class = "topic"> Taste On Wayy</h1>

	<br><br><br><br>
	<!--Ending of the header-->
	
	<h2 style = "float:center; margin-right:125px"><b> My Shopping Cart </b></h2>
	<br>
	</center>

	<fieldset style = "float:center; margin-left:240px; background-color: white; opacity: 0.7; border-color:none; padding-left:10px; width:1000px">

	<table border =1 cellpadding = 5 style = "float= center; margin-top:20px; margin-left:155px"> 
	<tr>
		<th style = "font-size : 20px; width: 150px"> Order ID </th>
		<th style = "font-size : 20px; width: 150px"> Item Name</th>
		<th style = "font-size : 20px; width: 150px"> Quantity </th>
		<th style = "font-size : 20px; width: 150px"> Total(LKR)</th>

	</tr>
	
	<?php
	$sql = "select * from orderdetails";
	$result = $con->query($sql);
	$total = 0.00;
	if($result -> num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row["Order_ID"]."</td><td>".$row["Item_Name"]."</td><td>".$row["Quantity"]."</td><td>".$row["Total"]."</td></tr>";
			$total += $row["Total"];
		}
		
	}
	else{
		echo "<p>There are no items added to the cart</p>";
	}
	
	echo "</table>";
	echo "<br><br>";
	echo "<center><font color = red size = 5px>Total is $total</center>";
	$con->close();
	?>
	<br><br>
	</fieldset>
	
	<br><br>
	<button name = "Add" class = "bt1" style="float: center; margin-left:620px" onclick = "alert('Back to select more items')"><a href = "SelectItems.php" >Add More Items To Cart </a></button><br><br><br>
	
	<button name = "submit" class = "bt1" style="float: center; margin-left:620px"><a href = "Tracking Page.php" >Track Your Order</a></button><br>
	
	<br>

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