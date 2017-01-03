<?php
	function sendEmailWithSendinBlue($commentPseudo, $commentMail, $commentWebsite, 
	$commentDate, $commentText, $page, $webcomic)
	{
		require('../../includes/sendinblue/mailin.php');
		
		$mailin = new Mailin("https://api.sendinblue.com/v2.0","kGJIwSqt9jEBmxd6");						
		if(strpos($_SERVER["REQUEST_URI"],"ecriture.php") == true)
		{
			$subject= "Nouveau commentaire de %s au chapitre ";
			$subjectEnvoi = sprintf($subject, "fuck");
			$bodyHtml = "<br>";
			
			$subject= "Nouveau commentaire de ".$commentPseudo." au chapitre ".$page." de l'histoire ".$webcomic;
			$subject = utf8_encode($subject);
		}
		else if(strpos($_SERVER["REQUEST_URI"],"webcomic.php") == true)
		{		
			$subject= "Nouveau commentaire de %s à la page ";
			$subjectEnvoi = sprintf($subject, "fuck");
			$bodyHtml = "<br>";
			
			$subject= "Nouveau commentaire de ".$commentPseudo." à la page ".$page." du comic ".$webcomic;
			$subject = utf8_encode($subject);
		}
		
		$bodyHtml = $commentPseudo." a dit le ".$commentDate." : <br>
					<strong>".
					$commentText.
					"</strong>
					<br>
					Son mail : ".$commentMail." <br>
					Son site : ".$commentWebsite;
		$bodyHtml = utf8_encode($bodyHtml);
		
		$data = array( "to" => array("claudine.manrique@gmail.com"=>"Admin"),
			"from" => array("claudine.manrique@gmail.com","JunKyle Comments"),
			"subject" => $subject
			,
			"html" => $bodyHtml
		);
		
		return $mailin->send_email($data);
	}