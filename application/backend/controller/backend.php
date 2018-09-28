<?php
session_start();
$token = bin2hex(32);
$_SESSION['token'] = $token;
require_once('model/WriteManager.php');
require_once('model/ChapterManager.php');
require_once('model/ConnectManager.php');
require_once('../frontend/model/PostManager.php');
require_once('../frontend/model/CommentManager.php');
require_once('model/FlagManager.php');

	/**
	 *function using a method to check all the flag comments
	 */
	function modcomments()
	{
		if (isset($_SESSION['admin'])) {
			$FlagManager = new FlagManager();
			$FlagManager->getFlagComments();
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}


	/**
	 * @param $id
	 *
	 * function call a method to delete comments by id
	 */

	function deletecomments($id)
	{
		if (isset($_SESSION['admin'])) {
			$CommentManager = new CommentManager();
			$CommentManager->deletecomments($id);
			header("location:../backend/index.php?action=modcomments");
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}

	/**
	 * @param $id
	 * function call a method to delete chapter by id
	 */

	function deletechapter($id)
	{

		if (isset($_SESSION['admin'])) {
			$ChapterManager = new ChapterManager();
			$ChapterManager->deletechapter($id);
			header("location:../backend/index.php?action=allChapters");
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}

	/**
	 * @param $id
	 * function call a method to modify chapter by id
	 */
	function modifychapter($id)
	{
		if (isset($_SESSION['admin'])) {
			$ChapterManager = new ChapterManager();
			$data = $ChapterManager->getChapter($id);
			require('view/backend/ModifyChapterView.php');
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}


	/**
	 * @param $id
	 * Function call a method to modify comments by id
	 */
	function modifycomment($id)
	{
		if (isset($_SESSION['admin'])) {
			$CommentManager = new CommentManager();
			$CommentManager->modifycomment($id);

			header("location:../backend/index.php?action=allChapters");
			echo '<script>alert("le commentaire a été modéré");</script>';
			exit;
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}


	/**
	 *Function call a method to show all chapters
	 */
	function allchapters()
	{
		if (isset($_SESSION['admin'])) {
			$ChapterManager = new ChapterManager();
			$allchapters = $ChapterManager->getAllChapters();
			require('view/backend/AllChaptersView.php');
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}

	function writechapter()
	{
		if (isset($_SESSION['admin'])) {
			require('view/backend/WriteChapterView.php');
		} else {
			echo "vous n'êtes pas autorisé pour cette action";
		}
	}

	/**
	 * @param $title
	 * @param $author
	 * @param $content
	 * Function to write and publish new chapter in backend
	 *
	 */
	function validchapterform($title, $author, $content)
	{
		if (isset($_SESSION['token']) and isset($_POST['token']) and !empty($_SESSION['token']) and !empty($_POST['token'])) {
			if ($_SESSION['token'] == $_POST['token']) {
				$WriteManager = new WriteManager();
				$affectedLines = $WriteManager->write($title, $author, $content);
				if ($affectedLines) {
					header('location:index.php?action=allChapters');
				} else {
					echo "Erreur de vérification, vous n'êtes pas autorisé à publier ce chapitre";
				}
			}
		}
	}

	/**
	 * @param $id of the chapter (hidden $_POST['id] in form
	 * @param $title
	 * @param $author
	 * @param $content
	 * Function to modify and publish chapter in backend
	 */
	function validUpdatechapterform($id, $title, $author, $content)
	{

		if (isset($_SESSION['token']) and isset($_POST['token']) and !empty($_SESSION['token']) and !empty($_POST['token'])) {
			if ($_SESSION['token'] == $_POST['token']) {

				$WriteManager = new WriteManager();
				$affectedLines = $WriteManager->update($id, $title, $author, $content);
				if ($affectedLines) {
					header('location:index.php?action=allChapters');
				} else {
					echo "Erreur de vérification, vous n'êtes pas autorisé à publier ce chapitre";
				}
			}
		}
	}
	/**
	 *Function disconnect and killing session -> admin
	 */
	function deco()
	{
		require('view/backend/DecoView.php');
		if (isset($_SESSION['admin'])) {
			unset($_SESSION['admin']);
		}
	}

	function adminForm()
	{
		require('view/backend/CoView.php');
	}

	function checkLogin($password, $pseudo)
	{
		$connectManager = new ConnectManager();
		$adminInfo = $connectManager->check($password, $pseudo);
		if (is_array($adminInfo)) {
			$_SESSION['admin'] = true;
			$_SESSION['pseudo'] = $adminInfo['pseudo'];
			header('Location: index.php?action=allChapters');
		} else {
			echo('Votre pseudo ou votre mot de passe est incorrect !');
		}
	}

	/**
	 *function to root admin if session is set or not
	 */
	function HomeAdmin()
	{
		if (!isset($_SESSION['admin'])) {
			Adminform();
		} else {
			header('Location: index.php?action=allChapters');
		}
	}




