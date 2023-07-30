<?php
include('header.php');

$show=new Oops($db);

$show->id=$_REQUEST['id'];
$show->col='id';
$show->table=$_REQUEST['table'];

if(isset($_REQUEST['id'])){

if($show->delete()){

echo "<script>sweetAlert('OK','Your Data Successfully Deleted','success')
window.location.href='".$_REQUEST['url']."';</script>";



}
}

?>