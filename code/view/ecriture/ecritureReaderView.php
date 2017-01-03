<!-- VIEW ECRITURE ECRITUREREADERVIEW.PHP -->

<!-- SOCIAL NETWORK SECTION -->
<div class="container">		
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<div class="jumbotron my_jumbotron_info">
				<h2 class="story_title">
					<?php echo $ecritureReader->getTitle(); ?>
				</h2>
				<p>
					<?php echo $ecritureReader->getDescription(); ?>
					<br>
					<b>Thèmes: </b>
					<?php echo $ecritureReader->getThemesTags()."."; ?>
				</p>
			</div>          
		</div><!--/.col-xs-12.col-sm-9-->

		<?php include_once('code/view/network/followMeView.php'); ?>
	</div><!--/row-->
</div>	

<div class="container">
	<div class="jumbotron">
		<!--<div class="row">
			<div class="col-sm-9">-->
				<h3 class="story_chapter_title text-center">
					<?php
						echo "Chapitre ".$_GET['chapter'];
					?>
				</h3>
				
				<?php include("code/view/ecriture/dropdownEcriture.php"); ?>
				<?php include("code/view/ecriture/ecritureNavigationView.php"); ?>
				
				<div class="container story_reader">
					<?php 		
						echo "<div class='pages_count hidden' >";
						echo "<p>".count($chapterDivision)."</p>";
						echo "</div>";
						
						for ($i = 1; $i <= count($chapterDivision); $i++) {
							echo "<div class='story_paragraph page_".$i." hidden' >";
							echo "<p>".$chapterDivision[$i -1]."</p>";
							echo "</div>";
						}
					?>		
				</div>
				<?php include("code/view/ecriture/ecritureNavigationView.php"); ?>	
		
			</div>
		
			<!--<div class="col-sm-2">
				<div class="sideNaviReader"> <!--sidebar-module">-->
				<?php //include("code/view/ecriture/ecritureNavigationSideView.php"); ?>
				<!--</div>
			</div>-->
		<!--</div>-->
		
	</div>
</div>