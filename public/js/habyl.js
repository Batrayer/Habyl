
(function($) {
	$('#header__icon').click(function(e){
		e.preventDefault();
		$('body').toggleClass('width--sidebar');
	});

	$('#site-cache').click(function(e) {
		$('body').removeClass('width--sidebar');
	});
})(jQuery);

$(function(){
	$("a[class^='button']").mouseover(function(){
		$(this).addClass("waves");
	});
	$("a[class^='button']").mouseout(function(){
		$(this).removeClass("waves");
	});
});

/*$(function(){
	//$(".slideshow ul").find("img").hide();
	//$(".slideshow ul").find("img:first").show();
	if ($slideshow_direction == "right") {
		setInterval(function(){
			/*$(".slideshow ul").animate({"margin-left" : -$slideshow_Taille1},$slideshow_timer,function(){
				$(".slideshow ul").find("li:first").before($(".slideshow ul").find("li:last"));
			});
			$(".slideshow ul").css({marginLeft:-200}).find("li:first").before($(".slideshow ul").find("li:last"));
    		$(".slideshow ul").animate({marginLeft:0},800);

			
		//	$(".slideshow ul").animate({"opacity" : +1},$slideshow_timer);
		},$slideshow_timer+$slideshow_interlude);
	} else if ($slideshow_direction == "left"){
		
	}
});*/

// lance l'autoplay

function include(fileName){
	document.write("<script type='text/javascript' src='Slideshow.js'></script>" );
}
function include(fileName){
	document.write("<script type='text/javascript' src='Dropdown.js'></script>" );
}




/*(function($) {

this.each(function() {
var origin = $(this);
}

var drop = $(".dropdown");
//default option
//update option
//place dropdown
//handle max right/left/top/bottom

//| ------------- |
//| show dropdown |
//| ------------- |
function showDropdown() {
drop.stop(true, true).css("opacity", 0)
.slideDown({
duration: default;
easing: default;
queue: false;
complete: function(){
	$(this).css("height", "0");
}
})
.animate(
{opacity: 1},
{duration: default, easing: default, queue: false});
}

//| ------------- |
//| hide dropdown |
//| ------------- |
function hideDropdown() {
origin.unbind('click.' + origin.attr('id'));
origin.bind('click.'+origin.attr('id'), function(e){

});
}

//hover
//click
});*/