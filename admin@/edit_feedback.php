<?php
include('header.php');
$insert=new Oops($db);
$show=new Oops($db);
?>
<?php
$sr='feedback';		
$count=1;
$stmt1=$show->readwithdata('feedback','id',$_REQUEST['id']);    
while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
$id=$row['id'];
$ticket_id=$row['ticket_id'];
$type=$row['type'];

$agent_id=$row['agent_id'];
$agent_name=$row['agent_name'];
$agent_phone=$row['agent_phone'];
$feedback=$row['feedback'];
$status=$row['status'];
$reply=$row['reply']==''?'':$row['reply'];

   }
   ?>
  
<div id="page-wrapper">
<div class="main-page">
<div class="row">
 <div id="col-md-6">
 <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
 <div class="form-title">
 <h4>Support/Feedback  :</h4>
 </div>
 <div class="form-body">
<form method="post" data-toggle="validator" enctype="multipart/form-data"> 
 
 <div class="form-group">

 <div class="col-md-3">
	    <label> Ticket Type</label>
 <input type="text" class="form-control"  value="<?=$type?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-3">
	    <label>Customer ID</label>
 <input type="text" class="form-control"  value="<?=$agent_id?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-3">
	    <label> Customer Name</label>
 <input type="text" class="form-control" value="<?=$agent_name?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-3">
	    <label> Customer Phone</label>
 <input type="text" class="form-control" value="<?=$agent_phone?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-12">
	    <label> Feedback/Complaint</label>
<textarea name="" class="form-control" readonly><?=$feedback?></textarea> </div>

 <div class="col-md-6">
	    <label> Reply to Feedback/Complaint</label>
<textarea class="form-control" name="reply" required><?=$reply?></textarea> </div>

 
<div class="col-md-3">
	    <label> Status</label>
 <?php 
    $interests = array('Pending','Done'); 
    ?>
    <select class="form-control" name="status" required>
    <?php foreach( $interests as  $interest ): ?>
    <option value="<?php echo $interest ?>"<?php if( $interest==$status): ?> selected="selected"<?php endif; ?>><?php echo $interest ?></option>
    <?php endforeach; ?>
    </select>
 </div>  
 </div>
  <div class="form-group">
 	<div class="col-md-6">
	
<input type="submit" class="btn btn-info" name="sub" value="Edit">
<a href='my_tickets.php' class="btn btn-success">Back</a>

 </div>	 
	<div class="clearfix"></div>
 </div>		
  
 </form> 
				
<?php

if(isset($_POST['sub'])){

$sq="update feedback set status='".$_POST['status']."',reply='".$_POST['reply']."' where id='".$_REQUEST['id']."'";
$stmt=$con->prepare($sq);
if($stmt->execute()){
	
echo "<script>sweetAlert('OK','Thank you for Reply ','success');window.location.href='".$_SERVER['REQUEST_URI']."'</script>";

	}

}
?>				
 </div>
 </div>		
 </div>	
</div>	
</div>
 </div>
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
// When the document is ready
$(document).ready(function(){
$("#date").datepicker({
format: 'dd-mm-yyyy',
});
});
</script>
<!--footer-->
<?php

include('footer.php');
?>