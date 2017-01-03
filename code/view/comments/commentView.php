<!-- VIEW COMMENTS COMMENTVIEW.PHP -->
<div class="container">
	<?php
		if(count($commentsArray) > 0)
			echo "<div class=\"page-header\">
						<h1>
							Commentaires
							<span class='glyphicon glyphicon-comment' aria-hidden='true'></span>
						</h1>
					</div>";
	?>
	<ul class="list-group">
	<?php
		foreach($commentsArray as $comment)
		{
	?>
			<li class="list-group-item">
				<h3>
					<a href="<?php echo $comment->getWebsite();?>">
						<?php echo $comment->getPseudo(); ?>
					</a>
					 - <?php echo $comment->getDateCreation(); ?>
				</h3>
				<p>
					<?php echo $comment->getCommentText(); ?>
				</p>
			</li>
		<?php
			}
		?>	
	</ul>
</div>