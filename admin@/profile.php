<?php
include('header.php');
?>
	<script src="sweetalert-master/dist/sweetalert.min.js"></script>
    
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
<script>
function click1(){
	
	 if (window.confirm('Really want to delete the data'))
{
    window.location.href = "delete_category.php";
	return true;
}
else return false;	  
}

</script>

		<div id="page-wrapper">
			<div class="main-page">
			
<div class="col-md-12">
<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Profile</h3> 
			</div>
			<div class="panel-body">

			<form method="post" enctype="multipart/form-data" action=""  class="form-horizontal">
	<div class="col-sm-4">
        <label>Company Name</label>
        <input type="text" class="form-control" name="company_name" value="<?=$company_name?>" />
    </div> 
    	<div class="col-sm-6">
        <label>Company Title</label>
        <input type="text" class="form-control" name="title" value="<?=$title?>" />
    </div> 
    	<div class="col-sm-2">
        <label>GSTIN</label>
        <input type="text" class="form-control" name="gst" value="<?=$gst?>" />
    </div> 
    <div class="col-sm-8">
        <label>Company Address</label>
        <input type="text" class="form-control" name="address" value="<?=$address?>" />
    </div>  
   <div class="col-sm-4">
        <label>Company website</label>
        <input type="text" class="form-control" name="website" value="<?=$website?>" />
    </div>  
    <div class="col-sm-4">
        <label>Company State</label>
         <select  name="state" class="form-control" >
        <option value="">State</option>
        <?php  
        $table1='state_list';
        $stmt=$show->state($table1);
        $num=$stmt->rowCount();
        if($num>0){
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        
        echo "<option value='".$row['state']."'";if($state==$row['state']) echo "selected"; echo ">".$row['state']."</option>";	}
        
        }
        
        ?>
        </select>		
    </div>
     <div class="col-sm-4">
        <label>Company City</label>
        <input type="text" class="form-control" name="city" value="<?=$city?>" />
    </div>  
     <div class="col-sm-4">
        <label>Company Pincode</label>
        <input type="text" class="form-control" name="pincode" value="<?=$pincode?>" />
    </div> 
     <div class="col-sm-4">
        <label>Contact Person</label>
        <input type="text" class="form-control" name="contact_person" value="<?=$contact_person?>" />
    </div>  
     <div class="col-sm-4">
        <label>Company Email</label>
        <input type="text" class="form-control" name="email" value="<?=$email?>" />
    </div>  
    <div class="col-sm-4">
        <label>Company Phone</label>
        <input type="text" class="form-control" name="phone" value="<?=$phone?>" />
    </div>  
   <div class="col-sm-4">
        <label>Watsapp NO</label>
        <input type="text" class="form-control" name="watsapp" value="<?=$watsapp?>" />
    </div>  
    <div class="col-sm-4">
        <label>Company Logo</label>      
        <span class="note">Max File size:30kb.(350*150px)</span>

        <input type="file" name="logo" onchange="return fileValidation('logo','50')" id="logo"/>
        <img src="<?=$company_logo?>" width="100px">
    </div>  
    <div class="col-sm-4">
        <label>Company Favicon</label>        
        <span class="note">Max File size:50kb.(20*20px)</span>

        <input type="file" name="favicon" onchange="return fileValidation('favicon','30')" id="favicon"/>
        <img src="<?=$favicon?>" width="100px">
    </div>  
    <div class="col-sm-4">
        <label>FaceBook Link</label>
        <input type="text" class="form-control" name="fb" value="<?=$fb?>" />
    </div>  
     <div class="col-sm-4">
        <label>Instagram Link</label>
        <input type="text" class="form-control" name="insta" value="<?=$insta?>" />
    </div>  
   <div class="col-sm-12">
        <input type="submit" name="sub" value="Submit" class="btn btn-info" />
    </div>  
   
    </div>
</form>
<?php		
 
if(isset($_POST['sub'])){

$allowed = ["company_name","address","phone","email","website","state","city","pincode","contact_person","title","fb","insta","gst","watsapp"];
$params = [];
$setStr = "";
foreach ($allowed as $key)
{
    if (isset($_POST[$key]) && $key != "uid")
    {
        $setStr .= "`$key` = :$key,";
        $params[$key] = htmlspecialchars(strip_tags($_POST[$key]));
    }
}
if(file_exists($_FILES['logo']['tmp_name']) || is_uploaded_file($_FILES['logo']['tmp_name'])) {   
 $setStr .= "`logo` = :logo,";
 $img=$show->imageEdit($_FILES['logo']['name']);  
 move_uploaded_file($_FILES['logo']['tmp_name'],"../product_img/".$img);
 $params['logo'] =$img;

}
if(file_exists($_FILES['logo']['tmp_name']) || is_uploaded_file($_FILES['favicon']['tmp_name'])) {   
 $setStr .= "`favicon` = :favicon,";
 $img=$show->imageEdit($_FILES['favicon']['name']);  
 move_uploaded_file($_FILES['favicon']['tmp_name'],"../product_img/".$img);
 $params['favicon'] =$img;

}
$setStr = rtrim($setStr, ",");
$params['id'] =$cid;
$show->table ='profile';
$show->cols =$setStr;
$show->id_name ='id';
$show->params =$params;   


$r=$show->update_all();
if($r){
    echo '<script>
        setTimeout(function() {
        swal({
            title: "Thank You!",
            text: "Your Profile has been updated",
            type: "success"
        }, function() {
            window.location = "'.$_SERVER['REQUEST_URI'].'";
        });
    }, 1000);
</script>';
}

}
        
        
        ?>	

	</div></div>
			</div>
		</div></div>
		<!--footer-->
<?php

include('footer.php');
?>	
