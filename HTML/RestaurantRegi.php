<?php
	require 'config.php';
?>

<?php
	
	$Restaurant_Name = $_POST["restaurantName"];
	$Restaurant_Address = $_POST["restaurantAddress"];
	$Floor_Suite = $_POST["restaurantFloor"];
	$First_Name = $_POST["RestFname"];
	$Last_Name = $_POST["RestLname"];
	$Mobile_Country_Code = $_POST["RestMCc"];
	$Mobile_Number = $_POST["RestMobile"];
	$Email_Address = $_POST["RestEmail"];
	$Password = $_POST["RestPass"];
	$Confirm_Password = $_POST["RestRePass"];
	$Number_Of_Locations = $_POST["RestNumberOfLocations"];
	$Type_Of_Cuisine = $_POST["RestTypeOfCuisine"];
	
	$sql = "insert into restaurantreg values ('$Restaurant_Name', '$Restaurant_Address', '$Floor_Suite', '$First_Name', '$Last_Name', '$Mobile_Country_Code', '$Mobile_Number', '$Email_Address', '$Password', '$Confirm_Password', '$Number_Of_Locations', '$Type_Of_Cuisine')";
	
	if($con->query($sql))
	{
	echo "<script>alert('Record inserted successfuly')</script>";
	header("Location:ThankRes.php");
	}
	else
	{
	echo "<script>alert('Error in inserting')</script>" ;
	}

	$con->close();

?>