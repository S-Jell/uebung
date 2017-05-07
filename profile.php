<?php 
include 'nav.php';

echo "<br>";
if($session_check==true)
{
	$username = $_SESSION['uid'];
	echo "Welcome to your profile ";
	echo $username;
}
else
{
	header("Location: index.php");
}

 ?>