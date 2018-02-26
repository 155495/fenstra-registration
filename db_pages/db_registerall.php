<?php 
include('../datas/DBfun.php');

if(isset($_POST['coding'])){
	$coding=1;
	}
else{
	$coding=0;
	}
	
if(isset($_POST['bstgang'])){
	$bstgng=1;
	}
else{
	$bstgng=0;
	}
if(isset($_POST['adfilm'])){
	$adflm=1;
	}
else{
	$adflm=0;
	}
if(isset($_POST['bstprsonality'])){
	$bstprsnlty=1;
	}
else{
	$bstprsnlty=0;
	}
if(isset($_POST['gnerlqz'])){
	$gkqz=1;
	}
else{
	$gkqz=0;
	}

if(isset($_POST['innovation'])){
	$innvtion=1;
	}
else{
	$innvtion=0;
	}
if(isset($_POST['webdesing'])){
	$webdesgn=1;
	}
else{
	$webdesgn=0;
	}
if(isset($_POST['gaming'])){
	$gming=1;
	}
else{
	$gming=0;
	}
if(isset($_POST['photography'])){
	$photgrphy=1;
	}
else{
	$photgrphy=0;
	}
if(isset($_POST['paprprestntion'])){
	$paprprsntion=1;
	}
else{
	$paprprsntion=0;
	}
if(isset($_POST['spotevents'])){
	$spotevntz=1;
	}
else{
	$spotevntz=0;
	}
if(isset($_POST['thunt'])){
	$thunt=1;
	}
else{
	$thunt=0;
	}

$college=$_POST['college'];
$name=$_POST['name'];
$pnum=$_POST['pnum'];

$sql="INSERT INTO `tbl_reg` (`id`, `name`, `college`, `coding`, `bstgng`, `adflm`, `bstprsnlty`, `gkqz`, `innvtion`, `webdesgn`, `gming`, `photgrphy`, `paprprsntion`, `spotevntz`, `status`, `mac_address`,`phnum`,`thunt`) VALUES (NULL, '$name', '$college', '$coding', '$bstgng', '$adflm', '$bstprsnlty', '$gkqz', '$innvtion', '$webdesgn', '$gming', '$photgrphy', '$paprprsntion', '$spotevntz', '0', '','$pnum','$thunt');";
$rs=insert_update($sql);
if($rs=="OK"){
	$msg="Registration Successfully";
	header("Location:../index.php?d=3&s=1");
	echo $msg;

}else{
	$msg="Error!!! $rs";
	header("Location:../index.php?d=1&s=0");
	echo $msg;
	}










?>