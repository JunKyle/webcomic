<?php
	function GetMetas($title)
	{				
		switch($title)
		{
			case "home":
				echo "<meta name=\"description\" content=\"Jun Kyle regroupe ses créations notamment le webcomic Echardes et son roman Skell mis à jour régulièrement\" />\n";
				break;
				
			case "webcomic_home":
				echo "<meta name=\"description\" content=\"Jun Kyle regroupe ici son webcomic et ses bandes dessinés des 24h\" />\n";
				break;
				
			case "ecriture_home":
				echo "<meta name=\"description\" content=\"Jun Kyle regroupe ici ses projets d'écriture et sa trilogie de fantasy Skell\" />\n";
				break;
				
			case "contact":
				echo "<meta name=\"description\" content=\"Jun Kyle page de contact\" />\n";
				break;
				
			case "ecriture":
				$storyName = "";
				$storyDesc = "";
				if($_GET['name'] == "skell1")
				{
					$storyName = "Skell - Tome 1";
					$storyDesc = "Skell est une apprentie Ezelkian, la grande caste de magiciens qui dirige le pays de Sankosso. Seulement voilà, Skell en a un peu marre d'être une apprentie après six ans d'études et pas de diplôme en vue. Le jour où elle décide de tout quitter est aussi le jour où elle rencontre son nouveau professeur, Baltimore Faillaise. L'excentrique Ezelkian est bien décidé à lui pourrir la vie et à la traîner dans les pires complots.";
				}
			
				echo "<meta name=\"description\" content=\"Jun Kyle présente ".$storyName." : ".$storyDesc."\" />\n";
				break;
				
			case "webcomic":
				$comicName = "";
				$comicDesc = "";
				if($_GET['id'] == 1)
				{
					$comicName = "Vermines";
					$comicDesc = "BD réalisée dans le cadre des 24h de la BD d'Angoulême 2016";					
				}
				else if($_GET['id'] == 2)
				{
					$comicName = "Tea Time";
					$comicDesc = "BD réalisée dans le cadre des 23h de la BD en mars 2016";					
				}
				else if($_GET['id'] == 3)
				{
					$comicName = "Echardes";
					$comicDesc = "Webcomic de fantasy avec des animaux. Update tous les jours !";					
				}
				echo "<meta name=\"description\" content=\"Jun Kyle présente ".$comicName." : ".$comicDesc."\" />\n";
				break;
			
			default:
				break;
		}
		
		echo "<meta name=\"author\" content=\"Jun Kyle\" /> \n";
	}


	function GetOpenGraphMetas($title)
	{
		switch($title)
		{
			case "home":
				echo "<meta property=\"og:title\" content=\"Bienvenue sur le site de Jun Kyle\" />\n";
				echo "<meta property=\"og:url\" content=\"http://junkyle.com/\" />\n";
				echo "<meta property=\"og:image\" content=\"http://junkyle.com/images/slide1.png\" />\n";
				echo "<meta property=\"og:description\" content=\"Jun Kyle regroupe ses créations notamment le webcomic Echardes et son roman Skell mis à jour régulièrement\" />\n";
				break;
				
			case "webcomic_home":
				echo "<meta property=\"og:title\" content=\"Bienvenue sur la page des BD et webcomics\" />\n";
				echo "<meta property=\"og:url\" content=\"http://junkyle.com/webcomic_home.php\" />\n";
				echo "<meta property=\"og:image\" content=\"http://junkyle.com/images/slide1.png\" />\n";
				echo "<meta property=\"og:description\" content=\"Jun Kyle regroupe ici son webcomic et ses bandes dessinés des 24h\" />\n";
				break;
				
			case "ecriture_home":
				echo "<meta property=\"og:title\" content=\"Bienvenue sur la page des projets d'écriture\" />\n";
				echo "<meta property=\"og:url\" content=\"http://junkyle.com/ecriture_home.php\" />\n";
				echo "<meta property=\"og:image\" content=\"http://junkyle.com/images/skell1/skell1.png\" />\n";
				echo "<meta property=\"og:description\" content=\"Jun Kyle regroupe ici ses projets d'écriture et sa trilogie de fantasy Skell\" />\n";
				break;
				
			case "contact":
				echo "<meta property=\"og:title\" content=\"Bienvenue sur la page contact\" />\n";
				echo "<meta property=\"og:url\" content=\"http://junkyle.com/contact.php\" />\n";
				echo "<meta property=\"og:image\" content=\"http://junkyle.com/images/avatar.jpg\" />\n";
				echo "<meta property=\"og:description\" content=\"Jun Kyle page de contact\" />\n";
				break;
				
			case "ecriture":				
				$storyName = "";
				$storyDesc = "";
				if($_GET['name'] == "skell1")
				{
					$storyName = "Skell - Tome 1";
					$storyDesc = "Skell est une apprentie Ezelkian, la grande caste de magiciens qui dirige le pays de Sankosso. Seulement voilà, Skell en a un peu marre d'être une apprentie après six ans d'études et pas de diplôme en vue. Le jour où elle décide de tout quitter est aussi le jour où elle rencontre son nouveau professeur, Baltimore Faillaise. L'excentrique Ezelkian est bien décidé à lui pourrir la vie et à la traîner dans les pires complots.";
				}			
				
				$storyUrl = "http://junkyle.com/ecriture.php?name=".$_GET['name']."&chapter=".$_GET['chapter'];
				$storyImage = "images/".$_GET['name']."/".$_GET['name'].".png";
				
				echo "<meta property=\"og:title\" content=\"".$storyName."\" />\n";
				echo "<meta property=\"og:url\" content=\"".$storyUrl."\" />\n";
				echo "<meta property=\"og:image\" content=\"".$storyImage."\" />\n";
				echo "<meta property=\"og:description\" content=\"Jun Kyle présente ".$storyName." : ".$storyDesc."\" />\n";
			
				echo "<meta name=\"description\" content=\"Jun Kyle présente ".$storyName." : ".$storyDesc."\" />\n";
				
				break;
				
			case "webcomic":
				$comicName = "";
				$comicShortName = "";
				$comicDesc = "";
				if($_GET['id'] == 1)
				{
					$comicName = "Vermines";
					$comicShortName = "vermines";
					$comicDesc = "BD réalisée dans le cadre des 24h de la BD d'Angoulême 2016";	
				}
				else if($_GET['id'] == 2)
				{
					$comicName = "Tea Time";
					$comicShortName = "teatime";
					$comicDesc = "BD réalisée dans le cadre des 23h de la BD en mars 2016";					
				}
				else if($_GET['id'] == 3)
				{
					$comicName = "Echardes";
					$comicShortName = "echardes";
					$comicDesc = "Webcomic de fantasy avec des animaux. Update tous les jours !";					
				}
				$comicUrl = "http://junkyle.com/webcomic.php?id=".$_GET['id']."&page=".$_GET['page'];
				$comicImage = "http://junkyle.com/images/".$comicShortName."/".$comicShortName."icon.jpg";
				
				echo "<meta property=\"og:title\" content=\"".$comicName."\" />\n";
				echo "<meta property=\"og:url\" content=\"".$comicUrl."\" />\n";
				echo "<meta property=\"og:image\" content=\"".$comicImage."\" />\n";
				echo "<meta property=\"og:description\" content=\"Jun Kyle présente ".$comicName." : ".$comicDesc."\" />\n";
				break;
			
			default:
				break;
		}
		echo "<meta property=\"og:type\" content=\"website\" />\n";
		echo "<meta property=\"og:site_name\" content=\"Jun Kyle\" />\n";
	}