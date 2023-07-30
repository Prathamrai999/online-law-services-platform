<?php
/*$table1="ids";
$r=$show->readAll($table1);

while ($row=$r->fetch(PDO::FETCH_ASSOC))
{
$id=$row['referid'];
}
$id1=$id+1;

$stmt=$con->prepare('update ids set referid=:referid');
$stmt->bindParam(':referid', $id1);
 if($stmt->execute()){

$uid="USR".$id;

 }
*/

function getid($table,$uidname){
GLOBAL $con;
$sq="select * from $table";
$r=$con->prepare($sq);
$r->execute();
while ($row=$r->fetch(PDO::FETCH_ASSOC)){
$id=$row['referid'];
}
$id1=$id+1;

$stmt=$con->prepare('update '.$table.' set referid=:referid');
$stmt->bindParam(':referid', $id1);
if($stmt->execute()){
$uid=$uidname.$id;
} 
return $uid;    
}

echo getid('ids','USR');
?>
