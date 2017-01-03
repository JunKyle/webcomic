<div class="container dropdown text-center">
	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		<?php 
			echo utf8_encode("Aller à"); 
		?>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<?php 
			$nb_pages = $ecritureReader->getChapterCount();
			for ($numPage = 1; $numPage <= $nb_pages; $numPage++)
			{
				echo "<li>";
				$page = str_pad($numPage, 3, '0', STR_PAD_LEFT);
				$link = "ecriture.php?name=".$ecritureReader->getName()."&chapter=".$page;
				echo "<a href='".$link."'>";
				echo "Chapitre ".$numPage;
				echo "</a>";
				echo "</li>";
			}
		?>
	</ul>
</div>