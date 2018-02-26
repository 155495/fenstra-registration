<?php 
include('datas/database_functions.php');
$pgs=get_all_results();
$pCnt=count($pgs);
?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>RegNO</th>
        <th>Name</th>
        <th>College</th>
        <th>Mob</th>
        <th>Events</th>
        <th>Status</th>
        <th style="width:auto !important;">Edit</th>
      </tr>
    </thead>   
    <tbody>
   <?php  for($a=0;$a<$pCnt;$a++){?>
      <tr>
      	<td class="center"><?php echo $pgs[$a]['id']; ?></td>
        <td><?php echo $pgs[$a]['name']; ?></td>
        <td><?php echo $pgs[$a]['college']; ?></td>
         <td><?php echo $pgs[$a]['phnum']; ?></td>
        <td class="center">
        			<?php if($pgs[$a]['thunt']==1){echo "T Hunt"."&#44;";}else {echo "";} ?>
					<?php if($pgs[$a]['adflm']==1){echo "Adfilm"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['bstgng']==1){echo "Best Gang"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['bstprsnlty']==1){echo "Best Personality"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['coding']==1){echo "Coding"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['gkqz']==1){echo "Quiz"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['gming']==1){echo "Gaming"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['innvtion']==1){echo "Innovation"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['paprprsntion']==1){echo "Paper Presentation"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['photgrphy']==1){echo "Photography"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['spotevntz']==1){echo "Sport Events"."&#44;";}else {echo "";} ?>
                    <?php if($pgs[$a]['webdesgn']==1){echo "Webdesign"."&#44;";}else {echo "";} ?>
                    
                    
        </td>
        <td class="center" style="width:80px;">
        <a href="db_pages/db_payment.php?id=<?php echo $pgs[$a]['id'];?>" onclick="return confirm('Are you sure you want to PAY')">
        <?php if ($pgs[$a]['status']==1){?><span style="text-align:justify center;" class="label label-success">Paid</span><?php } else{?><span class="label label-danger">Not Paid</span>  <?php }?>
         <?php if ($pgs[$a]['thunt']==1){?><span style="text-align:justify center;" class="label label-primary">Rs.225</span><?php } else{?><span class="label label-primary">Rs.200</span>  <?php }?>
        </a>			
		</td>
         <td class="center" style="width:auto !important;"><a href="db_pages/db_deleteparticipant.php?id=<?php echo $pgs[$a]['id'];?>" onclick="return confirm('Are you sure you want to Delete')">  <span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
      <?php }?>
	</tbody>
</table>
