<div class="container">
	<div class="page-header">	
		<h1>
			Laisser un petit mot gentil 
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</h1>
	</div>
	<?php 
		if(strpos($_SERVER["REQUEST_URI"],"ecriture.php") == true)
		{
			$action = "code/controller/comments/sendComment.php?name=".$_GET['name']."&chapter=".$_GET['chapter']."&art=ecriture";
		}
		else if(strpos($_SERVER["REQUEST_URI"],"webcomic.php") == true)
		{	
			$action = "code/controller/comments/sendComment.php?id=".$_GET['id']."&page=".$_GET['page']."&art=webcomic";
		}		
	?>
	<form class="form-comment" method="post" action=<?php echo $action; ?> onsubmit="return verifForm(this)">
		<div class="form-group">
			<label for="inputPseudo">Pseudo</label>
			<input type="text" class="form-control" name="inputPseudo" 
			id="inputPseudo" placeholder="Entrez votre pseudo"
			onBlur="verifPseudo(this)">
		</div>
		<div class="form-group">
			<label for="inputEmail">Email address</label>
			<input type="email" class="form-control" name="inputEmail" 
			id="inputEmail" placeholder="Entrez votre mail"
			onBlur="verifMail(this)">
		</div>
		<div class="form-group">
			<label for="inputWebsite">Site web</label>
			<input type="text" class="form-control" name="inputWebsite" id="inputWebsite" placeholder="Votre site web ici">
		</div>	
		<div class="form-group">
			<label for="inputComment">Commentaire</label>
			<textarea class="form-control" type="text" name="inputComment" 
			id="inputComment" placeholder="Votre texte ici" rows="3"
			onBlur="verifComment(this)"></textarea>
		</div>
		<p>
			Votre commentaire apparaîtra après validation de l'auteure. Ne vous inquiétez pas
			si celui-ci ne s'affiche pas de suite.
		</p>
		<button type="submit" class="btn btn-default">Envoyer !</button>
	</form>
</div>