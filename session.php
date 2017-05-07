<?php
/*Startet Sessions*/
session_start();


$session_check=false;
/*überprüft ob Session Variable gesetzt ist -> setzt sessions_check auf true*/
if (isset($_SESSION['id'])) 
{
	$session_check=true;
}
?>