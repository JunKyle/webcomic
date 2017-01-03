<?php
	class Webcomic {
		private $id;
		private $name;
		private $title;
		private $descriptionShort;
		private $descriptionLong;
		private $finished;
		private $date_publication_current_page;
		private $my_comment_current_page;
		private $format;
		
		public function getId(){
			return $this->id;
		}

		public function setId($newId){
			$this->id = $newId;
		}	
		
		public function getName(){
			return $this->name;
		}

		public function setName($newName){
			$this->name = $newName;
		}					
		
		public function getTitle() {
			return $this->title;
		}
		
		public function setTitle($newTitle) {
			$this->title = $newTitle;
		}
		
		public function getDescriptionShort() {
			return $this->descriptionShort;
		}
		
		public function setDescriptionShort($newDescripShort) {
			$this->descriptionShort = $newDescripShort;
		}		
		
		public function getDescriptionLong() {
			return $this->descriptionLong;
		}
		
		public function setDescriptionLong($newDescripLong) {
			$this->descriptionLong = $newDescripLong;
		}
		
		// public function getNbPages() {
			// return str_pad($this->nbPages, 3, '0', STR_PAD_LEFT);
		// }
		
		// public function setNbPages($newNbPages) {
			// $this->nbPages = $newNbPages;
		// }
		
		public function getFinished() {
			return $this->finished;
		}
		
		public function setFinished($newFinished) {
			$this->finished = $newFinished;
		}
		
		public function getDatePublicationCurrentPage()
		{
			return $this->date_publication_current_page;
		}
		
		public function setDatePublicationCurrentPage($newDate)
		{
			$this->date_publication_current_page = $newDate;
		}
		
		public function getMyCommentCurrentPage()
		{
			return $this->my_comment_current_page;
		}
		
		public function setMyCommentCurrentPage($newComment)
		{
			$this->my_comment_current_page = $newComment;
		}
		
		public function getFormat()
		{
			return $this->format;
		}
		
		public function setFormat($newFormat)
		{
			$this->format = $newFormat;
		}
	}
?>