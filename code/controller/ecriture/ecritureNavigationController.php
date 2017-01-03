<?php 

	function GetToPreviousChapter()
	{			
		if(isset($_GET['chapter']))
		{
			$previous = (int)$_GET['chapter'];
			
			if($_GET['chapter'] > 1)
			{
				$previous = $_GET['chapter'] - 1;
				$previous = str_pad($previous, 3, '0', STR_PAD_LEFT);
				return $previous;
			}
			return "001";
		}
	}

	function GetToNextChapter($nbPages)
	{					
		if(isset($_GET['chapter']))
		{
			$next = (int)$_GET['chapter'];
			
			if($_GET['chapter'] < $nbPages)
			{
				$next = $_GET['chapter'] + 1;
				$next = str_pad($next, 3, '0', STR_PAD_LEFT);
				return $next;
			}
			$nbPages = str_pad($nbPages, 3, '0', STR_PAD_LEFT);
			return $nbPages;
		}		
	}
