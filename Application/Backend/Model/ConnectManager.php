<?php

require_once ('../Frontend/Model/Database.php');

class ConnectManager extends Database
{
	/**
	 * @param $password
	 * @param $pseudo
	 * @return array|bool
	 */
	public function check($password , $pseudo)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT pseudo, password FROM users WHERE pseudo = ?');
		$req->execute(array($pseudo));
		$admin = $req->fetch();
			if (password_verify($password ,$admin['password']))
			{
				$adminInfo = array(
				'pseudo' => $admin['pseudo'],
				'password' => $admin['password']
				);
				return $adminInfo;

			} else
				{
				return false;
				}
	}


}