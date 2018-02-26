<?php 

//include('config.php');

function get_all_results(){
	include_once('config.php');
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_reg` ORDER BY `id` DESC";
	$result=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['id']=$row['id'];
		$typ[$a]['adflm']=stripslashes($row['adflm']);
		$typ[$a]['bstgng']=stripslashes($row['bstgng']);
		$typ[$a]['bstprsnlty']=stripslashes($row['bstprsnlty']);
		$typ[$a]['coding']=stripslashes($row['coding']);
		$typ[$a]['college']=stripslashes($row['college']);
		$typ[$a]['gkqz']=stripslashes($row['gkqz']);
		$typ[$a]['gming']=stripslashes($row['gming']);
		$typ[$a]['innvtion']=stripslashes($row['innvtion']);
		$typ[$a]['mac_address']=stripslashes($row['mac_address']);
		$typ[$a]['name']=stripslashes($row['name']);
		$typ[$a]['paprprsntion']=stripslashes($row['paprprsntion']);
		$typ[$a]['photgrphy']=stripslashes($row['photgrphy']);
		$typ[$a]['spotevntz']=stripslashes($row['spotevntz']);
		$typ[$a]['status']=stripslashes($row['status']);
		$typ[$a]['webdesgn']=stripslashes($row['webdesgn']);
		$typ[$a]['thunt']=stripslashes($row['thunt']);
		$typ[$a]['phnum']=stripslashes($row['phnum']);
		
	$a++;
	}
	return $typ;
	
	
	}


?>