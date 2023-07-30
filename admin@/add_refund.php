<?php
include('header.php');
$insert=new Oops($db);
$show=new Oops($db);
?>

<div id="page-wrapper">
<div class="main-page">
   <script src="tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>   
 <div class="row">
 <div id="col-md-6">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
         <div class="form-title">
         <h4>Refund Policy  :</h4>
         </div>
         <div class="form-body">
        <form method="post" data-toggle="validator" enctype="multipart/form-data"> 
         
         <div class="form-group">
             <div class="col-md-12">
            	    <label>Refund Policy </label>
            	    <textarea name="refund" class="form-control"  rows="30"><?=$refund?></textarea>
             </div>
             <div class="clearfix"></div>
            </div>
               

            
        <div class="form-group">
            <div class="col-md-6">
        <input type="submit" class="btn btn-info" name="sub" value="Submit">
         </div>	 
        	<div class="clearfix"></div>
         </div>		
          
    </form> 
<?php

if(isset($_POST['sub'])){
    

$allowed = ["refund"];
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
$params['id'] =$cid;
$show->table ='profile';
$show->cols =$setStr;
$show->id_name ='id';
$show->params =$params;

 if($show->update_all()){
		echo "<script>sweetAlert('Ok', 'refund Policy has been updated','success');window.location.href='".$_SERVER['request_uri']."';</script>";
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
 
<?php

include('footer.php');
?>		