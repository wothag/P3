<?php
require_once ('../frontend/model/Database.php');

class ChapterManager extends Database
{   
/**@function to get all chapter form BD */
	public function getallChapters()
    {
        $db = $this->dbConnect();
        $allChapters=$db->query('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y\') AS date_created_fr FROM chapters ORDER BY id DESC');
        return $allChapters;     
    }

	/**@function to delete a chapter
	 * @param $id
	 * @return bool
	 */
    public function deletechapter($id)
    {
        $db = $this->dbConnect();      
        $deletechapter=$db->prepare('DELETE FROM chapters WHERE id=:id');
        $affectedLines=$deletechapter->execute(array('id'=>$id));
        return $affectedLines;
    }

	/**@function to get a chapter
	 * @param $id
	 * @return bool
	 */

	public function getChapter($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y à %Hh%imin%ss\') AS date_created_fr FROM chapters WHERE id = ?');
		$req->execute(array($id));
		$data = $req->fetch();
		return $data;
	}
}
