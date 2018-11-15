<?php
class Database
{
	
	public $db;

	public function __construct()
	 {
	 	$dsn = 'mysql:host=localhost;dbname=testbd';
		$user = 'root';
		$password = '';
		$options = array(
    				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
					);
	 	$this->db = new PDO($dsn, $user, $password, $options);
	 	var_dump($this->db);
	 } 
}