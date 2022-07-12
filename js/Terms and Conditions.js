function loadData(name){
	if (name == "acceptance"){
		document.getElementById("acceptance").style.color = "red";
		document.getElementById("heading").style.display = "block";
		document.getElementById("heading").innerHTML = "Acceptance of this Agreement";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "Taste On Wayy provides an online marketplace connection, using web-based technology that connects you and other consumers, restaurants and/or other businesses and independent delivery contractors. Taste On Wayy’s software permits consumers to place orders for food and/or other goods from various restaurants and businesses. Once such orders are made, the Taste On Wayy software notifies contractors that a delivery opportunity is available and the software facilitates completion of the delivery to the consumer. Taste On Wayy is not a restaurant, delivery service, or food preparation business. <br><br> The terms “User” and “Users” refer to all individuals and other persons who access or use the services, including, without limitation, any organizations that register accounts or otherwise access or use the services through their respective representatives. Except as otherwise provided in this Agreement, if you do not agree to be bound by the Agreement, you may not access or use the Services.";
	}
	else if (name == "modifications"){
		document.getElementById("modifications").style.color = "red";
		document.getElementById("heading").style.display = "block";
		document.getElementById("heading").innerHTML = "Modification";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "Taste On Wayy reserves the right to modify the terms and conditions of this Agreement or it's policies relating to the software or services at any time, effective upon posting of an updated version of this Agreement through the Services. You should regularly review this Agreement, as your continued use of the services after any such changes constitutes your agreement to such changes.";
	}
	else if (name == "terms"){
		document.getElementById("terms").style.color = "red";
		document.getElementById("heading").style.display = "block";
		document.getElementById("heading").innerHTML = "Additional Terms and Policies";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "By using the Services, you agree to be bound by this Agreement and acknowledge and agree to the collection, use, and disclosure of your personal information in accordance with Taste on Wayy’s Privacy Policy, which is incorporated in this Agreement by reference. Certain features of our Services may be subject to additional terms and conditions, which are incorporated herein by reference.";
	}
	else if (name == "rules"){
		document.getElementById("rules").style.color = "red";
		document.getElementById("heading").style.display = "block";
		document.getElementById("heading").innerHTML = "Rules and Prohibitions";
		document.getElementById("description").style.display = "block";
		document.getElementById("description").style.fontSize = "20px";
		document.getElementById("description").innerHTML = "Without limiting other rules and prohibitions in this Agreement, by using the services, you agree that: <br><br> <ul><li> You will only use the services for lawful purposes; you will not use the services for sending or storing any unlawful material or for deceptive or fraudulent purposes; and you will not engage in conduct that harms other users, Taste On Wayy's employees, or our community.</li><br><li> You will only use the services in accordance with all applicable laws, including copyrights, trade secrets, or other rights of any third party, including privacy or publicity rights.</li><br><li> You will only access the services using means explicitly authorized by Taste On Wayy.</li><br><li>You will not use another user’s account, impersonate any person or entity, or forge or manipulate headers or identifiers to disguise the origin of any content transmitted through the Services.</li><br><li>You will not use the Services to cause nuisance, annoyance or inconvenience.</li><br><li>You will not use the Services, or any content accessible through the services, for any commercial purpose, including but not limited to contacting, advertising to, soliciting or selling to, any Merchant, user or Contractor, unless DoorDash has given you prior permission to do so in writing.</li></ul>";
	}
}


function hide(){
	document.getElementById("description").style.display = "none";
	document.getElementById("heading").style.display = "none";
}