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
         <h4>About  :</h4>
         </div>
         <div class="form-body">
        <form method="post" data-toggle="validator" enctype="multipart/form-data"> 
         
         <div class="form-group">
             <div class="col-md-12">
            	    <label>About US </label>
            	    <textarea name="about" class="form-control"  rows="10"><?=$about?></textarea>
             </div>
             <div class="clearfix"></div>
            </div>
        <div class="form-group">
             <div class="col-md-12">
            	    <label>Notice</label>
			<input type="text" class="form-control" value="<?=$notice?>" name="notice" placeholder="Notice">
             </div>    
       <!--<div class="form-group">
             <div class="col-md-6">
            	    <label>Paytm Number</label>
			<input type="text" class="form-control" value="<?=$paytm?>" name="paytm" placeholder="Paytm">
             </div>
        <div class="col-sm-6">
        <label>Paytm QR CODE</label>        
        <span class="note">Max File size:100kb.</span>

        <input type="file" name="paytm_img" onchange="return fileValidation('paytm','100')" id="paytm"/>
        <img src="<?=$paytm_img?>" width="100px">
    </div>  
             <div class="clearfix"></div>
            </div>        
       <div class="form-group">
             <div class="col-md-6">
            	    <label>PhonePe  Number</label>
			<input type="text" class="form-control" value="<?=$phonepe?>" name="phonepe" placeholder="PhonePe">
             </div>
         <div class="col-sm-6">
        <label>PhonePe QR CODE</label>        
        <span class="note">Max File size:100kb.</span>

        <input type="file" name="phonepay_img" onchange="return fileValidation('phonepe','100')" id="phonepe"/>
        <img src="<?=$phonepay_img?>" width="100px">
    </div>      
             <div class="clearfix"></div>
            </div>   
            <div class="form-group">
             <div class="col-md-6">
          <label>GPay Number</label>
			<input type="text" class="form-control" value="<?=$gpay?>" name="gpay" placeholder="GPay">
             </div>
            <div class="col-sm-6">
        <label>GPay QR CODE</label>        
        <span class="note">Max File size:100kb.</span>

        <input type="file" name="gpay_img" onchange="return fileValidation('gpay','100')" id="gpay"/>
        <img src="<?=$gpay_img?>" width="100px">
    </div>     
             <div class="clearfix"></div>
            </div>    --->      

            
        <div class="form-group">
            <div class="col-md-6">
        <input type="submit" class="btn btn-info" name="sub" value="Submit">
         </div>	 
        	<div class="clearfix"></div>
         </div>		
          
    </form> 
<?php

if(isset($_POST['sub'])){
    

$allowed = ["about","gpay","paytm","phonepe","notice"];
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
if(file_exists($_FILES['paytm_img']['tmp_name']) || is_uploaded_file($_FILES['paytm_img']['tmp_name'])) {   
 $setStr .= "`paytm_img` = :paytm_img,";
 $img=$show->imageEdit($_FILES['paytm_img']['name']);  
 move_uploaded_file($_FILES['paytm_img']['tmp_name'],"../product_img/".$img);
 $params['paytm_img'] =$img;

}
if(file_exists($_FILES['phonepay_img']['tmp_name']) || is_uploaded_file($_FILES['phonepay_img']['tmp_name'])) {   
 $setStr .= "`phonepay_img` = :phonepay_img,";
 $img=$show->imageEdit($_FILES['phonepe_img']['name']);  
 move_uploaded_file($_FILES['phonepay_img']['tmp_name'],"../product_img/".$img);
 $params['phonepay_img'] =$img;

}
if(file_exists($_FILES['gpay_img']['tmp_name']) || is_uploaded_file($_FILES['gpay_img']['tmp_name'])) {   
 $setStr .= "`gpay_img` = :gpay_img,";
 $img=$show->imageEdit($_FILES['gpay_img']['name']);  
 move_uploaded_file($_FILES['gpay_img']['tmp_name'],"../product_img/".$img);
 $params['gpay_img'] =$img;

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