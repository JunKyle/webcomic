<!-- CONTROLLER WEBCOMIC INDEX.PHP -->
<?php	
	include_once('code/model/webcomic/getWebcomics.php');
	include_once('code/classes/webcomic.class.php');
	
	$webcomicsRequest = GetAllWebcomics();
	
	$webcomicsArray = array();
	
	foreach($webcomicsRequest as $cle => $webcomic)
	{
		$tmpObject = new Webcomic();
		
		$webcomicsRequest[$cle]['title'] = htmlspecialchars($webcomic['title']);
		$webcomicsRequest[$cle]['name'] = htmlspecialchars($webcomic['name']);
		$webcomicsRequest[$cle]['description_short'] = nl2br(htmlspecialchars($webcomic['description_short']));	

		$tmpObject->setId($webcomic['id']);
		$tmpObject->setName($webcomic['name']);
		$tmpObject->setTitle($webcomic['title']);
		$tmpObject->setDescriptionShort($webcomic['description_short']);
		$tmpObject->setFinished($webcomic['finished']);
		
		$webcomicsArray[] = $tmpObject;
	}	

	include_once('code/view/webcomic/index.php');
	