<html>
<head>

<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/Allstyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../styles/Allstyle.css">
<script src="../js/script.js"> </script>

<title>Payment</title>

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




<img src="../images/profile1.png" alt="Shopping Cart" style="float:left" width = "210px" height = "170px">
		<center><ul class="Home">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="AboutUs.php"> About </a></li>
		<li class="Home"><a href="MenuPage.php">Menu</a></li>
		<li class="Home"><a href="User Account Page.php">Account Details</a> </li>
		<li class="Home"><a href="ContactUs.php">Contact Us</a></li>
	</ul>
	<br><br><br><br>
	
	<h1 class = "topic"> Taste On Wayy</h1>
	
	<br><br><br><br><br><br>
	
	<h2 class = "to"><u> Payment Method Change </u></h2>
	
	<br><br><br><br><br>


           
	<form method ="POST" action="PayDetails.php" id="payreset">
	
	<fieldset style="float:center; background-color:#f2f2f2; border-color:grey; width:30%; height:115%">
          
		  <div class="col-50">
            <h3><u>Add Card Details</u></h3>
			<hr>
            <h6>Accepted Cards</h6>
			<img src="../images/visaaa.png" alt="Visa Card" style="float:center" width="50px" height="40px">
			<img src="../images/mastercard.jfif" alt="Visa Card" style="float:center" width="50px" height="40px">
			<img src="../images/aexpress.png" alt="Visa Card" style="float:center" width="50px" height="40px">
			<img src="../images/maestro.png" alt="Visa Card" style="float:center" width="50px" height="40px"><br><br><br>
            <hr>
            
			<label for="cname">Name on Card</label>
            <input type="text" name="CardName" id="cname"  placeholder="Sam Perera" required >
            
			<label for="ccnum">Credit Card Number</label>
            <input type="text" name="CardNo" id="ccnum" placeholder="1111-2222-3333-4444" required>
            
			<label for="expmonth">Expiry Month</label>
            <input type="text" name="CExpMonth" id="expmonth" placeholder="November" required>
            
			<div class="rowpay">
              <div class="col-50">
                <label for="expyear">Expiry Year</label>
                <input type="text" style="width:60px" name="CExpYear" id="expyear" placeholder="2025" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" style="width:50px" name="PayCvv" id="cvv" placeholder="123" required>
              </div>
			  
            <label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" name="PayEmail" id="email" placeholder="samperera123@gmail.com" required>
            </div>
          </div>
          
        </div>
		<a href="Customer Regestration Page.php"><input type="button" value="<< Go back" class="backbtn"></a>
		<input type="button" onclick="myFunction()" value="Clear" class="btnreset">
        <input type="submit" value="Add Card" class="btn">
		
      </form>
    </div>
  </div>
  </center>
  </fieldset>
 <br><br>
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