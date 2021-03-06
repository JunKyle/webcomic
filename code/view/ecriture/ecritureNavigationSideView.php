<!--<div class="container">-->
	<nav>
		<div class="navigationSide text-center">
			<ul class="text-center">					
				<li>
					<button type="button" class="first btn disabled">
						<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
					</button>
				</li>				
				<?php 
					include_once("code/controller/ecriture/ecritureNavigationController.php");
					$nb_pages = $ecritureReader->getChapterCount();
					
					// PREVIOUS
					echo "<li>";
					
					echo "<button type='button' class='previous btn'>";
					echo utf8_encode("Page précédente");
					echo "</button>";
					
					if($_GET['chapter'] > 1)
					{
						echo "<button type='button' class='previousChapter hidden btn'>";
						echo "<a href='ecriture.php?name=".$ecritureReader->getName()."&chapter=".GetToPreviousChapter()."'>";
						echo utf8_encode("Chapitre précédent");
						echo "</a>";
					}
					else
					{
						echo "<button type='button' class='previousChapter hidden btn disabled'>";
						echo utf8_encode("Chapitre précédent");
					}
					
					echo "</button>";
					
					echo "</li>";
				?>
				<li>
					<button type='button' class='page_status disabled btn'>
					</button>
				</li>
				<?php
					// NEXT
					echo "<li>";				
					
					echo "<button type='button' class='next btn'>";
					echo utf8_encode("Page suivante");
					echo "</button>";
					
					if($_GET['chapter'] < $nb_pages)
					{
						echo "<button type='button' class='nextChapter hidden btn'>";
						echo "<a href='ecriture.php?name=".$ecritureReader->getName()."&chapter=".GetToNextChapter($nb_pages)."'>";
						echo utf8_encode("Chapitre suivant");
						echo "</a>";
					}
					else
					{
						echo "<button type='button' class='nextChapter hidden btn disabled'>";
						echo utf8_encode("Chapitre suivant");
					}
					
					echo "</button>";
					
					echo "</li>";
				?>
				<li>					
					<button type="button" class="last btn">
						<span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
					</button>
				</li>
			</ul>
		</div>
	</nav>
<!--</div>-->
