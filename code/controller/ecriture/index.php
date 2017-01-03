<!-- CONTROLLER ECRITURE INDEX.PHP -->
<?php	
	include_once('code/model/ecriture/getEcriture.php');
	include_once('code/classes/ecriture.class.php');
	
	$ecrituresRequest = GetAllEcritures();
	
	$ecrituresArray = array();
	
	foreach($ecrituresRequest as $cle => $ecriture)
	{
		$tmpObject = new Ecriture();
		
		$ecrituresRequest[$cle]['title'] = htmlspecialchars($ecriture['title']);
		$ecrituresRequest[$cle]['name'] = htmlspecialchars($ecriture['name']);
		$ecrituresRequest[$cle]['description'] = nl2br(htmlspecialchars($ecriture['description']));	
		$ecrituresRequest[$cle]['wattpad_code'] = nl2br(htmlspecialchars($ecriture['wattpad_code']));	

		$tmpObject->setId($ecriture['id']);
		$tmpObject->setName($ecriture['name']);
		$tmpObject->setTitle($ecriture['title']);
		$tmpObject->setDescription($ecriture['description']);
		$tmpObject->setWattpadCode($ecriture['wattpad_code']);
		$tmpObject->setChapterCount($ecriture['chapterCount']);
		
		$ecrituresArray[] = $tmpObject;
	}	

	include_once('code/view/ecriture/index.php');
	