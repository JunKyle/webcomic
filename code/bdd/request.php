<?php
	function RequestConnection()
	{
		try
		{
			$whitelist = array(
				'127.0.0.1',
				'::1'
			);
			
			if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist))
			{
				$bdd = new PDO('mysql:host=mysql5.web4all.fr;dbname=149731_junkyclo_bdd;charset=utf8', '149731_junkyle', 'chaussette',
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			else
			{
				$bdd = new PDO('mysql:host=localhost;dbname=junkyclo_bdd;charset=utf8', 'root', '',
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}			
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		return $bdd;
	}