<div class="container dropdown">
	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		<?php echo utf8_encode("Aller à"); ?>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<?php 
			include_once('code/model/webcomic/session_nb_pages_model.php');
			$nb_pages = GetNbPagesSession();
			for ($numPage = 1; $numPage <= $nb_pages; $numPage++)
			{
				echo "<li>";
				$page = str_pad($numPage, 3, '0', STR_PAD_LEFT);
				$link = "webcomic.php?id=".$webcomicReader->getId()."&page=".$page;
				echo "<a href='".$link."'>";
				echo "Page ".$numPage;
				echo "</a>";
				echo "</li>";
			}
		?>
	</ul>
</div>