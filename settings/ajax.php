<?php
include 'settings.php';


if(isset($_POST['search']))
{
$name=trim($_POST['search']);
$query2="SELECT * FROM product WHERE name LIKE '%$name%' OR category LIKE '$name%'";
$r=$con->prepare($query2);
$r->execute();
echo "<ul>";
while ($query3 = $r->fetch(PDO::FETCH_ASSOC)){
{
?>

<li class='show' align='left' onclick='fill("<?php echo $query3['name'].":".$query3['product_id'];?>")'><?php echo $query3['name']; ?></li>
<?php
}
echo "</ul>";
}
}

?>