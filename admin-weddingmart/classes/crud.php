<?php
include_once 'DbConfig.php';

class Crud extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
        public function getDataUTF($query)
	{		
                mysqli_set_charset($this->connection,"utf8");
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
        
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
	public function insertData($tablename,$data){
		if(!empty($data) && !empty($tablename)){
			$sql = 'INSERT INTO '.$tablename;
			$keys = '(';
			$values = '(';
			$comma = '';
			foreach($data as $key=>$dt){
				$keys .= $comma.$key;
				$dt = $this->escape_string($dt);
				if($dt != ''){
					$values .= $comma."'".$dt."'";
				}else{
					$values .= $comma. "NULL" ;
				}
				$comma = ', ';
			}
			$keys .= ')';
			$values .= ')';
			$sql .= $keys .' VALUES '. $values;
			if ($this->connection->query($sql) === TRUE) {
				return json_encode(array('status'=>true,'message'=>$this->connection->insert_id));	
			} else {
				return json_encode(array('status'=>false,'message'=>$this->connection->error));
			}
		}
	}
	public function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
        public function generateRandonNumber($length = 6) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
}
?>
