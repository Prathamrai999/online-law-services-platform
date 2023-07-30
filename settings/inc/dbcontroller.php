<?php
class DBController {

	private $host = "localhost";
//	public $user =  $db_username;
//	private $password = $db_pass;
//	private $database = $db_name;

	function __construct() {
		GLOBAL $conn;
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}

	function connectDB() {
			GLOBAL $conn;
			 GLOBAL $db_name;
        GLOBAL $db_username;
        GLOBAL $db_pass;
      
		$conn = mysqli_connect($this->host,$db_username,$db_pass);
		return $conn;
	}

	function selectDB($conn) {
					GLOBAL $conn;
			 GLOBAL $db_name;

		mysqli_select_db($conn,$db_name);
	}

	function runQuery($query) {
					GLOBAL $conn;

		$result = mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}

	function numRows($query) {
					GLOBAL $conn;

		$result  = mysqli_query($conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
}
?>
