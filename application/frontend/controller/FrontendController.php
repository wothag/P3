<?php
//session_start();
$token = bin2hex(32);
$_SESSION['token'] = $token;
$message=null;
require_once ('application/frontend/model/PostManager.php');
require_once ('application/frontend/model/CommentManager.php');


/**
 * first page loading view screen
 */	
function homePage(){
	require('application/frontend/view/frontend/homeView.php');
}

/**
 * function calling all the chapters and pagination function
 * @param $page 
 * 
 */
function listPosts($page=null){
	$postManager = new PostManager();
	$posts=$postManager->getPosts();
	$nb_chapters_per_page = 2;
	$nb_pages = ceil($posts/$nb_chapters_per_page);

	$page = 1;
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
	$page_posts=$postManager->paginate($page,$nb_chapters_per_page);
	require('application/frontend/view/frontend/listPostView.php');
}

/**
 * function calling post manager to print chapter and his comments associated
 * @param $postId
 * @param $message
 */
function post($postId, $message=null){
    $message;
	$postManager = new PostManager();
	$commentManager = new CommentManager();
	$post = $postManager->getPost($postId);
	$comments = $commentManager->getComments($postId);
	require('application/frontend/view/frontend/postView.php');
}

/**
 * function to add a comment on chapter
 * @param $postId (id of the post)
 * @param $author (name of the commentator)
 * @param $comment (content of comments)
 */
function addComment($postId, $author, $comment){
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
    {
        if ($affectedLines === false) {
            $message='impossible d\'ajouter le message veuillez recommencer svp !';
            post($postId, $message);
        } else
            {
                $message='commentaire ajouté merci de votre participation';
                post($postId, $message);

            }
    }
}

/**
 * function use to signal comments and moderate them.
 * @param $id
 */
function flag($id, $postId, $message=null){
    $message;
    $CommentManager = new CommentManager();
    $CommentManager->updateComment($id);
    $message = 'Le commentaire a été signalé !';
//    header("location:index.php?action=listPosts");
    $postManager = new PostManager();
    $post = $postManager->getPost($postId);
    $comments = $CommentManager->getComments($postId);
    require ('application/frontend/view/frontend/postView.php');
}


