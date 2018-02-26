<?php 
$id=$_GET['id'];

include_once('../datas/DBfun.php');
$sql="DELETE FROM `tbl_reg` WHERE `id` = '$id'";
 $res=insert_update($sql);
if($res=="OK"){
	$msg="deleted";

	header("Location:../index.php?d=3&s=1");
}else{
	$msg="Error ".$res;
	header("Location:../index.php?d=3&s=0");
} 

?>