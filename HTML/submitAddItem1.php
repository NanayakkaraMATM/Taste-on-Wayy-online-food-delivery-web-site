<?php 
 require 'config.php';
?>

<?php 
	
	$msg	= $_POST["speMsg"];
	
	$sql = "insert into special_msg (id,special_text)values('','$msg')";
	
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

