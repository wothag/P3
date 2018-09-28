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
            $db = new PDO('mysql:host=db733002360.db.1and1.com;dbname=db733002360;charset=utf8', 'dbo733002360', 'T8eemnqa@69');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
//            $db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
//            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            return $db;
		}
		catch(Exception $e)
		{
			die('Erreur :'.$e->getMessage());
		}
	}
}
$database = new Database();
