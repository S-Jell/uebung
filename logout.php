<?php 
include 'session.php';
if($session_check==true)
{
	session_destroy();
	header("Location: index.php");
}
else
{
	header("Location: index.php");
}

 ?>