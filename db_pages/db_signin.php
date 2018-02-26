<?php 
if(!session_id()) session_start();
$unm=$_POST['username'];
$pas=$_POST['password'];
if($unm!="" && $pas!=""){
	
	if($unm=="fenstra" && $pas=="fen@2018"){
		$_SESSION['adm']=$unm;
		header("Location:../index.php");
	}else{
		echo"Wrong User name or password";
	}
}?>