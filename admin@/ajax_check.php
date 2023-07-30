<?php
include '../settings/settings.php';
if(isset($_POST["userid"]))  
 { 
$table='product_img';
$stmt=$show->readwithdata($table,'id',$_POST['userid']);
$row = $stmt->fetch(PDO::FETCH_ASSOC);  
echo json_encode($row);  
 }
 
 if(isset($_POST['trending']))
{
$trend=trim($_POST['trending']);
$id=$_POST['id'];
$stmt=$con->prepare("update product set trending='".$trend."' where id='".$id."'");
$stmt->execute();

}
 
 if(isset($_POST['data']))
{
$id=$_POST['id'];
$stmt=$con->prepare("update ".$_POST['table']." set ".$_POST['column']."='".$_POST['data']."' where id='".$id."'");
$stmt->execute();

}
 ?>