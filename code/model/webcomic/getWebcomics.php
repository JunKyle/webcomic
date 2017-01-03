<?php			
	function GetAllWebcomics()
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->query('SELECT * FROM webcomic');
		
		$allWebcomics = $request->fetchAll();
		
		return $allWebcomics;
	}
		
	function GetWebcomic($id, $page)
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->prepare('SELECT w.*, p.my_comment, p.date
		FROM webcomic AS w, page AS p
		WHERE w.id = ?
		AND w.id = p.webcomic
		AND p.num_page = ?
		AND p.date < NOW()'
		);
		$request->execute(array($id, $page));
		
		$webcomic = $request->fetchAll();
		
		return $webcomic;
	}
	
	function GetWebcomicTitleById($id)
	{
		//include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->prepare('SELECT w.title
		FROM webcomic AS w
		WHERE w.id = ?'
		);
		$request->execute(array($id));
		
		$webcomic = $request->fetch();
		
		return $webcomic;
	}