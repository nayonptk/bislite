(function($){
	


			// mainmanu hover area
			
		$(".header-menu ul li").hover(function(){
		 $(this).children('ul').toggle(1000);
		 
		});
		

	
	$(".header-menu ul ul").parent('li').children('a').append(' <i class="fa fa-chevron-down"></i>');


	 $(".main-slider-area").owlCarousel({
		
		loop: true,
		items: 1,
		autoplay:true,
	});


	 $(".all-latest-works").owlCarousel({
		
		loop: true,
		items: 1,
		autoplay:true,
		nav:true,
	});







	
	$(window).scroll(function(){
		
	var bislite =	$(window).scrollTop();
	var bis =	$(".header-area").scrollTop();
		
		if(bislite > bis){
			$('.header-area').addClass('fix');
			
		}
		else{
			$('.header-area').removeClass('fix');
		}
		
	});
	

	
})(jQuery);


