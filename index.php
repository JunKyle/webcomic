<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<?php 
			include_once("code/controller/metas/metas.php");			
			GetMetas("home");
			GetOpenGraphMetas("home");
		?>
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>JunKyle</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />	

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
		<link href="css/index_home.css" rel="stylesheet">

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
		
		<div id="banniere_jumbotron">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img class="first-slide" src="images/slide1.png" alt="First slide">
					  <div class="container">
						<div class="carousel-caption">
							<h1 class="carousel-dark-title">Bienvenue sur le site de Jun Kyle</h1>	
							<p>
								Il y a plein de choses à voir dans l'univers de Jun 
								: des comics, des romans, des nouvelles et
								des poneys sanguinaires qui vous arracheront la tête dans votre sommeil.
								<br>Pour toute la famille !
							</p>
							<p>
								<a class="btn btn-primary btn-lg" href="webcomic_home.php" role="button">
									Lire quelques comics &raquo;
								</a>
							</p>
						</div>
					  </div>
					</div>
					<div class="item">
					  <img class="second-slide" src="images/slide2.png" alt="Second slide">
					  <div class="container">
						<div class="carousel-caption">
							<h1>Dernière update</h1>	
							<p>
								<a class="btn btn-primary btn-primary-2 btn-lg" href="webcomic.php?id=3&page=001" role="button">
									Echardes, un webcomic de qualité &raquo;
								</a>
							</p>
						</div>
					  </div>
					</div>
					<div class="item">
					  <img class="third-slide" src="images/slide3.png" alt="Third slide">
					  <div class="container">
						<div class="carousel-caption">
							<h1>Un nouveau chapitre tous les samedis</h1>	
							<p>
								<a class="btn btn-primary btn-primary-3 btn-lg" href="ecriture_home.php" role="button">
									Lire/Télécharger le tome 1 &raquo;
								</a>
							</p>
						</div>
					  </div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>	
		
		<!--<div class="jumbotron">
			<div class="container">
				<p>
					Il y a plein de choses à voir dans l'univers de Jun 
					: des comics, des romans, des nouvelles et
					des poneys sanguinaires qui vous arracheront la tête dans votre sommeil.
					<br>Pour toute la famille !
				</p>
			</div>
		</div>-->
		
		<?php include("footer.php"); ?>
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>
	</body>
</html>