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
         <h4>Login Interface  :</h4>
         </div>
         <div class="form-body">
        <form method="post" data-toggle="validator" enctype="multipart/form-data"> 
         
          <div class="col-sm-4">
        <label>Background Image</label>
        <span class="note">Max File size:200kb</span>
        <input type="file" name="background_img" onchange="return fileValidation('background_img','200')" id="background_img"/>
        <img src="<?=$background_img?>" width="100px" >
        </div>  
        <div class="form-group">
         <div class="col-md-12">
        	    <label>Add Sign in Title</label>
		<input type="text" class="form-control" value="<?=$signin_title?>" name="signin_title" placeholder="Ex: Welcome Admin">
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
    

$allowed = ["signin_title"];
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

if(file_exists($_FILES['background_img']['tmp_name']) || is_uploaded_file($_FILES['background_img']['tmp_name'])) {   
 $setStr .= "`background_img` = :background_img,";
 $img=$show->imageEdit($_FILES['background_img']['name']);  
 move_uploaded_file($_FILES['background_img']['tmp_name'],"../product_img/".$img);
 $params['background_img'] =$img;

}
$setStr = rtrim($setStr, ",");
$params['id'] =$cid;
$show->table ='profile';
$show->cols =$setStr;
$show->id_name ='id';
$show->params =$params;
 if($show->update_all()){
		echo "<script>sweetAlert('Ok', 'About has been updated','success');window.location.href='".$_SERVER['request_uri']."';</script>";
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