<?php
	include_once 'config.php';
?>

<?php
	
	$ItemName = $_POST["itemName"];
	$Quantity = $_POST["number"];
	$Price = $_POST["tot"];

	$sql = "insert into orderdetails(Order_ID,Item_Name,Quantity,Total)values('','$ItemName','$Quantity','$Price')";
	
	if (mysqli_query($con,$sql))
	{
		echo "<script>alert('Item added to cart')</script>";
		header("Location:My Shopping Cart.php");
	}

	else
	{
	echo "<script>alert('Error in adding to cart')</script>" ;
	}

	mysqli_close($con);

?>