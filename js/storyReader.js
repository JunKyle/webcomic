$(function() {
	var pageEnCours = 1;
	if(pageEnCours == 1)
	{
		$('button.previous').addClass("hidden");
		$('button.previousChapter').removeClass("hidden");
	}
	
	var pagesCount = $('div.pages_count').text();
	
	$('button.page_status').html(pageEnCours+' / '+pagesCount);
	
	$('div.page_'+pageEnCours).removeClass("hidden");
	
	function flashParagraphByPrevNext()
	{
		// var $div2blink = $('.story_paragraph'); // Save reference, only look this item up once, then save
		// var backgroundInterval = setInterval(function(){
			// $div2blink.toggleClass("backgroundFlash");
		 // },500)
		 $('.story_reader').effect("highlight", {color:'#d2d2d2'}, 100);
	}
	
	// FIRST BUTTON EVENT
	$('button.first').click(function(){		
		flashParagraphByPrevNext();
		
		$('div.page_'+pageEnCours).addClass("hidden");
	
		pageEnCours = 1;
		$('div.page_'+pageEnCours).removeClass("hidden");
		$('button.page_status').html(pageEnCours+' / '+pagesCount);
		
		$('button.previous').addClass("hidden");
		$('button.previousChapter').removeClass("hidden");
		$('button.next').removeClass("hidden");
		$('button.nextChapter').addClass("hidden");
		
		$('button.first').addClass("disabled");		
		$('button.last').removeClass("disabled");
	});
	
	// PREVIOUS BUTTON EVENT
	$('button.previous').click(function(){	
		flashParagraphByPrevNext();
		
		if(pageEnCours > 1)
		{
			$('button.previous').removeClass("hidden");
			$('button.previousChapter').addClass("hidden");
			$('button.next').removeClass("hidden");
			$('button.nextChapter').addClass("hidden");
			
			$('div.page_'+pageEnCours).addClass("hidden");		
			pageEnCours = pageEnCours - 1;
			$('div.page_'+pageEnCours).removeClass("hidden");
			$('button.page_status').html(pageEnCours+' / '+pagesCount);	
			
			$('button.first').removeClass("disabled");
			$('button.last').removeClass("disabled");
			
		}
		if(pageEnCours == 1)
		{
			$('button.previous').addClass("hidden");
			$('button.previousChapter').removeClass("hidden");	
			
			$('button.first').addClass("disabled");
			$('button.last').removeClass("disabled");
		}
	});
	
	// NEXT BUTTON EVENT
	$('button.next').click(function(){	
		flashParagraphByPrevNext();
		
		if(pageEnCours < pagesCount)
		{
			$('button.next').removeClass("hidden");
			$('button.nextChapter').addClass("hidden");
			$('button.previous').removeClass("hidden");
			$('button.previousChapter').addClass("hidden");
			
			$('div.page_'+pageEnCours).addClass("hidden");
			pageEnCours = pageEnCours + 1;
			$('div.page_'+pageEnCours).removeClass("hidden");
			$('button.page_status').html(pageEnCours+' / '+pagesCount);	
			
			$('button.first').removeClass("disabled");
			$('button.last').removeClass("disabled");
		}
		if(pageEnCours == pagesCount)
		{
			$('button.next').addClass("hidden");
			$('button.nextChapter').removeClass("hidden");
			
			$('button.first').removeClass("disabled");
			$('button.last').addClass("disabled");
		}		
	});
	
	// LAST BUTTON EVENT
	$('button.last').click(function(){	
		flashParagraphByPrevNext();
		
		$('div.page_'+pageEnCours).addClass("hidden");	
		pageEnCours = pagesCount;
		$('div.page_'+pageEnCours).removeClass("hidden");
		$('button.page_status').html(pageEnCours+' / '+pagesCount);
		
		$('button.next').addClass("hidden");
		$('button.nextChapter').removeClass("hidden");
		$('button.previous').removeClass("hidden");
		$('button.previousChapter').addClass("hidden");
		
		$('button.first').removeClass("disabled");
		$('button.last').addClass("disabled");
	});
});



