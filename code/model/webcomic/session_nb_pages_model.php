<?php
	function GetNbPagesByWebcomicRequest($id)
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->prepare('SELECT COUNT(p.num_page) AS nb
		FROM page AS p, webcomic AS w 
		WHERE w.id = ?
		AND w.id = p.webcomic
		AND p.date < NOW()');
		$request->execute(array($id));
		
		$nb_pages = $request->fetch();
		
		return $nb_pages;
	}
	
	function GetNbPagesSession()
	{
		if(isset($_SESSION['nb_pages']))
		{
			return str_pad($_SESSION['nb_pages'], 3, '0', STR_PAD_LEFT);
		}
		return 0;
	}