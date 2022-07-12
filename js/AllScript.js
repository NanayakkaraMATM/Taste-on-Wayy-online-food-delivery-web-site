
function loadData(name)
{
	if(name == "button1")
	{ 
	       
       document.getElementById("para5").innerHTML = "block";
	   document.getElementById("para5").innerHTML ='12.15 PM'+Array(40).fill('\xa0').join('')+'Dispatched from the Restaurant';
	   
	  document.getElementById("para51").innerHTML = "block";
	   document.getElementById("para51").innerHTML ='13.35 PM'+Array(75).fill('\xa0').join('')+'picked up';
	   
	  
	}
    else if(name == "button2")
	{ 
	       
       document.getElementById("para6").innerHTML = "block";
	   document.getElementById("para6").innerHTML ='09.20AM'+Array(40).fill('\xa0').join('')+'Dispatched from the Restaurant';
	   
	   document.getElementById("para61").innerHTML = "block";
	   document.getElementById("para61").innerHTML ='10.10AM'+Array(75).fill('\xa0').join('')+'picked up';
	   
	}
	
	else if(name == "button3")
	{ 
	       
       document.getElementById("para7").innerHTML = "block";
	   document.getElementById("para7").innerHTML ='03.20PM'+Array(40).fill('\xa0').join('')+'Dispatched from the Restaurant';
	   
	   document.getElementById("para71").innerHTML = "block";
	   document.getElementById("para71").innerHTML ='04.10PM'+Array(75).fill('\xa0').join('')+'picked up';
	   
	}
	else if(name == "button4")
	{ 
	      
       document.getElementById("para8").innerHTML = "block";
	   document.getElementById("para8").innerHTML ='2.55PM'+Array(40).fill('\xa0').join('')+'Dispatched from the Restaurant';
	   
	   document.getElementById("para81").innerHTML = "block";
	   document.getElementById("para81").innerHTML ='3.40PM'+Array(75).fill('\xa0').join('')+'picked up';
	   
	}





}

function hide(){
	document.getElementById("para5").style.display = "none";
	document.getElementById("para51").style.display = "none";
	document.getElementById("para52").style.display = "none";
	document.getElementById("para53").style.display = "none";
}