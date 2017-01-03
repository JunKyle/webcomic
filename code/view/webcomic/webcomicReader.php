<!-- VIEW WEBCOMIC WEBCOMICREADER.PHP -->	
	
	<!-- SOCIAL NETWORK SECTION -->
	<div class="container">		
		<div class="row row-offcanvas row-offcanvas-right">
			<div class="col-xs-12 col-sm-9">
				<div class="jumbotron my_jumbotron_info">
					<div class="row">
						<!--<div class="col-xs-2 col-sm-3">-->
						<div class="col-xs-6 col-md-3">
							<img class="img-circle" src="images/<?php echo $webcomicReader->getName(); ?>/<?php echo $webcomicReader->getName(),'icon'; ?>.jpg"
							alt="'<?php echo $webcomicReader->getName(); ?>'" width="140" height="140">
						</div>
						<!--<div class="col-xs-7 col-sm-9">-->
						<div class="col-xs-12 col-md-9">
							<h2><?php echo $webcomicReader->getTitle(); ?></h2>
							<p><?php echo $webcomicReader->getDescriptionLong(); ?></p>
						</div>
					</div>
				</div>          
			</div><!--/.col-xs-12.col-sm-9-->

			<?php include_once('code/view/network/followMeView.php'); ?>
		</div><!--/row-->
	</div>

	<div class="jumbotron my_jumbotron_reader">
		<div class="container">	
			<?php include("code/view/webcomic/dropdownWebcomic.php"); ?>
			<?php include("code/view/webcomic/navigation_webcomic.php"); ?>
			<?php 
				if(isset($_GET['page']))
				{
					$page = str_pad($_GET['page'], 3, '0', STR_PAD_LEFT);
					echo "<a href='webcomic.php?id=".$webcomicReader->getId()."&page=".GetToNext($nb_pages)."'>";
					echo "<img src='images/".$webcomicReader->getName()."/".$page.".".$webcomicReader->getFormat()."' alt='".$page."'
					class='img-responsive center-block'/>"; 
					echo "</a>";
				}
			?>
			<?php include("code/view/webcomic/navigation_webcomic.php"); ?>	
		</div>
	</div>