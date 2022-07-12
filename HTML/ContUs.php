<?php
	require 'config.php';
?>

<?php
	$name = $_POST["ContUsName"];
	$Email = $_POST["ContUsEmail"];
	$Subject = $_POST["ContUsSubject"];
	$Feedback = $_POST["ContUsEmail"];

	$sql = "insert into contactus values (' ', '$name', '$Email', '$Subject', '$Feedback')";
	
	if($con->query($sql))
	{
	echo "<script>alert('Record inserted successfuly')</script>";
	header("Location:RatingPage.php");
	}
	else
	{
	echo "<script>alert('Error in inserting')</script>" ;
	}

	$con->close();
?>