<?php
	class Comment {
		private $id;
		private $dateCreation;
		private $pseudo;
		private $website;
		private $commentText;
		
		public function getId(){
			return $this->id;
		}

		public function setId($newId){
			$this->id = $newId;
		}
		
		public function getDateCreation(){
			return $this->dateCreation;
		}

		public function setDateCreation($newDateCreation){
			$this->dateCreation = $newDateCreation;
		}
		
		public function getPseudo(){
			return $this->pseudo;
		}

		public function setPseudo($newPseudo){
			$this->pseudo = $newPseudo;
		}	
		
		public function getWebsite(){
			return $this->website;
		}

		public function setWebsite($newWebsite){
			$this->website = $newWebsite;
		}
		
		public function getCommentText(){
			return $this->commentText;
		}

		public function setCommentText($newCommentText){
			$this->commentText = $newCommentText;
		}
	}