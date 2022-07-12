function loadData(name){
	if (name == "copyright"){
		document.getElementById("copyright").style.color = "red";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "Werespects copyright law and expects theusers of our Application to do the same. It is our policy to terminate in appropriate circumstances Users or other account holders who (repeatedly) infringe or are believed to be (repeatedly) infringing the rights of copyright holders.";
	}
	else if (name == "ownership"){
		document.getElementById("ownership").style.color = "red";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "The user has a non-exclusive, non-transferable, non-sub licensable, non-assignable license during the agreed period to use the services in this application solely for the purpose of obtaining outlet services, requesting for delivery of orders placed, effecting payments for orders placed and for tracking order until its collected or is delivered to a given location. <br><br> All rights not expressly granted to the user are reserved by us, our affiliates and their respective licensors. We alone shall own all right, title and interest, including all related intellectual property rights, in and to the application and the service and any suggestions, ideas, enhancement requests, feedback, recommendations or other information provided by you or any other party relating to the application or the service.";
	}
	else if (name == "thirdParty"){
		document.getElementById("thirdParty").style.color = "red";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "During the use of, the Application and the Service, links to websites that are owned and controlled by third parties may be provided from time to time in order to enter into correspondence with, purchase goods or services from, participate in promotions of third parties. These links take you off the Application and the Service and are beyond our control. <br><br> During use of, the Application and the Service, you may enter into correspondence with, purchase goods and/or services from, or participate in promotions of third party service providers, advertisers or sponsors showing their goods and/or services through a link on the Application or Service. These links take you off the Application and the Service and are beyond our control. The websites you can link to have their own separate terms and conditions as well as a privacy policy. We are not responsible and cannot be held liable for the content and activities of these websites. You therefore visit or access these websites entirely at your own risk.";
	}
}


function hide(){
	document.getElementById("description").style.display = "none";

}