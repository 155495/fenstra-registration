<?php 

function insert_update($sql)// function for insert or update
{include('../config.php');
	
    $result = mysqli_query($connection,$sql);
    if($result==1)
    {
       $res="OK";
    }
    else
    {
        $res=mysqli_error($connection);
    }
    return $res;
}?>