<!-- CONTROLLER COMMENTS LOADCOMMENTS.PHP -->
<?php
	include_once('code/model/comments/getComments.php');
	include_once('code/classes/comment.class.php');
	
	if(strpos($_SERVER["REQUEST_URI"],"ecriture.php") == true)
	{
		$commentsRequest = GetCommentsStory($_GET['name'], $_GET['chapter']);
	}
	else if(strpos($_SERVER["REQUEST_URI"],"webcomic.php") == true)
	{	
		$commentsRequest = GetComments($_GET['id'], $_GET['page']);
	}
	
	$commentsArray = array();
	foreach($commentsRequest as $cle => $comment)
	{
		$tmpObject = new Comment();
		
		$commentsRequest[$cle]['date'] = htmlspecialchars($comment['date']);
		$commentsRequest[$cle]['pseudo'] = htmlspecialchars($comment['pseudo']);
		$commentsRequest[$cle]['website'] = htmlspecialchars($comment['website']);
		$commentsRequest[$cle]['comment'] = nl2br(htmlspecialchars($comment['comment']));	

		$tmpObject->setId($comment['id']);
		$tmpObject->setDateCreation($comment['date']);
		$tmpObject->setPseudo($comment['pseudo']);
		$tmpObject->setWebsite($comment['website']);
		$tmpObject->setCommentText($comment['comment']);
		
		$commentsArray[] = $tmpObject;
	}
	
	include_once('code/view/comments/commentView.php');