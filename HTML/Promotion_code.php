<?php
	require 'config.php';
?>

<?php
	$Subscribed_Mail = $_POST["email"];
	
	$sql = "insert into promotionmail value('$Subscribed_Mail', '')";
	
	if($con->query($sql))
	{
	echo "<script>alert('Congratulations! You have subscribed Successfuly')</script>";
	header("Location: homepage.php");
	}
		
	else
	{
	echo "<script>alert('Error in inserting')</script>" ;
	}

	$con->close();
	

?>