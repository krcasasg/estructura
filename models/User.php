<?php
require_once __DIR__ . '/Database.php';
class User
{
	private $data;
	private $database;

	public function __construct()
	{
		$this->database = new Database;
		$this->data = array();
		$this->setProperties();
	}

	private function setProperties()
	{
		try{
			$sql = "show columns from user";
			$stmt = $this->database->db->query($sql);
			while ($row = $stmt->fetch())
			{
			    $this->data[] = $row['Field'];
			}
			echo 'call data <br>';
			foreach($this->data as $d){
				echo $d . '<br>';
			}
			echo 'end call data <br>';
		}catch(Exception $e){
			die($e->getMessage());
		}  
	}

	public function getProperties(){
		return $this->data;
	}
}
