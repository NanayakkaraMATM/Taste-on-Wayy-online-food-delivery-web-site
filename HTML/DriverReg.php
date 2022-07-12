<?php
	require 'config.php';
?>

<?php

	$Title = $_POST["DrivTitle"];
	$First_Name = $_POST["DrivFname"];
	$Last_Name = $_POST["DrivLname"];
	$Address = $_POST["DrivAdd1"];
	$Country = $_POST["DrivAdd2"];
	$Postal_Code = $_POST["DrivAdd3"];
	$Contact_No_Country_Code = $_POST["DrivCc"];
	$Contact_No = $_POST["DrivCno"];
	$Email = $_POST["DrivEmail"];
	$NIC_No = $_POST["DrivNIC"];
	$License_No = $_POST["DrivLNo"];
	$License_Exp = $_POST["DrivLExp"];
	$Vehicle_Type = $_POST["DrivVehiTy"];
	$Vehicle_No = $_POST["DrivVehiNo"];
	$Password = $_POST["DrivPass"];
	$Re_Enter_Password = $_POST["DrivRePass"];

	$sql = "insert into driverreg values('$Title', '$First_Name', '$Last_Name', '$Address', '$Country', '$Postal_Code', '$Contact_No_Country_Code', '$Contact_No', '$Email', '$NIC_No', '$License_No', '$License_Exp', '$Vehicle_Type', '$Vehicle_No', '$Password', '$Re_Enter_Password')";

	if($con->query($sql))
	{
	echo "<script>alert('Record inserted successfuly')</script>";
	header("Location:ThankDriver.php");
	}
	else
	{
	echo "<script>alert('Error in inserting')</script>" ;
	}

	$con->close();

?>