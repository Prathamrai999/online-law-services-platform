<?php
//include '../settings/db_settings.php';
//$servername = "localhost";
//$username = "itsweb_jobportal";
//$password = "hackit_321";
try {
    $con = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_pass);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    ?>