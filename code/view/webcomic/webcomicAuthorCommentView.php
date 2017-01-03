<div class="container">			
	<div class="jumbotron my_jumbotron_info">		  
		<div class="row">
			<div class="col-xs-6 col-md-2">
				<img src="images/avatar.jpg" width="140" height="140">
			</div>
			<div class="col-xs-12 col-md-10">
				<p>
					<?php
						if($webcomicReader->getMyCommentCurrentPage() != "")
						{
							echo $webcomicReader->getMyCommentCurrentPage();
							echo "<br>";
							echo "<br>";
						}							
						echo utf8_encode("<em>Publié le ".$webcomicReader->getDatePublicationCurrentPage().".</em>");
					?>
					<br>
					<br>
					
					<!-- SHARING -->
					<?php $actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="waieu">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
					if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}
					(document, 'script', 'twitter-wjs');</script>
					
					<!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->
					<script src="https://apis.google.com/js/platform.js" async defer>
					  {lang: 'fr'}
					</script>			
					<!-- Placez cette balise où vous souhaitez faire apparaître le gadget bouton "Partager". -->
					<div class="g-plus" data-action="share" data-href=<?php echo $actual_link; ?>></div>
					
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
				</p>
			</div>  <!-- div col-sx col-sm -->
		</div>	<!-- div row -->		
	</div>
</div>