<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
			include_once("code/controller/metas/metas.php");			
			GetMetas("contact");
			GetOpenGraphMetas("contact");
		?>				
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Junky Who ?</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />	

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/network.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		</head>
	<body>	
		<?php include_once("code/model/googleAnalytics/analyticsTrackings.php"); ?>
		<?php include("header.php"); ?>
			
		<div class="container">
			<div class="row row-offcanvas row-offcanvas-right">	
				<div class="col-xs-12 col-sm-9 jumbotron">		
					<h1>Jun Qui ?</h1>		
					<div class="row">			
						<div class="col-xs-2 col-md-2">
							<img src="images/avatar.jpg" class="img-responsive" alt="avatar" width="150" height="50" />				
						</div>
						<div>
							<p>
								Venez, entrez, prenez donc un muffin et un verre de milkshake (et puis une pomme pour la forme).
								<br>
								Je suis <b>Jun</b>, et si j'ai choisi le nom de Kyle c'est pour garder la sonorité de <b>Junky</b>. Car c'est un peu ce que je suis : une
								junky, une droguée du dessin, de l'écriture, de la lecture, des jeux vidéo, des films et de My Little Pony.
								Ce site, je l'ai fait avec mes petites mains aussi bien pour avoir enfin une plateforme en ligne pour permettre au monde
								d'avoir un aperçu de mon esprit que pour m'entraîner à coder (je suis développeuse voyez-vous).
								<br>
								Alors promenez-vous, lisez une de mes <b>BD</b> ou lisez quelques uns de mes <b>écrits</b> ou soyez témoins de mes efforts
								à venir pour créer mon propre <b>jeu vidéo</b>.
								<br>
								Si vous voulez en apprendre un peu plus sur moi ou si vous voulez discuter je suis aussi sur <b>Twitter</b> (clic clic à droite).
								<br>
								En attendant, amusez-vous et n'hésitez pas à laisser votre avis ou juste à dire ce que vous pensez de ce petit site <3
							</p>
						</div>
					</div>
				</div>
				<?php include_once('code/view/network/followMeView.php'); ?>
			</div>
		</div>

		<?php include("footer.php"); ?>
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>
	</body>
</html>