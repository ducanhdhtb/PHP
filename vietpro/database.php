<?php 
class database {

	protected $db_host = "localhost";
	protected $db_user = "root";
	protected $db_pass = "";
	protected $db_name = "user_management";
	protected $conn = Null;
	protected $select_db = Null;
	protected $result = NUll;
	//Method connect
	public function connect()
	{

		$this -> conn = @mysqli_connect($this -> db_host,$this -> db_user, $this->db_pass, $this->db_name);
		if($this->conn){
			$select_db = mysqli_select_db($this->conn,$this->db_name);
			if(isset($select_db)){
				/*echo "Database is "."<b style = 'Color:red'>".$this->db_name."</b>"."<br>";
				echo "Connect successfully!"."<br>";*/
			}
			
		}
		else
		{
			echo "Connect failed!";
		}
	}
	//Method disconnect
	public function disconnect(){
		if($this->conn){
			mysqli_close($this->conn);
			echo "Disconnect successfully";
		}
		else{
			echo "Not yes connect!";
		}
	}
	// Free query
	public function free_query(){
		if($this->result)
		{
			mysqli_free_result($this->result);
		}
		
	}
	//Method query
	public function query($sql){
		
			$this -> free_query();
			$this -> result = mysqli_query($this -> conn,$sql);
		
	}
	//Method num_row
	public function num_row(){
		if($this -> result){
			$rows = mysqli_num_rows($this->result);
			return $rows;
		}
	}
	//Method fetch data
	public function fetch_data(){
		if($this->result){
			$row = mysqli_fetch_array($this->result);
			return $row;
		}
	}

}

$connect = new database;
$connect -> connect();
$connect->free_query();
$connect -> query("select * from user");
/*echo "<pre>";
var_dump($connect->fetch_data()->name);
echo "</pre>";*/


?>	
