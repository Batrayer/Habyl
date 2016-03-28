$(document).ready(function(){
	$(".button").click(function(e){
		var $this = $(this);

		cursorX      = e.pageX - $this.offset().left;
		cursorY      = e.pageY - $this.offset().top;

        $this.children(".ripple").remove();
        $this.append("<div class=\"ripple\"></div>");
        $this.children(".ripple").css({"left" : cursorX + "px", "top" : cursorY + "px"});

	});

	/* Top Button */
	//hide the button if it's the top of the window
	if($(window).scrollTop() == 0){
		$('.scrollToTop').fadeOut();
	}
	//show the button if the window scrolled and re-hide it if it's the top
	$(window).scroll(function(){
		if ($(this).scrollTop() > 0){
			$('.scrollToTop').fadeIn();
		}else{
			$('.scrollToTop').fadeOut();
		}
	});
	//go to the top of the page
	$(".scrollToTop").click(function(){
			$('html, body').animate({scrollTop : 0}, 2000);
			return false;
	});


	/* Bottom */
	//hide the button if it's the bottom of the window 
	if($(window).scrollTop() + $(window).height() == $(document).height()) {
		$('.scrollToBottom').fadeOut();
	}
	//show the button if the window scrolled and re-hide it if it's the bottom
	$(window).scroll(function(){
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			$('.scrollToBottom').fadeOut();
		}
		else{
			$('.scrollToBottom').fadeIn();
		}
	});
	//go to the bottom of the page
	$(".scrollToBottom").click(function(){
		$('html, body').animate({scrollTop : $(document).height()}, 2000);
		return false;
	});


});