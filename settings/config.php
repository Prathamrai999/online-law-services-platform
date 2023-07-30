<?php
if(isset($_POST['sub'])){
$servername = "localhost";
$username = $_POST['user'];
$password = $_POST['pass'];

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE ".$_POST['data']."";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

}

?>
<form method="post"> 
Database Name<input type="text" name="data" >
UserName<input type="text" name="user" >
Password<input type="text" name="pass" >
<input type="submit" name="sub">
</form>