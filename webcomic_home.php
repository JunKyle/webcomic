<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<?php 
			include_once("code/controller/metas/metas.php");			
			GetMetas("webcomic_home");
			GetOpenGraphMetas("webcomic_home");
		?>	
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Jun's Comics</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />	

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">

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
		
		<div class="jumbotron">
			<div class="container">
				<h3 class="text-center">
					Cette page regroupe toutes les bandes dessinées réalisées au cours de mes nombreuses années à gribouiller du papier.
					Vous y trouverez des défis comme les 24h, mon webcomic principal "Echardes" ou encore mes anciennes notes de blog BD (oui on y croit)
				</h3>
			</div>
		</div>
		
		<?php
			include_once('code/bdd/connection.php');
			if (!isset($_GET['section']) OR $_GET['section'] == 'index')
			{
				include_once('code/controller/webcomic/index.php');
			}
		?>
		
		<?php include("footer.php"); ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>
	</body>
</html>