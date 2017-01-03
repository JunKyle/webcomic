<div class="container center-block">
	<nav>
		<div class="text-center">
			<ul class="pagination">
				<?php 
					include_once('code/model/webcomic/session_nb_pages_model.php');
					$nb_pages = GetNbPagesSession();
					// FIRST
					if($_GET['page'] > 1) {
						echo "<li>";
					}
					else {
						echo "<li class='disabled'>";					
					}
					echo "<a href='webcomic.php?id=".$webcomicReader->getId()."&page=".GetToFirst()."'><<</a>";
					echo "</li>";
					
					// PREVIOUS
					if($_GET['page'] > 1) {
						echo "<li>";
					}
					else {
						echo "<li class='disabled'>";					
					}
					echo "<a href='webcomic.php?id=".$webcomicReader->getId()."&page=".GetToPrevious()."'><</a>";
					echo "</li>";
				?>
				<li class='active'>
					<?php
					echo "<a>".$_GET['page']."</a>";
					?>
				</li>
				<?php
					// NEXT
					if($_GET['page'] < $nb_pages) {
						echo "<li>";
					}
					else {
						echo "<li class='disabled'>";					
					}
					echo "<a href='webcomic.php?id=".$webcomicReader->getId()."&page=".GetToNext($nb_pages)."'>></a>";
					echo "</li>";
					
					// LAST
					if($_GET['page'] < $nb_pages) {
						echo "<li>";
					}
					else {
						echo "<li class='disabled'>";					
					}
					echo "<a href='webcomic.php?id=".$webcomicReader->getId()."&page=".$nb_pages."'>>></a>";
					echo "</li>";
				?>
			</ul>
		</div>
	</nav>				
</div>		