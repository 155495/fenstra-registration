<?php 
include('../datas/DBfun.php');

$id=$_GET['id'];



$sql="UPDATE `tbl_reg` SET `status` = '1' WHERE `id` = $id;";
$rs=insert_update($sql);
if($rs=="OK"){
	$msg="Successfully";
	header("Location:../index.php?d=3&s=1");
	echo $msg;

}else{
	$msg="Error!!! $rs";
	header("Location:../index.php?d=3&s=0");
	echo $msg;
	}










?>