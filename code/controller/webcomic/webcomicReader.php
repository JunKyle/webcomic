<!-- CONTROLLER WEBCOMIC WEBCOMICREADER.PHP -->
<?php	
	include_once('code/controller/webcomic/webcomicNavigation.php');
	include_once('code/model/webcomic/getWebcomics.php');
	include_once('code/classes/webcomic.class.php');
	
	$webcomicsRequest = GetWebcomic($_GET['id'], $_GET['page']);	
	$webcomicReader = new Webcomic();
	if(count($webcomicsRequest) == 1){
		
		$webcomicsRequest = array_values($webcomicsRequest)[0];
		
		$webcomicsRequest['title'] = htmlspecialchars($webcomicsRequest['title']);
		$webcomicsRequest['name'] = htmlspecialchars($webcomicsRequest['name']);
		$webcomicsRequest['description_longue'] = nl2br(htmlspecialchars($webcomicsRequest['description_longue']));	
		$webcomicsRequest['format'] = nl2br(htmlspecialchars($webcomicsRequest['format']));	
		$webcomicsRequest['date'] = htmlspecialchars($webcomicsRequest['date']);
		$webcomicsRequest['my_comment'] = nl2br(htmlspecialchars($webcomicsRequest['my_comment']));	
		

		$webcomicReader->setId($webcomicsRequest['id']);
		$webcomicReader->setName($webcomicsRequest['name']);
		$webcomicReader->setTitle($webcomicsRequest['title']);
		$webcomicReader->setDescriptionLong($webcomicsRequest['description_longue']);
		$webcomicReader->setFormat($webcomicsRequest['format']);
		$webcomicReader->setFinished($webcomicsRequest['finished']);		
		$webcomicReader->setDatePublicationCurrentPage($webcomicsRequest['date']);		
		$webcomicReader->setMyCommentCurrentPage($webcomicsRequest['my_comment']);		

		include_once('code/view/webcomic/webcomicReader.php');
	}
