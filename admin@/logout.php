<?php

session_start();
$_SESSION['login_user']="";

unset($_SESSION['login_user']);
unset($_SESSION['Logged']);
unset($_SESSION['username']);
unset($_SESSION['sessionid']);
session_destroy();
$_SESSION['sessionid']=session_regenerate_id();

echo $_SESSION['sessionid'];

//echo "loged out successfully<a href='../index.php'>Login Again</a>";session_regenerate_id();
header('location:index.php');
?>

