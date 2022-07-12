function checkPassword()
{
	if(document.getElementById("passd").value != document.getElementById("RePassd") .value)
	{
		alert("Password Mismatched")
		return false;
	}
	else
	{
		alert("Passowrd Matched")
		return true;
	}
}

function enableButton()
{
	if(document.getElementById("policy").checked)
	{
		document.getElementById('bt1') .disabled = false;
	}
	else
	{
		document.getElementById('bt1') .disabled = true;
	}
}
	
	

var loadFile = function(event) 
{
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
}

var loadFile = function(event) 
{
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
}

function add()
{
	
	var a=Number(document.getElementById("a2").value);
	var b=Number(document.getElementById("b2").value);
	var c=Number(document.getElementById("c2").value);
	var k=Number(document.getElementById("d2").value);
	
	var d=Number(document.getElementById("a1").value);
	var e=Number(document.getElementById("b1").value);
	var f=Number(document.getElementById("c1").value);
	var l=Number(document.getElementById("d1").value);
	
	var m=k*l;
	var g=a*d;
	var h=b*e;
	var i=c*f;
	
	var j=g+h+i+m;
	
	document.getElementById("w").innerHTML=j;	
}

