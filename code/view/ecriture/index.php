<!-- VIEW ECRITURE INDEX.PHP -->

<?php			
	foreach($ecrituresArray as $ecriture)
	{
?>
		<div class="row">
			<div class="container story_home_list">
				<div class="col-md-3 text-center">
					<?php
						$couvLink = "images/".$ecriture->getName()."/".$ecriture->getName().".png";
					?>
					<img class="" src=<?php echo $couvLink; ?>
					alt="bookcover" width="259" height="336">
				</div>
				<div class="col-md-9">
					<a class="center-block" href="ecriture.php?
						name=<?php echo $ecriture->getName(); ?>
						&chapter=001" role="button">				
					</a>
					<h2 class="text-center"><?php echo $ecriture->getTitle(); ?></h2>
					<p class="story_description text-center"><?php echo $ecriture->getDescription(); ?></p>
					<h3 class="text-center">
						<img class="" src="images/book-icon.png"
							alt="bookicon" width="30" height="30">
						<?php echo $ecriture->getChapterCount()." chapitres en cours"; ?>
					</h3>
					<!-- DOWNLOAD -->		
					<p class="story_read_button text-center">
						<a class="btn btn-default" href="ecriture.php?
							name=<?php echo $ecriture->getName(); ?>
							&chapter=001" role="button">Lire en ligne &raquo;
						</a>
					</p>
					<p class="story_link">
						<?php
							$linkPdf = "textes/download/".str_replace(' ', '', $ecriture->getTitle())."_JunKyle.pdf";
						?>
						<a class="" href=<?php echo $linkPdf; ?> >					
							<?php 
							echo "Télécharger les ".$ecriture->getChapterCount()." chapitre(s) en cours au format pdf"; 
							?>
						</a>
						<img class="" src="images/pdf-icon.png"
						alt="bookicon" width="30" height="30">
					</p>
					
					<p class="story_link">
						<?php
							$linkPdf = "textes/download/".str_replace(' ', '', $ecriture->getTitle())."_JunKyle.epub";
						?>
						<a class="" href=<?php echo $linkPdf; ?> >					
							<?php 
							echo "Télécharger les ".$ecriture->getChapterCount()." chapitre(s) en cours au format epub"; 
							?>
						</a>
						<img class="" src="images/epub-icon.png"
						alt="bookicon" width="30" height="30">
					</p>
					
					<p class="story_link">
						<?php
							$linkWattpad = "https://www.wattpad.com/story/".$ecriture->getWattpadCode()."-".$ecriture->getName();
						?>
						<a class="" href=<?php echo $linkWattpad; ?>>	
							<?php 
							echo "Lire sur Wattpad"; 
							?>
						</a>
						<img class="" src="images/wattpad-icon.png"
						alt="bookicon" width="30" height="30">
					</p>
				</div>
			</div>
		</div>
		<br>
<?php
	}
?>	