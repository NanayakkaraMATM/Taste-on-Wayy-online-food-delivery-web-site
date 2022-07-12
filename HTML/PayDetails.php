<?php
	require 'config.php';
?>

<?php
	$Name_on_Card = $_POST["CardName"];
	$Card_No = $_POST["CardNo"];
	$Exp_Month = $_POST["CExpMonth"];
	$Exp_Year = $_POST["CExpYear"];
	$Cvv = $_POST["PayCvv"];
	$Email = $_POST["PayEmail"];
	
	$sql = "insert into payment values('$Name_on_Card', '$Card_No', '$Exp_Month', '$Exp_Year', '$Cvv', '$Email')";
	
	if($con->query($sql))
	{
	echo "<script>alert('Record inserted successfuly')</script>";
	header("Location:login page.php");
	}
	else
	{
	echo "<script>alert('Error in inserting')</script>" ;
	}

	$con->close();

?>