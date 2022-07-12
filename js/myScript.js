/*Set heights of textareas*/
function setHeight(){
	document.getElementById("name").style.height = "30px";
	document.getElementById("email").style.height = "30px";
	document.getElementById("subject").style.height = "30px";
	document.getElementById("write").style.height = "110px";
}

function setSize(){
	document.getElementById("restaurantName").style.height = "25px";
	document.getElementById("restaurantAddress").style.height = "25px";
	document.getElementById("restaurantFloor").style.height = "25px";
	document.getElementById("firstName").style.height = "25px";
	document.getElementById("lastName").style.height = "25px";
	document.getElementById("mobile").style.height = "25px";
	document.getElementById("email").style.height = "25px";
	document.getElementById("password").style.height = "25px";
	document.getElementById("confirmPassword").style.height = "25px";
}

/*Function to add more lines in the textarea*/
function addLines(){
	document.getElementById("write").style.height = "200px";
}

/*Function to remove all the entered text*/
function eraseText(){
	document.getElementById("name").value = "";
	document.getElementById("email").value = "";
	document.getElementById("subject").value = "";
	document.getElementById("write").value = "";
}

function eraseData(){
	document.getElementById("restaurantName").value = "";
	document.getElementById("restaurantAddress").value = "";
	document.getElementById("restaurantFloor").value = "";
	document.getElementById("firstName").value = "";
	document.getElementById("lastName").value = "";
	document.getElementById("mobile").value = "";
	document.getElementById("email").value = "";
	document.getElementById("password").value = "";
	document.getElementById("confirmPassword").value = "";
}

var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

/*Function to check if checkbox is clicked*/
function enableButton()
{
	if(document.getElementById("checkAccept").checked){
		document.getElementById("btnSubmit").disabled = false;
	}
	else{
		document.getElementById("btnSubmit").disabled = true;
	}
}

/*Function to show password as text*/
function showPass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
  var y = document.getElementById("confirmPassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

/*Function to validate passwords*/
function checkPassword()
{
	if(document.getElementById("password").value != document.getElementById("confirmPassword").value){
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("You have registered succesfully!");
		return true;
	}
}

/*Function to display successful submission*/
function submit(){
	alert("You have submitted your enquiry successfully!");
}
