<?php	
	function GetComments($id, $page)
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		$request = $bdd->prepare('SELECT * FROM comments WHERE webcomic = ? AND page = ? AND confirmed = 1');
		$request->execute(array($id, $page));
		
		$comments = $request->fetchAll();
		
		return $comments;
	}
	
	function GetCommentsStory($name, $chapter)
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		$request = $bdd->prepare('SELECT * FROM commentsecriture WHERE storyName = ? AND chapter = ? AND confirmed = 1');
		$request->execute(array($name, $chapter));
		
		$comments = $request->fetchAll();
		
		return $comments;
	}