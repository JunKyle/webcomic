<?php 
	function GetToFirst()
	{
		return "001";		
	}

	function GetToPrevious()
	{			
		if(isset($_GET['page']))
		{
			$previous = (int)$_GET['page'];
			
			if($_GET['page'] > 1)
			{
				$previous = $_GET['page'] - 1;
				$previous = str_pad($previous, 3, '0', STR_PAD_LEFT);
				return $previous;
			}
			return "001";
		}
	}

	function GetToNext($nbPages)
	{					
		if(isset($_GET['page']))
		{
			$next = (int)$_GET['page'];
			
			if($_GET['page'] < $nbPages)
			{
				$next = $_GET['page'] + 1;
				$next = str_pad($next, 3, '0', STR_PAD_LEFT);
				return $next;
			}
			return $nbPages;
		}		
	}
