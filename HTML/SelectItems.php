<!DOCTYPE>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/SelectItems.css">
<script src = "../js/SelectItems.js"></script>
<title>Select Items</title>

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

<img src="../images/profile1.png"  alt="Logo" style="float:left; margin-left:10px" width = "210px" height = "170px" >
		<center><ul class="Home">
		<li class="Home"><a href="homepage.php">Home</a></li>
		<li class="Home"><a href="AboutUs.php"> About </a></li>
		<li class="Home"><a href="MenuPage.php">Menu</a></li>
		<li class="Home"><a href="User Account Page.php">Account Details</a> </li>
		<li class="Home"><a href="ContactUs.php">Contact Us</a></li>
	</ul>
	<br> <br> <br><br>

	<h1 class = "topic"> Taste On Wayy</h1>

	<br><br><br><br><br><br>
	
	<h2 class = "topic" style = "margin-left:100px"> Select Items </h2><br>

	<fieldset style = "float: center; background-color: white; border-color:black; width: 1333px; height:285px">
	<div class="container">
		<div class="mySlides">
		<img src="../images/piza.jpg" onclick = "showButton()" style="width:43%; height: 280px; float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap">
		<map name="workmap">
		<area id = "button1" shape="rect" coords="171,342,1,0" alt="Cheesy Vege Pizza" onclick = "loadData('button1'); showButton()">
		<area id = "button2" shape="rect" coords="345,344,174,0" alt="Sausage Delight Pizza" onclick = "loadData('button2'); showButton()">
		<area id = "button3" shape="rect" coords="499,344,344,2" alt="Double Pepperoni Pizza" onclick = "loadData('button3'); showButton()">
		<area id = "button4" shape="rect" coords="665,344,495,2" alt="Bacon and Sausage Pizza" onclick = "loadData('button4'); showButton()">
	</map>
	</div>

	<div class="mySlides">
		<img src="../images/burger.jpg" onclick = "showButton()" style="width:43%; height: 280px;float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap2">
		<map name="workmap2">
		<area id = "button5" shape="rect" coords="212,350,1,1" alt="Mini Sub Hamburger" onclick = "loadData('button5'); showButton()">
		<area id = "button6" shape="rect" coords="421,350,210,1" alt="Mini Sub Hamburger" onclick = "loadData('button6'); showButton()">
		<area id = "button7" shape="rect" coords="594,350,395,5" alt="Mini Sub Hamburger" onclick = "loadData('button7'); showButton()">
	</map>
	</div>

	<div class="mySlides">
		<img src="../images/sandwich.jpg" style="width:43%; height: 280px;float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap3">
		<map name="workmap3">
		<area id = "button8" shape="rect" coords="3,0,223,262" alt="Cheese Veggie Sandwich" onclick = "loadData('button8'); showButton()">
		<area id = "button9" shape="rect" coords="221,41,438,263" alt="Summertime Grilled Sandwich" onclick = "loadData('button9'); showButton()">
		<area id = "button10" shape="rect" coords="594,350,395,5" alt="Crispy Chicken Sandwich" onclick = "loadData('button10'); showButton()">
	</map>
	</div>
	
	<div class="mySlides">
		<img src="../images/fruitjuice.jpg" style="width:43%; height: 280px;float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap4">
		<map name="workmap4">
		<area id = "button11" shape="rect" coords="0,0,181,303" alt="Pomegranate Juice" onclick = "loadData('button11'); showButton()">
		<area id = "button12" shape="rect" coords="183,3,471,301" alt="Vegetable Juice" onclick = "loadData('button12'); showButton()">
		<area id = "button13" shape="rect" coords="457,22,615,303" alt="Grape Juice" onclick = "loadData('button13'); showButton()">
	</map>
	</div>
	
	<div class="mySlides">
		<img src="../images/japanese.jpg" style="width:43%; height: 280px;float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap5">
		<map name="workmap5">
		<area id = "button14" shape="circle" coords="252,124,64" alt="Smoked Salmon" onclick = "loadData('button14'); showButton()">
		<area id = "button15" shape="circle" coords="445,177,69" alt="Sushi" onclick = "loadData('button15'); showButton()">
		<area id = "button16" shape="circle" coords="356,285,70" alt="Oshizushi" onclick = "loadData('button16'); showButton()">
		<area id = "button17" shape="circle" coords="76,226,68" alt="Maki" onclick = "loadData('button17'); showButton()">
	</map>
	</div>

	<div class="mySlides">
		<img src="../images/rice.jpg" style="width:43%; height: 280px;float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap6">
		<map name="workmap6">
		<area id = "button18" shape="rect" coords="0,0,198,303" alt="Chicken Fried Rice" onclick = "loadData('button18'); showButton()">
		<area id = "button19" shape="rect" coords="183,3,400,301" alt="Yellow Rice" onclick = "loadData('button19'); showButton()">
		<area id = "button20" shape="rect" coords="400,22,615,303" alt="Vegetarian Mexican Rice" onclick = "loadData('button20'); showButton()">
	</map>
	</div>
    
	<div class="mySlides">
		<img src="../images/dessert.jpg" style="width:43%; height: 280px;float:center; opacity: 1; margin-top:0px; margin-left: 0px" usemap="#workmap7">
		<map name="workmap7">
		<area id = "button21" shape="rect" coords="1,2,192,400" alt="Chocolate Fudge Cake" onclick = "loadData('button21'); showButton()">
		<area id = "button22" shape="rect" coords="191,1,382,400" alt="Mocha Cake" onclick = "loadData('button22'); showButton()">
		<area id = "button23" shape="rect" coords="382,1,612,400" alt="Chocolate Shortbread" onclick = "loadData('button23'); showButton()">
	</map>
	</div>
  
  <a class="prev" style = "margin-left: 380px" id = "back" onclick="plusSlides(-1)" >❮</a>
  <a class="next" style = "margin-left: 908px" id = "forward" onclick="plusSlides(1)">❯</a>

