<?php
	// BDD connection
	include_once('../../bdd/request.php');
	include_once('../../model/webcomic/getWebcomics.php');
	include_once('../../model/ecriture/getEcriture.php');
	include_once('sendEmailSendinBlue.php');
	$bdd = RequestConnection();	
	
	// Data check
	$date = date_create()->format('Y-m-d H:i:s');
	$pseudo = htmlspecialchars($_POST['inputPseudo']);
	$email = htmlspecialchars($_POST['inputEmail']);
	$website = htmlspecialchars($_POST['inputWebsite']);
	$comment = htmlspecialchars($_POST['inputComment']);		
	
	if($_GET['art']=="ecriture")
	{
		$chapter = $_GET['chapter'];
		$storyName = $_GET['name'];
		// Data send
		$req = $bdd->prepare('INSERT INTO commentsecriture(date, pseudo, email, website, comment, chapter, 
		storyName, confirmed) 
		VALUES(:date, :pseudo, :email, :website, :comment, :chapter, :storyName, :confirmed)');
		$req->execute(array(
			'date' => $date,
			'pseudo' => $pseudo,
			'email' => $email,
			'website' => $website,
			'comment' => $comment,
			'chapter' => $chapter,
			'storyName' => $storyName,
			'confirmed' => 0
			));
			
		$storyTitle = GetEcritureTitleById($storyName);
		$sendMailData = sendEmailWithSendinBlue($pseudo, $email, $website, $date, $comment, $chapter, $storyTitle['title']);
		
		if(isset($sendMailData))
		{
			if($sendMailData['code'] == "success")
			{	
				header("Location:../../../ecriture.php?name=".$_GET['name']."&chapter=".$_GET['chapter']."&comment=0");
			}
			else
			{	
				header("Location:../../../ecriture.php?name=".$_GET['name']."&chapter=".$_GET['chapter']."&comment=1");
			}
		}

	}
	else if($_GET['art']=="webcomic")
	{	
		$page = $_GET['page'];
		$webcomic = $_GET['id'];
		
		// Data send
		$req = $bdd->prepare('INSERT INTO comments(date, pseudo, email, website, comment, page, 
		webcomic, confirmed) 
		VALUES(:date, :pseudo, :email, :website, :comment, :page, :webcomic, :confirmed)');
		$req->execute(array(
			'date' => $date,
			'pseudo' => $pseudo,
			'email' => $email,
			'website' => $website,
			'comment' => $comment,
			'page' => $page,
			'webcomic' => $webcomic,
			'confirmed' => 0
			));
			
		$webcomicTitle = GetWebcomicTitleById($webcomic);
		$sendMailData = sendEmailWithSendinBlue($pseudo, $email, $website, $date, $comment, $page, $webcomicTitle['title']);
		
		if(isset($sendMailData))
		{
			if($sendMailData['code'] == "success")
			{	
				header("Location:../../../webcomic.php?id=".$_GET['id']."&page=".$_GET['page']."&comment=0");
			}
			else
			{	
				header("Location:../../../webcomic.php?id=".$_GET['id']."&page=".$_GET['page']."&comment=1");
			}
		}
	}	