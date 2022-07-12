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
	<br><br>
	<input type="text" name = "CusTitle" size="15" style = "font-size : 20px;" placeholder = "Enter Title (Mr/Ms ..)" required>
	<br><br>
	<input type="text" name = "CusFname" size="20" style = "font-size : 20px; " placeholder = "Enter First Name" required>
	
	<input type="text" name="CusLname" size="20" style = "font-size : 20px; margin-left:200px;" placeholder = "Enter Last Name" required>
	<br><br>
	<input type="text" name ="CusAdd1"size="40" style = "font-size : 20px;" placeholder = "Enter Address"> 
	
	<input type="text" name = "CusAdd2"size="20" style = "font-size : 20px;" placeholder = "Enter Country" required>
	
	<input type="text" name = "CusAdd3"size="15" style = "font-size : 20px;" placeholder = "Enter Postal Code" required>
	<br><br>
	<input type="text" name="CusPCc"size="5" style = "font-size : 20px;" placeholder = "+94" >
	
	<input type="text" name ="CusPhone" size="12" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" style = "font-size : 20px;" placeholder = "Enter Contact No (07********)" required>
	<br><br>
	<input type="text" name ="CusEmail"size="40" style = "font-size : 20px;" placeholder = "Enter Email Address" required>
	<br><br>
	<input type="text" name="CusNIC"size="20" style = "font-size : 20px;" placeholder = "Enter NIC No" required>
	<br><br>
	<input type="date" name ="CusBd"size="20" style = "font-size : 20px;" placeholder = "Enter Birthday" required>
	<br><br>
	<input type="password"  id = "pwd" name = "CusPw"size="10" style = "font-size : 20px;;" placeholder = "Enter Password" required>
	<br><br>
	<input type="password" name = "RePW"size="10" style = "font-size : 20px;" id="RePassd" name="RePassd" placeholder = "Re-Enter Password" required>
	<br><br><br>
	<input type="submit" name ="Update" id="bt1" value ="Update Data" class = "bt" >
	
	<?php
	require 'config.php';
	?>

	<?php
		
		if(isset($_POST['update']))
		{
			$Email = $_POST["CusEmail"];
			
			$sql = "UPDATE customerreg SET 'Title = $_POST['CusTitle']' , 'First_Name = '$_POST['CusFname']' , Last_Name = $_POST['CusLname'] ' , 'Address = $_POST['CusAdd1']' , 'Country = $_POST['CusAdd2'] ' , 'Postal_Code = $_POST['CusAdd3'] ' , 'Contact_No_Country_Code = $_POST['CusPCc']' , 'Contact_No = $_POST['CusPhone'] ' , 'Email = $_POST['CusEmail'] ' , 'NIC_No = $_POST['CusNIC'] ' , Birthday = $_POST['CusBd'] ' Password = $_POST['CusPw'] ' , 'Re_Enter_Password = $_POST['RePW']' WHERE Email = $_POST['CusEmail']";
		}
	
	
	
	
	