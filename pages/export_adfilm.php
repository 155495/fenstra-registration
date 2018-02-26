<?php  
//export.php  
include('../config.php');
$output = '';

 $query = "SELECT * FROM `tbl_reg` WHERE `adflm`=1";
 $result = mysqli_query($connection, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Id</th>  
                         <th>Name</th>  
                         <th>college</th>  
       <th>Mob</th>
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["college"].'</td>  
       <td>'.$row["phnum"].'</td>  
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Adfilm_List.xls');
  echo $output;
 }

?>