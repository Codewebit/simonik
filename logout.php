<?php  
session_start();
unset($_SESSION['use_session']);
if (session_destroy()) 
{
	header("Location: login32_bkbmonik.php");
}
?>