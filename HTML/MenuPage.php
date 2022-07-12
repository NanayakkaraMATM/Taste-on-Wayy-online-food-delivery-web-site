<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../styles/Allstyle.css">

<script src="../js/script.js"> </script>
<title>Menu</title>

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
		<a href = "#">
		<img src = "../images/shopping cart.png" style="float:right; margin-right: 5px; margin-top: -1px" width = "40px" height = "29px">
		</a>
	</fieldset>
<br>

<img src="../images/profile1.png" alt="Shopping Cart" style="float:left" width = "210px" height = "170px">
		<center>
	<ul class="Home">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="AboutUs.php"> About </a></li>
		<li class="Home"><a href="MenuPage.php">Menu</a></li>
		<li class="Home"><a href="User Account Page.php">Account Details</a> </li>
		<li class="Home"><a href="ContactUs.php">Contact Us</a></li>
	</ul>
	<br><br><br><br>
	
	<h1 class = "topic"><b> Taste On Wayy</b></h1>
	
	<br><br><br><br><br>
	
	<h2 class = "to"><u> Menu </u></h2>
	
	<br><br><br><br><br>


	<button class = "buttons" type = "button" id = "button1" onclick = "loadData('button1')" style = "float:left; margin-left:35px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -10px; margin-top: -10px">
	<img src = "../images/pizza.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px ">
		<div class = "content">
			<h4>Pizza</h4>
		</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button2" onclick = "loadData('button2')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/indian.png" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Indian</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button3" onclick = "loadData('button3')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/chinese.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Chinese</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button4" onclick = "loadData('button4')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/healthy.jpeg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Healthy</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button5" onclick = "loadData('button5')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/appertizers.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Appertizers</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button6" onclick = "loadData('button6')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/thai.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Thai</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button7" onclick = "loadData('button7')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/asian.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Asian</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button8" onclick = "loadData('button8')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/italian.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Italian</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button9" onclick = "loadData('button9')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/burgers.jpg" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Burgers</h4>
	</div>
	</div>
	</button><br><br><br><br><br><br>
	
	<button class = "buttons" type = "button" id = "button10" onclick = "loadData('button10')" style = "float:left; margin-left:255px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -10px; margin-top: -10px">
	<img src = "../images/drinks.jfif" alt = "pizzaitem" style = "Width: 140px; height: 100px">
		<div class = "content">
			<h4>Drinks</h4>
		</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button11" onclick = "loadData('button11')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/icecream.jfif" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Ice-Cream</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button12" onclick = "loadData('button12')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/cake.jfif" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Cakes</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button13" onclick = "loadData('button13')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/pies.jfif" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Pies & Tarts</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button14" onclick = "loadData('button14')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/bakery.jfif" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Bakery</h4>
	</div>
	</div>
	</button>
	
	<button class = "buttons" type = "button" id = "button15" onclick = "loadData('button15')"style = "float:left; margin-left:60px; margin-top:-20px; height: 90px">
	<div class = "container" style = "float:left; margin-left: -20px; margin-top:-10px">
	<img src = "../images/coffee.jfif" alt = "pizzaitem" style = "Width: 140px; height: 100px">
	<div class = "content">
	<h4>Coffee & Shakes</h4>
	</div>
	</div>
	</button>
	
	
	<br><br><br><br><br><br><br>
	<b><u><p class ="text2" id="topic" style="color:yellow; font-size:40px"></p></u></b><br>
	<img id="restImage" src="" style="width:300px; height:200px;">
<br>

	
	
	<fieldset id="f1"style="background-color:F9F7F7 height:60px; border-color:transparent">
	<p id = "restaurantName1" class="restname" style = " float: left; font-weight:bold; color:91F510; font-size:28px"></p><br><br><br><br>
	<img id="shopImage" src="" style="float:left; margin-left:15px; width:250px; height:200px;">
  	<p id = "description" class="descr"style = "margin-left:35px; margin-right:105px; color:white; outline:none; opacity: 0.8; text-align: justify; overflow: hidden; resize: none; font-family: Times New Roman, Times, seri; font-size: 20px"></p><br>	
	<button class = "text3" id = "para3" style="padding:10px 20px; border-radius:12px; font-size:14px;"></p>
	</fieldset><br><br><br>
	
	<p class = "text2" style="color:white"id = "topic"></p>
	<fieldset id="f2"style="background-color:F9F7F7 height:50px;border-color:transparent">
	<p id = "restaurantName" class="restname" style = "float: left; font-weight:bold; color:91F510; font-size:28px"></p><br><br><br><br>
	<img id="shopImage2" src="" style="float:left; margin-left:15px; width:250px; height:200px;">
  	<p id = "description1" class="descr"style = "margin-left:35px; margin-right:105px; color:white; outline:none; opacity: 0.8; text-align: justify; overflow: hidden; resize: none; font-family: Times New Roman, Times, seri; font-size: 20px"></p><br>	
	<button class = "text3" id = "para2" style="padding:10px 20px; border-radius:12px; font-size:14px;"></p>
	</fieldset>
</center>
<br><br><br><br><br><br><br>
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