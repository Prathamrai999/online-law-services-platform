<?php
include('inc/database.php');
$table1="ids";
$r=$show->readAll($table1);

while ($row=$r->fetch(PDO::FETCH_ASSOC))
{
$id=$row['referid'];
}
$id1=$id+1;

$stmt=$con->prepare('update ids set referid=:referid');
$stmt->bindParam(':referid', $id1);
 if($stmt->execute()){

$uid="PRO".$id;

 }

?>
