<?php

session_start();
ob_start();
include 'inc/db.php';
include 'inc/oops.php';
include 'inc/database.php';
$database = new Db();
$db = $database->getConnection();
$show=new Oops($db);
if(isset($_POST['id']))  
 {
$img=$show->imageEdit($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'],"imgs/".$img);

 $sq="update product_img set image='".$img."' where id=".$_POST['id']."";    
 $stmt=$con->prepare($sq);
 $stmt->execute();
 if($stmt->execute()){
     $delete_image=$_POST['image'];
 unlink('imgs/'.$delete_image);  

 }
 } 
?>