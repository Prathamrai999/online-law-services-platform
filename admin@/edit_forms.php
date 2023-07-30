<?php
include('header.php');
$insert=new Oops($db);
$show=new Oops($db);
?>

  
<div id="page-wrapper">
<div class="main-page">
<div class="row">
 <div id="col-md-6">
 <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
 <div class="form-title">
 <h4>Enquiry Details  :</h4>
 </div>
 <div class="form-body">
  <?php
$sr='business_forms';		
$count=1;
$stmt1=$show->readwithdata('business_forms','id',$_REQUEST['id']);    
while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
$id=$row['id'];

   ?>   
<form method="post" data-toggle="validator" enctype="multipart/form-data"> 
 
 <div class="form-group">
<div class="col-md-3">
	    <label> Enquiry For</label>
 <input type="text" class="form-control"  value="<?=$_REQUEST['enq']?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-3">
	    <label> User ID</label>
 <input type="text" class="form-control"  value="<?=$row['user_id']?>" name="file" size="30" readonly> 
 </div>

 <div class="col-md-3">
	    <label> Customer Name</label>
 <input type="text" class="form-control" value="<?=$row['name']?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-3">
	    <label> Customer Phone</label>
 <input type="text" class="form-control" value="<?=$row['phone']?>" name="file" size="30" readonly> 
 </div>
 <div class="col-md-3">
	    <label> Email</label>
 <input type="text" class="form-control" value="<?=$row['email']?>" name="file" size="30" readonly> 
</div>
 <div class="col-md-6">
	    <label>Address</label>
	     <input type="text" class="form-control" value="<?=$row['address']?>" name="file" size="30" readonly> 

</div>
 <div class="col-md-3">
	    <label> Adhaar</label>
 <input type="text" class="form-control" value="<?=$row['adhar']?>" name="file" size="30" readonly> 
</div>
 <div class="col-md-3">
	    <label> State</label>
 <input type="text" class="form-control" value="<?=$row['atate']?>" name="file" size="30" readonly> 
</div>
 <div class="col-md-3">
	    <label>Fees</label>
 <input type="text" class="form-control" value="<?=$row['fees']?>" name="file" size="30" readonly> 
</div>

<div class="col-md-3">
	    <label>Payment Status</label>
	    <?php $interests = array('Pending','Confirmed','Cancelled','Refunded');?>
	    
<select name="payment_status"   class="form-control"onchange="pstatus(<?=$count;?>)" id="pstatus<?=$count;?>">
<?php foreach( $interests as  $interest ): ?>
<option value="<?php echo $interest ?>"<?php if( $interest==$row['payment_status']): ?> selected="selected"<?php endif; ?>><?php echo $interest ?></option>
<?php endforeach; ?>
</select></div>
<div class="col-md-3">
	    <label>Status</label>

<?php $interests = array('Pending','Confirmed','Closed');?>
                            <select name="status" class="form-control"  onchange="status(<?=$count;?>)" id="status<?=$count;?>">
                            <?php foreach( $interests as  $interest ): ?>
                            <option value="<?php echo $interest ?>"<?php if( $interest==$row['status']): ?> selected="selected"<?php endif; ?>><?php echo $interest ?></option>
                            <?php endforeach; ?>
                            </select>	 
</div>
 <div class="col-md-12">
	    <label> Problem</label>
<textarea class="form-control" name="reply" readonly><?=$row['problem']?></textarea> 
</div>
	<div class="col-md-6">
	
<input type="submit" class="btn btn-info" name="sub" value="Update">
<a href='form_page.php?type=<?=$row['type']?>&pg=<?=$_REQUEST['enq']?>' class="btn btn-success">Back</a>

 </div>
 </div>
 	 
	<div class="clearfix"></div>
 </div>		
  
 </form> 
<?php } ?>				
<?php

if(isset($_POST['sub'])){
    

$allowed = ["payment_status","status"];
$params = [];
$setStr = "";
foreach ($allowed as $key)
{
    if (isset($_POST[$key]) && $key != "id")
    {
        $setStr .= "`$key` = :$key,";
        $params[$key] = $_POST[$key];
    }
}
$setStr = rtrim($setStr, ",");
$params['id'] =$id;
$show->table ='business_forms';
$show->cols =$setStr;
$show->id_name ='id';
$show->params =$params;

 if($show->update_all()){
		echo "<script>sweetAlert('Ok', 'Data has been updated','success');window.location.href='".$_SERVER['request_uri']."';</script>";
		}else{
		echo "<script>alert('Something went wrong');</script>";

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