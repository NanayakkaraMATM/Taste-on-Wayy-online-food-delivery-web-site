<?php 
 require 'config.php';
?>

<?php 
	
	$rating = $_POST["rate"];
	$name = $_POST["fname"];
	$feedback = $_POST["myText"];
	
	$sql = " insert into ratings values('','$rating','$name','$feedback')";
	
	if($con->query($sql))
	{
		echo "<script>alert('Record inserted successfuly')</script>";
		header ("Location:RatingPage.php");
	}
	else
	{
		echo "<script>alert('Error in inserting')</script>"	;
	}
	
	$con->close();

?>