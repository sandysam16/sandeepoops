<?php
class db
{
	private $host = "localhost";
	private $username = "root";
	private $database = "login";
	private $password = "YOURNEWPASSWORD";
	protected $db;

	function __construct()
	{
		try{
			$this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->database, $this->username, $this->password);
			//echo "conection created";
		} catch(PDOException $e){
			echo "Connection Problem".$e->getMessage();
		}
	}
}
?>