<?php
session_start();
require('application/frontend/Controller/FrontendController.php');
require('application/frontend/Inc/header.php');

try {
	if (!isset($_GET['action']))
	{
		homePage();
	}
	else 
	{
		if ($_GET['action'] == 'listPosts')
			{
				if (isset($_GET['page']))
					{
						$page = $_GET['page'];
					}
			{	
				listPosts();
			}
		}	 
		elseif ($_GET['action'] == 'post') 
			{
				if (isset($_GET['id']) && $_GET['id'] > 0) 
				{
					$postId = ($_GET['id']);
					post($postId);
				} 
				else 
				{
					Echo ('Commentaire signalé merci');
				}
					} elseif ($_GET['action'] == 'addComment')
					 	{
						if (isset($_GET['id']) && $_GET['id'] > 0) 
							{
								if (!empty($_POST['author']) && !empty($_POST['comment']))
									{
										addComment($_GET['id'], $_POST['author'], $_POST['comment']);
									} 
									else 
										{
											throw new Exception ('Erreur : tous les champs ne sont pas remplis !');
										}
							} 
							else 
								{
									throw new Exception ('Erreur : aucun identifiant de billet envoyé');
								}
						} 
						elseif ($_GET['action'] == 'flag' && ($_GET['id'] > 0)) 
							{
								flag($_GET['id']);
							}
		}
	}
catch(Exception $e) 
{
	echo 'Erreur : ' . $e->getMessage();
}