</fieldset>
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  
  <div class="row" >
		
    <div class="column">
      <img class="demo cursor" src="../images/piza.jpg" style="width:190px; height:100px; margin-left:9px" onclick="currentSlide(1)" alt="<b>Pizza World</b><br>Click on an item to add to cart">
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/burger.jpg" style="width:190px; height:100px; margin-left:0px" onclick="currentSlide(2)" alt="<b>Street Burger</b><br>Click on an item to add to cart">
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/sandwich.jpg" style="width:190px; height:100px; margin-left:0px"  onclick="currentSlide(3)" alt="<b>LeeSH Sandwich Bar</b><br>Click on an item to add to cart">
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/fruitjuice.jpg" style="width:190px; height:100px; margin-left:0px" onclick="currentSlide(4)" alt="<b>Mondo Juice</b><br>Click on an item to add to cart">
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/japanese.jpg" style="width:190px; height:100px; margin-left:0px" onclick="currentSlide(5)" alt="<b>Japanese Dining Kyoto</b><br>Click on an item to add to cart">
    </div>  
    <div class="column">
      <img class="demo cursor" src="../images/rice.jpg" style="width:191px; height:100px; margin-left:0px" onclick="currentSlide(6)" alt="<b>Rice & Bytes Restaurant</b><br>Click on an item to add to cart">
    </div>  
	<div class="column">
      <img class="demo cursor" src="../images/dessert.jpg" style="width:192px; height:100px; margin-left:0px" onclick="currentSlide(7)" alt="<b>Hyve Dessert Bar</b><br>Click on an item to add to cart">
    </div>  
  </div>
</div>
	
	<br>
	
	<p class = "text1" id = "heading" style = "font-weight:bold; font-size:28px; color: 81AF2A; float:left; margin-left:10px"></p><br><br>
	<img id = "imgs" src = "" style = "height: 190px; width: 290px; float:left; margin-left: 10px; border: 2px solid white; "><br>
	
		
	<textarea rows = "5" cols = "45" class = "text1" id = "para" style = "font-weight:bold; margin-left: 20px; margin-top:-18px;outline:none; opacity: 0.8; float:left; text-align: justify; overflow: hidden; resize: none; font-family: Times New Roman, Times, seri; font-size: 20px"></textarea>
	
	<br>
	<br>
	
	<input value = "Rs." style="text-align:center; font-family: Times New Roman, Times, seri; width: 50px; font-size : 20px; float:left; margin-top: 80px; margin-left:-470px;" readonly>
	<input style="text-align:center; font-family: Times New Roman, Times, seri; font-size : 20px; float:left; margin-top: 80px; margin-left:-400px;" id="price" readonly>
	
	<button id = "totalClick" onclick = "multiply()" style = "float:right; margin-top: 40px; margin-right: 90px; width: 390px;background-color:black; border: 2px solid white;color:white;padding: 4px 30px;font-family:Times New Roman, Times, seri; font-size:18px; font-weight:bold">Click To See Total</button>
	

	<form id = "quantity" method = "POST" action = "SelectIt.php">
	<p class = "text1" id = "heading" style = "font-weight:bold; font-size:28px; color: #ffff1a; float:right; margin-right:-380px; margin-top:-95px">ENTER DETAILS TO ORDER</p><br><br><br>
	<label style = "float:right; margin-top: -85px; margin-right:-100px; color:white; font-family: Times New Roman, Times, seri; font-size: 20px">Item Name: </label>
	<input type = "text" name = "itemName" style = "float:right; margin-top: -85px; margin-right:-385px; width:240px">
	<br><br>
	<label style = "float:right; margin-top: -90px; margin-right:400px; color:white; font-family: Times New Roman, Times, seri; font-size: 20px">Quantity: </label>
	
	<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value" style = "font-weight:bold; font-size: 36px; float:right; margin-top: -100px; margin-right: 320px; cursor: pointer; color:white">-</div>
		<input name = "number" type="number" id="number" value="0" style = "font-weight:bold; font-size: 16px; float: center; float:right; margin-top: -85px; margin-right:150px; width: 150px; text-align:center">
		<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value" style = "font-weight:bold; font-size: 32px; float:right; margin-top: -95px; margin-right:100px; cursor: pointer;color:white">+</div>
	
	<input value = "Rs." style="text-align:center; font-family: Times New Roman, Times, seri; width: 50px; font-size : 20px; float:right; margin-top: -10px; margin-right:380px;" readonly>
	
	<textarea name = "tot" id = "tot"  style = "float:right; margin-top: -10px; margin-right:-280px; color:black; font-family: Times New Roman, Times, seri; font-size: 20px; height: 30px"> </textarea>
	
	<button type = "submit" id = "addCart" style = "width: 150px; float:right; margin-top: 30px; margin-right: -250px; padding: 8px 26px; background-color:black; border: 2px solid white; color:white; font-family:Times New Roman, Times, seri; font-size:18px; font-weight:bold"> Add to Cart </button>
	
	</form>
	<br><br><br><br>
	<button onclick="GoToTop()" id="Top" style = "width: 180px; float:left; margin-left: 320px; margin-top: -15px; padding: 8px 26px; background-color:81AF2A; border: 2px solid white;color:white; font-family:Times New Roman, Times, seri; font-size:18px; font-weight:bold">Back To Top</button>
	</center>

<br><br><br><br>
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