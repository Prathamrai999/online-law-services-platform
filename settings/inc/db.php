<?php
class Db{
    
    // specify your own database credentials
    private $host = "localhost";
   // private $db_name; = "itsweb_jobportal";
  //  private $username = "itsweb_jobportal";
   // private $password = "hackit_321";
 //  GLOBAL $db_name;
    public $conn;
  
    // get the database connection
    public function getConnection(){
        GLOBAL $db_name;
        GLOBAL $db_username;
        GLOBAL $db_pass;
      
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $db_name, $db_username, $db_pass);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();    

        }
  
        return $this->conn;
    }
}
?>