<?php
	class Ecriture {
		private $id;
		private $name;
		private $title;
		private $description;
		private $chapterCount;
		private $themesTags;
		private $wattpadCode;
		
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
		
		public function getDescription() {
			return $this->description;
		}
		
		public function setDescription($newDescrip) {
			$this->description = $newDescrip;
		}		
		
		public function getChapterCount()
		{
			return $this->chapterCount;
		}
		
		public function setChapterCount($newChapterCount)
		{
			$this->chapterCount = $newChapterCount;
		}	
		
		public function getThemesTags()
		{
			return $this->themesTags;
		}
		
		public function setThemesTags($newThemesTags)
		{
			$this->themesTags = $newThemesTags;
		}
		
		public function getWattpadCode()
		{
			return $this->wattpadCode;
		}
		
		public function setWattpadCode($newWattpadCode)
		{
			$this->wattpadCode = $newWattpadCode;
		}
	}
?>