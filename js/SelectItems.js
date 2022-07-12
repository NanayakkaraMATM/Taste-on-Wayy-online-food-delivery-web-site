/* reference Code from W3 Schools(Strating) */

/*Function to add the slideshow*/
var slideIndex = 1;
showSlides(slideIndex);

/*Function to display next slide*/
function plusSlides(n) {
  showSlides(slideIndex += n);
}

/*Function to display current selected image as slide*/
function currentSlide(n) {
  showSlides(slideIndex = n);
}

/*Function to show slides when clicked*/
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
function size(){
	if((document.getElementById("Option")).innerHTML = "Small"){
		document.getElementById("price").value = 510.00;
	}
	else if((document.getElementById("Option")).innerHTML = "Medium"){
		document.getElementById("price").value = 970.00;
	}
}
/* reference Code from W3 Schools(Ending) */

/*Functions to load data*/
function loadData(name){
	if (name == "button1"){
		document.getElementById("heading").innerHTML = "Cheesy Vege Pizza";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/pizza1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "A fiery blend of spicy chicken sausage meat with nai miris, set upon an all new spicy sauce base topped with onion, capsicum and a double layer of mozzarella cheese.";
		document.getElementById("price").value = 1760.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	else if (name == "button2"){
		document.getElementById("heading").innerHTML = "Sausage Delight Pizza";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/pizza2.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Savory dish with extra chicken and 2 layers of mozarella. Includes pepperoni, ham, bacon, cheddar cheese and pizza sauce with whopping melted cheese.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 1760.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
		}
	else if (name == "button3"){
		document.getElementById("heading").innerHTML = "Double Pepperoni Pizza";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/pizza3.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Australian beef pepperoni in pizza sauce with a double layer of mozzarella cheese. Pieces of devilled beef complemented by fresh capsicums, onions and a double layer of mozzarella cheese.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 2130.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
		
		}
	
	else if (name == "button4"){
		document.getElementById("heading").innerHTML = "Bacon and Sausage Pizza";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/pizza4.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = " Chicken sausages & onions with a double layer of mozzarella cheese, parsley, black pepper. extra virgin oil and home made pizza sauce.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 2620.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}

	else if(name == "button5"){
		document.getElementById("heading").innerHTML = "Mini Sub Hamburger";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/burger1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Brioche bun burger topped with cheddar cheese, green salad and tomato. Beyond meat, plant-based burger patty, cheese, lettuce, tomato, sweet pickles and our special sause on a soft bun.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 550.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button6"){
		document.getElementById("heading").innerHTML = "Grilled Cheese Burger";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/burger2.jpeg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Served in Naan bread with green salad, tomato and red onion with melted Swiss cheese, rich mushroom sauce, classic sause and iceberg lettuce.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 520.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button7"){
		document.getElementById("heading").innerHTML = "Spicy Chicken Burger";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/burger3.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = " Ciabatta bread topped with edam cheese, caramelized pineapple, crispy bacon, baby rocket salad with breaded marinated chicken breast with garlic mayo sauce, tomato, homemade pickles and iceberg lettuce.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 550.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button8"){
		document.getElementById("heading").innerHTML = "Cheese Veggie Sandwich";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/sandwich1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Fresh seasonal grilled veggies, choice of pesto (no nuts) or Marinaria sauce with melted herb mozarella on a spinach wrap, toasted. Package consists of 3 sandwiches.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 340.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button9"){
		document.getElementById("heading").innerHTML = "Summertime Grilled Sandwich";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/sandwich2.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Our signature steak tips slathered with American cheese, served on a Dutch Crunch roll, Sauteed onions and peppers upon request. Package consists of 3 sandwiches.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 360.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button10"){
		document.getElementById("heading").innerHTML = "Crispy Chicken Sandwich";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/sandwich3.jpg";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 300.00;
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Our famous chicken salad, Meunster cheese, lettuce and tomatoes, served in a sun-dried tomato wrap. Package consists of 3 sandwiches.";
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button11"){
		document.getElementById("heading").innerHTML = "Pomegranate Juice";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/juice1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "500ml bottle of freshly squeezed promegranate juice, attractively packed if required for gift giving.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 1000.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	else if(name == "button12"){
		document.getElementById("heading").innerHTML = "Vegetable Juice";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/juice2.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "500ml fresh juice made from spinach, tomato, carrots. If you have any other specific orders for vegetable juices, you can add a note. Juice bottles can be bought in 100ml, 500ml, and 1 litre sizes.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 380.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	else if(name == "button13"){
		document.getElementById("heading").innerHTML = "Grape Juice";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/juice3.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "500ml fresh juice obtained from crushing and blending garden-fresh grapes. One bottle consists of 100ml, 500ml, and 1 litre.";
		document.getElementById("price").style.display = "block";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").value = 480.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button14"){
		document.getElementById("heading").innerHTML = "Smoked Salmon";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/japanese1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Gluten free on greens, house smoked salmon, windhaven farm eggs, tarragon and mixed greens.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 1250.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button15"){
		document.getElementById("heading").innerHTML = "Sushi";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/japanese2.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Seasoned rice with fish, egg and vegetables. Sold in packs of 6 pieces, 12 pieces and 24 pieces.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 1500.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}

	else if(name == "button16"){
		document.getElementById("heading").innerHTML = "Oshizushi";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/japanese3.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Sushi layered with toppings that include pickled mackarel, boiled shiltake mushrooms, thin strips of scrambled egg, boiled shell clams. The topping can also be customuzed as required.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 900.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button17"){
		document.getElementById("heading").innerHTML = "Maki";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/japanese4.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Rolled up sushi with extra ingredients and toppings customized as wanted.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 900.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button18"){
		document.getElementById("heading").innerHTML = "Chicken Fried Rice";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/rice1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "The comfort dish of Chinese food which includes white rice with soy sauce, chicken breasts, sesame oil, ginger and frozen peas.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 490.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button19"){
		document.getElementById("heading").innerHTML = "Yellow Rice";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/rice2.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Grain white rice with chicken broth, butter, onion powder, deep fried with cashew nuts.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 420.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button20"){
		document.getElementById("heading").innerHTML = "Vegetarian Mexican Rice";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/rice3.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "One pot dish with rice lightly spiced with corn, tomato, garlic, onion and jalapeno. The dish can be served as a side dish or as a part of the main dish.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 480.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button21"){
		document.getElementById("heading").innerHTML = "Chocolate Fudge Cake";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/dessert1.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Chocolatey and moist with less dense texture. Includes dark chocolate chips, cocoa powder, butter, thickened cream and frosting.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 3200.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button22"){
		document.getElementById("heading").innerHTML = "Mocha Cake";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/dessert2.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Moist and fluffy and packed with chocolate and coffee flavor. Layers of butter, chocolate ganache and chopped chocolate espresso beans between each layer.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 3500.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
	
	else if(name == "button23"){
		document.getElementById("heading").innerHTML = "Chocolate Shortbread";
		document.getElementById("imgs").style.display = "block";
		document.getElementById("imgs").src = "../images/dessert3.jpg";
		document.getElementById("para").style.display = "block";
		document.getElementById("para").innerHTML = "Buttery, extra chocolaty cookies that are crisp at the edges with a rich flavor and melty texture.";
		document.getElementById("totalClick").style.display = "block";
		document.getElementById("price").style.display = "block";
		document.getElementById("price").value = 1600.00;
		document.getElementById("quantity").style.display = "block";
		document.getElementById("addCart").style.display = "block";
		document.getElementById("Top").style.display = "block";
	}
}

/*Function to hide elements on page load*/
function hide(){
	document.getElementById("quantity").style.display = "none";
	document.getElementById("imgs").style.display = "none";
	document.getElementById("price").style.display = "none";
	document.getElementById("para").style.display = "none";
	document.getElementById("addCart").style.display = "none";
	document.getElementById("back").style.display = "none";
	document.getElementById("forward").style.display = "none";
	document.getElementById("Top").style.display = "none";
	document.getElementById("totalClick").style.display = "none";
}

function showButton(){
	document.getElementById("back").style.display = "block";
	document.getElementById("forward").style.display = "block";
}

/* reference Code from W3 Schools(Strating) */

/*Function to increase quantity*/
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

/*Function to decrease quantity*/
function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

/* reference Code from W3 Schools(Ending) */

/*Function to go to top of page*/
topButton = document.getElementById("Top");

/*Function to display button at bottom*/
window.onscroll = function() {scrollFunction()};

function scroll() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topButton.style.display = "block";
  } else {
    topButton.style.display = "none";
  }
}

/*Function to scroll back to top*/
function GoToTop() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

function multiply(){
	var a=Number(document.getElementById("price").value);
	var b=Number(document.getElementById("number").value);
	var c=a*b;
	
	document.getElementById("tot").innerHTML=c;	
}