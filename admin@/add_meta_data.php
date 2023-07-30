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
         <h4>About  :</h4>
         </div>
         <div class="form-body">
        <form method="post" data-toggle="validator" enctype="multipart/form-data"> 
         
         <div class="form-group">
             <div class="col-md-12">
            	    <label>Meta Description</label> <span> (Please Note :Meta description takes 80 words in maximum.) </span>
            	    <textarea name="meta_description" maxlength="10" class="form-control"  ><?=$meta_description?></textarea>
             </div>
             <div class="clearfix"></div>
            </div>
<script>
  $(document).ready(function(){
      $('#tags').keyup(function(){
  var str = this.value.replace(/(\w)[\s,]+(\w?)/g, '$1, $2');
  if (str!=this.value) this.value = str; 
});
});
</script>
        <div class="form-group">
             <div class="col-md-12">
            	    <label>Meta Keyword</label>
		      <textarea name="meta_keyword" maxlength="10" class="form-control"  ><?=$meta_keyword?></textarea>

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
    

$allowed = ["meta_description","meta_keyword"];
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
		echo "<script>sweetAlert('Ok', 'Meta Data has been updated','success');window.location.href='".$_SERVER['request_uri']."';</script>";
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