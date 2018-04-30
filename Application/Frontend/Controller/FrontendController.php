<?php
require_once ('Application/Frontend/Model/PostManager.php');
require_once ('Application/Frontend/Model/CommentManager.php');

/**
 * function use to signal comments and moderate them.
 * @param $id 
 */
function flag($id)
{
	$CommentManager= new CommentManager();
	$CommentManager->updateComment($id);
	echo("Le commentaire à été signalé !");
	header("Location: index.php?action=post&id=".$_POST['postid']);
}

/**
 * first page loading View screen
 */	
function homePage()
{
	require('Application/Frontend/View/Frontend/homeView.php');
}

/**
 * function calling all the chapters and pagination function
 * @param $page 
 * 
 */
function listPosts($page=null)
{
	$postManager = new PostManager();
		$posts=$postManager->getPosts();
		$total_chapters=count($posts);
		$nb_chapters_per_page = 3;
		$nb_pages = ceil($posts/$nb_chapters_per_page);
		
		$page = 1;
		
	$page_posts=$postManager->paginate($page,$nb_chapters_per_page);
	require('Application/Frontend/View/Frontend/listPostView.php');
}

/**
 * function calling post manager to print chapter and his comments associated
 * @param $postId 
 */
function post($postId)
{
	$postManager = new PostManager();
	$commentManager = new CommentManager();
	$post = $postManager->getPost($postId);
	$comments = $commentManager->getComments($postId);
	require('Application/Frontend/View/Frontend/postView.php');
}

/**
 * function to add a comment on chapter
 * @param $postId (id of the post)
 * @param $author (name of the commentator)
 * @param $comment (content of comments)
 * @throws Exception
 */
function addComment($postId, $author, $comment)
{
	$secret = "6Lf8cEsUAAAAAPdDNUSsICa9Cf8a2G-u-NWLFiu3";
	$response = $_POST['g-recaptcha-response'];
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $response;
	$decode = json_decode(file_get_contents($api_url), true);

	if ($decode['success'] == true) 
	{
		$commentManager = new CommentManager();
		$affectedLines = $commentManager->postComment($postId, $author, $comment);
	}
	else
	{
		throw new Exception('Veuillez remplir le cpatcha svp !');
	}
	if ($affectedLines === false)
	{
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
		echo ("Votre commentaire a été ajouté, merci de votre participation");
		header('Location: index.php?action=post&id=' . $postId);
}



