<?php
	require 'config.php';
?>

<?php
	$Title = $_POST["CusTitle"];
	$First_Name = $_POST["CusFname"];
	$Last_Name = $_POST["CusLname"];
	$Address = $_POST["CusAdd1"];
	$Country = $_POST["CusAdd2"];
	$Postal_Code = $_POST["CusAdd3"];
	$Contact_No_Country_Code = $_POST["CusPCc"];
	$Contact_No = $_POST["CusPhone"];
	$Email = $_POST["CusEmail"];
	$NIC_No = $_POST["CusNIC"];
	$Birthday = $_POST["CusBd"];
	$Password = $_POST["CusPw"];
	$Re_Enter_Password = $_POST["RePW"];
	
	$sql = "insert into customerreg(Title, First_Name, Last_Name, Address, Country, Postal_Code, Contact_No_Country_Code, Contact_No, Email, NIC_No, Birthday, Password, Re_Enter_Password)
	values('$Title', '$First_Name', '$Last_Name', '$Address', '$Country', '$Postal_Code', '$Contact_No_Country_Code', '$Contact_No', '$Email', '$NIC_No', '$Birthday', '$Password', '$Re_Enter_Password')";
	
	if($con->query($sql))
	{
		echo "<script>alert('Record inserted successfuly')</script>";
		header("Location:payment.php");
	}
	else
	{
		echo "<script>alert('Error in inserting')</script>"	;
	}
	
	$con->close();

?>
	
	