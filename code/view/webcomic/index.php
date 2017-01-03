<!-- VIEW WEBCOMIC INDEX.PHP -->
		
<div class="container marketing">
	<div class="row">
		<?php			
			foreach($webcomicsArray as $webcomic)
			{
		?>
			<div class="col-lg-4 col-md-4">
				<a class="center-block" href="webcomic.php?
					id=<?php echo $webcomic->getId(); ?>
					&page=001" role="button">
					<img class="img-circle center-block" src="images/<?php echo $webcomic->getName(); ?>/<?php echo $webcomic->getName(),'icon'; ?>.jpg"
					alt="'<?php echo $webcomic->getName(); ?>'" width="140" height="140">
				</a>
				<h2 class="text-center"><?php echo $webcomic->getTitle(); ?></h2>
				<p class="text-center"><?php echo $webcomic->getDescriptionShort(); ?></p>
				<p class="text-center">
					<a class="btn btn-default" href="webcomic.php?
						id=<?php echo $webcomic->getId(); ?>
						&page=001" role="button">Lire &raquo;
					</a>
				</p>
			</div><!-- /.col-lg-4 -->
		<?php
			}
		?>	
	</div><!-- /.row -->
</div>