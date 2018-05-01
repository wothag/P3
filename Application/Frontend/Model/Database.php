<?php
class Database

{
	public $db;

	/**
	 * Database constructor.
	 */
	function __construct()
	{
		$this->dbConnect();
	}

	/**
	 * @return PDO
	 */
	public function dbConnect()
	{
		try{

			$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}
		catch(Exception $e)
		{
			die('Erreur :'.$e->getMessage());
		}
	}
}
$database = new Database();