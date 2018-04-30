<?php
require_once ('../Frontend/Model/Database.php');

class FlagManager extends Database
{

	/**@function to fetch all flaged comments by users	 */
public function getFlagComments()
    {
        $db = $this->dbConnect();
        $flagcomment=$db->query('SELECT id, author, comment,post_id, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date_comment_fr FROM comments WHERE flag= 1');
             
     require_once ('View/Backend/CommentsView.php');
    }
}