<?php
require_once 'Database.php';
class CommentManager extends Database
{
	/**
	 * @param $postId
	 * @return PDOStatement
	 */
	public function getComments($postId)
	{
		$db=$this->dbConnect();
		$comments=$db->prepare('SELECT id, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date_comment_fr FROM comments WHERE post_id=? ORDER BY id DESC LIMIT 0,10');
		$comments->execute(array($postId));
		return $comments;
	}

	/**
	 * @param $postId
	 * @param $author
	 * @param $comment
	 * @return bool
	 */
	public function PostComment($postId, $author, $comment)
	{
		$db=$this->dbconnect();
		$comments=$db->prepare('INSERT INTO comments(post_id, author, comment, date_comment) VALUES (?,?,?,NOW())');
		$affectedLines = $comments->execute(array($postId, $author, $comment));
		return $affectedLines;
	}

	/**
	 * @param $commentID
	 * @return bool
	 */
	public function updateComment($commentID)
	{
		$db=$this->dbconnect();
		$comments=$db->prepare('UPDATE  comments SET flag = 1 WHERE  id=:id');
		$affectedLines = $comments->execute(array('id'=>$commentID));
		return $affectedLines;
	}

	/**
	 * @param $postid
	 * @return bool
	 */
	public function deletecomments($postid)
	{
		$db=$this->dbconnect();        
        $deletecomment=$db->prepare('DELETE FROM comments WHERE id=:id');
        $affectedLines=$deletecomment->execute(array('id'=>$postid));
		return $affectedLines;
	}

	/**
	 * @param $postid
	 * @return bool
	 */
	public function modifycomment($postid)
	{
		$db=$this->dbconnect();        
        $modifycomment=$db->prepare('UPDATE comments SET comment = "Votre Commentaire à été modéré par l\' administrateur", flag = 0  WHERE id=:id');
        $affectedLines=$modifycomment->execute(array('id'=>$postid));
		return $affectedLines;
	}
}


