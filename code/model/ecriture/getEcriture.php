<?php			
	function GetAllEcritures()
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->query('SELECT * FROM ecriture');
		
		$allEcritures = $request->fetchAll();
		
		return $allEcritures;
	}		
	
	function GetEcriture($name)
	{
		include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->prepare('SELECT * FROM ecriture WHERE name = ?');
		
		$request->execute(array($name));
		
		$ecriture = $request->fetchAll();
		
		return $ecriture;
	}
	
	function GetEcritureTitleById($name)
	{
		//include_once('code/bdd/request.php');
		$bdd = RequestConnection();
		
		$request = $bdd->prepare('SELECT w.title
		FROM ecriture AS w
		WHERE w.name = ?'
		);
		$request->execute(array($id));
		
		$webcomic = $request->fetch();
		
		return $ecriture;
	}