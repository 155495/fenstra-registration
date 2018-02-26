<?php if (!session_id()) session_start(); 
if(isset($_SESSION['adm']))
	{
		session_destroy();
	}	
header("Location:../signin.php");
?>