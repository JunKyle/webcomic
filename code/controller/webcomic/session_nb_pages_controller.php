<?php
	if(!isset($_SESSION['nb_pages']))
	{
		include_once('code/model/webcomic/session_nb_pages_model.php');
		
		$request = GetNbPagesByWebcomicRequest($_GET['id']);
		
		$_SESSION['nb_pages'] = $request['nb'];
	}