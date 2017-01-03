<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<?php $url = $_SERVER['PHP_SELF']; 
		$reg = '#^(.+[\\\/])*([^\\\/]+)$#';
		define('pagencours', preg_replace($reg, '$2', $url)); ?>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<img src="images/avatar.jpg" class="img-responsive center-block" href="index.php" alt="avatar" width="50" height="50"/>					
				</li>
				<li>					
					<a href="index.php">
						JunkyClo's website
					</a>					
				</li>				
				<?php				
					if(strpos(pagencours, 'index.php') !== false)
						echo '<li class="active">';
					else
						echo '<li>';
				?>
					<a href="index.php">Accueil</a>
				</li>				
				<?php 
					if(strpos(pagencours,'webcomic_home.php') !== false)
						echo '<li class="active">';
					else
						echo '<li>';
				?>
					<a href="webcomic_home.php">Comics</a>
				</li>
				
				<?php 
					if(strpos(pagencours,'ecriture_home.php') !== false)
						echo '<li class="active">';
					else
						echo '<li>';
				?>
					<a href="ecriture_home.php">Ecriture</a>
				</li>
				
				<?php 
					if(strpos(pagencours,'contact.php') !== false)
						echo '<li class="active">';
					else
						echo '<li>';
				?>
					<a href="contact.php">Junky Who ?</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>