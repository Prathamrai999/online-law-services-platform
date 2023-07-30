<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
ob_start();
session_start();
//include 'config.php';
 
include 'db_settings.php';
$link1='inc/database.php';
$link2='inc/db.php';
$link3='inc/oops.php';
$link4='inc/dbcontroller.php';

include $link1;
include $link2;
include $link3;
include $link4;

$database = new Db();
$db = $database->getConnection();
$show=new Oops($db);
$db_handle = new DBController();



$sq=$show->readAll('profile');
while($row = $sq->fetch(PDO::FETCH_ASSOC)){
$cid=$row['id'];    
$company_name=$row['company_name']==''?'NOT ADDED':$row['company_name'];
$title=$row['title']==NULL?'NOT ADDED':$row['title'];
$address=$row['address']==NULL?'NOT ADDED':$row['address'];
$phone=$row['phone']==NULL?'NOT ADDED':$row['phone'];
$watsapp=$row['watsapp']==NULL?'NOT ADDED':$row['watsapp'];
$email=$row['email']==NULL?'NOT ADDED':$row['email'];
$contact_person=$row['contact_person']==NULL?'NOT ADDED':$row['contact_person'];
$state=$row['state']==NULL?'NOT ADDED':$row['state'];
$city=$row['city']==NULL?'NOT ADDED':$row['city'];
$pincode=$row['pincode']==NULL?'NOT ADDED':$row['pincode'];
$website=$row['website']==NULL?'NOT ADDED':$row['website'];
$dir1=dirname("");
$company_logo=$row['logo']==NULL?"http://".$_SERVER['HTTP_HOST']."$dir1/product_img/head.png":"http://" . $_SERVER['SERVER_NAME']."$dir1/product_img/".$row['logo']."";
$favicon=$row['favicon']==NULL?"http://".$_SERVER['HTTP_HOST']."$dir1/product_img/head.png":"http://" . $_SERVER['SERVER_NAME']."$dir1/product_img/".$row['favicon']."";
$pic_img="http://".$_SERVER['HTTP_HOST']."$dir1/product_img";
$about=$row['about']==NULL?'':$row['about'];    
$phonepe=$row['phonepe']==NULL?'':$row['phonepe'];    
$gpay=$row['gpay']==NULL?'':$row['gpay'];   
$paytm=$row['paytm']==NULL?'':$row['paytm'];   
$fb=$row['fb']==NULL?'':$row['fb']; 
$insta=$row['insta'];  
$gst=$row['gst'];  
$privacy=$row['privacy'];  
$terms=$row['terms'];  
$meta_description=$row['meta_description'];  
$meta_keyword=$row['meta_keyword'];  
$merchant_key=$row['merchant_key'];  
$merchant_salt=$row['merchant_salt'];
$signin_title=$row['signin_title']==NULL?'NOT ADDED':$row['signin_title'];
$background_img=$row['background_img']==NULL?"http://".$_SERVER['HTTP_HOST']."$dir1/product_img/noimg.png":"http://" . $_SERVER['SERVER_NAME']."$dir1/product_img/".$row['background_img']."";
$paytm_img=$row['paytm_img']==NULL?"http://".$_SERVER['HTTP_HOST']."$dir1/product_img/noimg.png":"http://" . $_SERVER['SERVER_NAME']."$dir1/product_img/".$row['paytm_img']."";
$phonepay_img=$row['phonepay_img']==NULL?"http://".$_SERVER['HTTP_HOST']."$dir1/product_img/noimg.png":"http://" . $_SERVER['SERVER_NAME']."$dir1/product_img/".$row['phonepay_img']."";
$gpay_img=$row['gpay_img']==NULL?"http://".$_SERVER['HTTP_HOST']."$dir1/product_img/noimg.png":"http://" . $_SERVER['SERVER_NAME']."$dir1/product_img/".$row['gpay_img']."";
$notice=$row['notice']==NULL?'':$row['notice']; 
$refund=$row['refund']==NULL?'':$row['refund']; 
$link="http://".$_SERVER['HTTP_HOST'];
}

?>