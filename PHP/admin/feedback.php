<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from feedback where feedback_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from feedback order by feedback_id";
$res=mysqli_query($con,$sql);

?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Feedback</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>E-mail</th>
                                       <th>Subject</th>
                                       <th>Message</th>
                                       <th>Add On</th>
                                       <th width="150px"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
							               $i=1;
							               while($row=mysqli_fetch_assoc($res)){?>
							               <tr>
                                       <td class="serial" hidden="hidden"><?php echo $i?></td>
                                       <td><?php echo $row['feedback_id']?></td>
                                       <td><?php echo $row['feedback_name']?></td>
                                       <td><?php echo $row['feedback_email']?></td>
                                       <td><?php echo $row['feedback_subject']?></td> 
                                       <td><?php echo $row['feedback_message']?></td> 
                                       <td><?php echo $row['feedback_added_on']?></td>  
                                       <td>
								               <?php
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['feedback_id']."'>Delete</a></span>";
                                       ?>
							                  </td>                                                                          
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
 
<?php
require('footer.inc.php');
?>