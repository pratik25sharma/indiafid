<?php
class DbConfig 
{	
	private $_host = 'localhost';
	private $_username = 'weddi1pz_wedding';
	private $_password = '@h5h7Xp^osdT';
	private $_database = 'weddi1pz_mart_wedding';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}
                        
		}	
		
		return $this->connection;
	}
}
?>
