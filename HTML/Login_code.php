<?php

require_once('config.php');

$email = $password = '';

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM customerreg  WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: search page.php");
}
else
{
	echo "Invalid email or password";
}
?>
