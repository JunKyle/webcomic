<?php
	session_start();
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php 
		include_once("code/controller/metas/metas.php");			
			GetMetas("webcomic");
			GetOpenGraphMetas("webcomic");
	?>				
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jun's Comics</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />	

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/navigation_webcomic.css" rel="stylesheet">
    <link href="css/webcomic.css" rel="stylesheet">
    <link href="css/comment_section.css" rel="stylesheet">
    <link href="css/network.css" rel="stylesheet">
	
	<script src="js/verifFormComment.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<?php include_once("code/model/googleAnalytics/analyticsTrackings.php"); ?>
	<?php 
		include("header.php");
	
		if(isset($_GET['comment']))
		{
			if($_GET['comment'] == 0)
			{
				include_once('code/view/comments/alertCommentSuccessView.php');
			}
			else
			{
				include_once('code/view/comments/alertCommentErrorView.php');
			}
		}
	
		// WEBCOMIC : INFO ABOUT, NETWORK AND READING AREA
		include_once('code/bdd/connection.php');
		if (!isset($_GET['section']) OR $_GET['section'] == 'index')
		{
			include_once('code/controller/webcomic/session_nb_pages_controller.php');
			include_once('code/controller/webcomic/webcomicReader.php');
		}	
		
		// AUTHOR COMMENT
		include_once('code/view/webcomic/webcomicAuthorCommentView.php');
		
		// COMMENTS : FORM & LIST
		include_once('code/view/comments/formComment.php');
		include_once('code/controller/comments/loadComments.php');
		
		include("footer.php"); ?>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>