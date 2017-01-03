<!-- CONTROLLER ECRITURE ECRITUREREADER.PHP -->
<?php
	include_once('code/model/ecriture/getEcriture.php');
	include_once('code/classes/ecriture.class.php');
	
	$ecrituresRequest = GetEcriture($_GET['name']);
	
	$ecritureReader = new Ecriture();
	
	if(count($ecrituresRequest) == 1){
		$ecrituresRequest = array_values($ecrituresRequest)[0];
		
		$ecrituresRequest['title'] = htmlspecialchars($ecrituresRequest['title']);
		$ecrituresRequest['name'] = htmlspecialchars($ecrituresRequest['name']);
		$ecrituresRequest['description'] = nl2br(htmlspecialchars($ecrituresRequest['description']));	
		$ecrituresRequest['themes'] = htmlspecialchars($ecrituresRequest['themes']);

		$ecritureReader->setId($ecrituresRequest['id']);
		$ecritureReader->setName($ecrituresRequest['name']);
		$ecritureReader->setTitle($ecrituresRequest['title']);
		$ecritureReader->setDescription($ecrituresRequest['description']);
		$ecritureReader->setChapterCount($ecrituresRequest['chapterCount']);
		$ecritureReader->setThemesTags($ecrituresRequest['themes']);
		
		// OPEN CHAPTER FILE 
		if(isset($_GET['chapter']))
		{
			$filepath ="textes/".$ecritureReader->getName()."-chapitre".$_GET['chapter'].".txt";
			$handle = @fopen($filepath , "r");
			
			if ($handle) {
				$wordCount = 0;
				$texte ="";
				while (($buffer = fgets($handle, 4096)) !== false) {
					$buffer=str_replace("\n","<br>",$buffer);
					$buffer=str_replace("\t","&nbsp;&nbsp;&nbsp;",$buffer);
					$wordCount = $wordCount + str_word_count($buffer);
					$texte = $texte.$buffer;
				}
				
				if (!feof($handle)) {
					echo "Erreur: lecture du chapitre a échoué\n";
				}
				fclose($handle);
				//$desired_width = 2500;
				//$chapterDivision = wordwrap($texte, $desired_width, "***");
				$chapterDivision = explode("***",$texte);	
			}
					
		}	
		
		include_once('code/view/ecriture/ecritureReaderView.php');
	}
