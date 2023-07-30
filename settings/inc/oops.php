<?php
class Oops{
 
    // database connection and table name
    private $conn;
    // object properties
    public $id;
    public $name;
 
    public function __construct($db){
        $this->conn = $db;
    }
function login(){
        //select all data
        $query = "SELECT * FROM " . $this->table. " where ".$this->col1."='". $this->data1."' and ".$this->col2." ='".$this->data2."' ORDER BY id desc"; 
        //echo $query;
        //exit();
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
 
        return $stmt;
    }

function insert($table,$data) {
	
  $keys = array_keys($data);
  $values = array_values($data);
  $value_fields=":" . implode(", :", $keys);
  try {
    $stmt = $this->conn->prepare("INSERT INTO $table (".implode(',', $keys).") VALUES ($value_fields)");
//print_r($stmt);
	$r=$stmt->execute($data);
 //   echo $r;
		return $r;
		} catch(PDOException $e) {
    echo "Oops... {$e->getMessage()}";
  }
}

    // used by select drop-down list
function readAll($table){
        //select all data
        $query = "SELECT * FROM " . $table. " ORDER BY id desc";  
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
 
        return $stmt;
    }
 function readAll_clause($table,$clause){
        //select all data
        $query = "SELECT * FROM " . $table. " ".$clause."";  
      //  echo $query;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
 
        return $stmt;
    }

function state($table){
        //select all data
        $query = "SELECT * FROM " . $table. " ORDER BY id";  
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
 
        return $stmt;
    }
 
function readwithdata($table,$col,$data){
     
    $data=htmlspecialchars(strip_tags($data));
    $query = "SELECT * FROM " . $table . " WHERE " . $col . " = :" . $col . " ORDER BY id desc";
   // echo $query;
  $stmt = $this->conn->prepare( $query ); 
    $stmt->bindParam($col, $data, PDO::PARAM_STR);
    
    $stmt->execute();
  
    return $stmt;

}
function readwithdata_clause($table,$col,$data,$clause){
     
    $data=htmlspecialchars(strip_tags($data));
    $query = "SELECT * FROM " . $table . " WHERE " . $col . " = :" . $col . "  ".$clause."";
   // echo $query;
  $stmt = $this->conn->prepare( $query ); 
    $stmt->bindParam($col, $data, PDO::PARAM_STR);
    
    $stmt->execute();
  
    return $stmt;

}
function select_multi_clause(){
    
   $keys = array_keys($this->data);
   $setStr = "";
   $last_class=$this->lastclause;
   if(count($keys)==1)
   $setStr= $this->key_id;
   else{
  foreach ($keys as $key){
    $setStr .= "`$key` = :".$key." and ";
    
    }
    $setStr = rtrim($setStr, "and ");
   }
  // echo $setStr;
    $query = "SELECT * FROM " . $this->table . " WHERE ".$setStr." ".$last_class."";
// echo $query;
  $stmt = $this->conn->prepare( $query ); 
    $stmt->execute($this->data);
  
    return $stmt;

}
function update(){
    
     $query = "UPDATE
                " . $this->table . "
            SET
                registration_no = :registration_no,
                address = :address,
                landmark = :landmark,
                service_status  = :service_status
            WHERE
                order_id = :order_id";
 
    $stmt = $this->conn->prepare($query);
 
    // posted values
    $this->registration_no=htmlspecialchars(strip_tags($this->registration_no));
    $this->address=htmlspecialchars(strip_tags($this->address));
    $this->landmark=htmlspecialchars(strip_tags($this->landmark));
    $this->service_status=htmlspecialchars(strip_tags($this->service_status));
    $this->order_id=htmlspecialchars(strip_tags($this->order_id));
 
    // bind parameters
    $stmt->bindParam(':registration_no', $this->registration_no);
    $stmt->bindParam(':address', $this->address);
    $stmt->bindParam(':landmark', $this->landmark);
    $stmt->bindParam(':service_status', $this->service_status);
    $stmt->bindParam(':order_id', $this->order_id);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

function update_all(){
	
	$query = "UPDATE " . $this->table . " SET " . $this->cols . " WHERE " . $this->id_name . " = :" .$this->id_name  . "";
//echo $query;
  $stmt = $this->conn->prepare($query);
//  print_r( $this->params);

    // execute the query
    if($stmt->execute( $this->params)){
        return true;
    }
    return false;
}


function delete(){
 
    $query = "DELETE FROM " . $this->table . " WHERE " . $this->col . " = :" . $this->col . " limit 1";
//  echo $query;
  $stmt = $this->conn->prepare($query);
    $stmt->bindParam('id', $this->id);
    $stmt->execute();
 
    return $stmt;
  
}
function imageEdit($image){
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $file=explode(".",$image);
    $filename = str_replace(" ", "_", $file[0]);
    $pic=date('ymd').".".$extension;
    $img1=uniqid().$pic;    
    return $img1;
    } 

function getid($table,$uidname){
    
$query = "SELECT * FROM ".$table."";

$stmt = $this->conn->prepare($query); 
$stmt->execute();
while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
$id=$row['referid'];
}
$id1=$id+1;
$stmt=$this->conn->prepare('update '.$table.' set referid=:referid');
$stmt->bindParam(':referid', $id1);
if($stmt->execute()){
$uid=$uidname.$id;
 } 
return $uid;    
}

}
?>