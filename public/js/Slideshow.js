function Slideshow($params) {
	$slideshow_duration = $params.duration == undefined ? 1000 : $params.duration;
	$slideshow_duration_sleep = $params.duration_sleep == undefined ? 5000 : $params.duration_sleep;
	$slideshow_direction = $params.direction == undefined ? "right" : $params.direction;
	$slideshow_animation = $params.animation == undefined ? "fade" : $params.animation;
	$original_image_width = $(".slideshow ul").find("img:first").width();
	$original_image_height = $(".slideshow ul").find("img:first").height();
	$i = 0;
	//window.addEventListener("resize", resizeImage);
	window.onresize = resizeImage;
	slideshowInit();
}

/*var windowListener = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};*/

function resizeImage() {
	console.log('resized');
	if ($original_image_width > $( window ).width()) {
		$image_width = $( window ).width();
	} else if ($original_image_width < $( window ).width()){
		if ($(".slideshow ul").find("img:first").width() > $original_image_width) {
			$image_width = $original_image_width;
		} else {
			$image_width = $(".slideshow ul").find("img:first").width();
		}
	}
	
	if ($original_image_height > $( window ).height()) {
		$image_height = $( window ).height();
	} else if ($original_image_height < $( window ).height()){
		if ($(".slideshow ul").find("img:first").height() > $original_image_height) {
			$image_height = $original_image_height;
		} else {
			$image_height = $(".slideshow ul").find("img:first").height();
		}
	}

	$(".slideshow ul").find("img").css({
		"height": $image_height+"px"
	});

	$(".slideshow ul").find("img").css({
			"width": $image_width+"px"
		});
	$(".slideshow").css({
	    "width": $image_width+"px",
		"height": $image_height+"px"
	});
	console.log($image_width);
	console.log($image_height);
	console.log($slideshow_animation);
}

function slideshowInit() {
	
	$(document).ready(function(){
		$length = $('.slideshow ul> *').length;
		resizeImage();

		console.log($length);
		

		$(".slideshow ul").css({
			"width": (100*$length)+"%",
			"height": (100*$length)+"%"
		});
		if ($slideshow_animation == "fade"){
			
			setInterval(function() {
				$(".slideshow ul").animate({"opacity":-1},$slideshow_duration,function(){
					$(this).find("li:last").after($(this).find("li:first"));
					$(this).animate({"opacity":+1},$slideshow_duration);
				});
			}, 2*$slideshow_duration + $slideshow_duration_sleep);
			
		}else if ($slideshow_animation == "slide") {
			slideInt = setInterval(function(){
				if($slideshow_direction == "right"){
					$(".slideshow li").css({"float":"left"});
					slideRight();
				}else if($slideshow_direction == "left"){
					$(".slideshow li").css({"float":"left"});
					slideLeft();
				}else if($slideshow_direction == "top"){
					$(".slideshow li").css({"float":"inherit"});
					slideUp();
				}else if($slideshow_direction == "bottom"){
					$(".slideshow li").css({"float":"inherit"});
					slideBottom();
				}
			}, $slideshow_duration + $slideshow_duration_sleep);
		} 
	});	
}


// Arrete le slide si la souris est sur un élément du slide ou sur une commande
/*$('.slideshow li, .command').hover(
function(){clearInterval(slideInt);},
function(){slideInt = window.setInterval(slideLeft,this.duration);}
);*/
//fonction de slide vers le haut
function slideUp(){
	$(".slideshow ul").animate({"marginTop":-$image_height},$slideshow_duration,function(){
		$(this).css({"marginTop":0}).find("li:last").after($(".slideshow ul").find("li:first"));
	});
};

// fonction de slide vers la gauche
function slideLeft() {
	$(".slideshow ul").animate({"marginLeft":-$image_width},$slideshow_duration,function(){
		$(this).css({"marginLeft":0}).find("li:last").after($(this).find("li:first"));
	});
}

// fonction de slide vers la droite
function slideRight() {
	$(".slideshow ul").css({"marginLeft":-$image_width}).find("li:first").before($(".slideshow ul").find("li:last"));
	$(".slideshow ul").animate({"marginLeft":0},$slideshow_duration);
}

// fonction de slide vers le bas
function slideBottom() {
	//$(".slideshow li").css({"float": "inherit"})
	$(".slideshow ul").css({"marginTop": -$image_height}).find("li:first").before($(".slideshow ul").find("li:last"));
	$(".slideshow ul").animate({"marginTop":0},$slideshow_duration);
	}


// Gestion de la commande manuelle pour slide vers la gauche
$('.slide.left').click(function(){
	slideLeft();
});

// Gestion de la commande manuelle pour slide vers la droite
$('.slide.right').click(function(){
	slideRight();
});

// Gestion de la commande manuelle pour slide vers la gauche
$('.slide.top').click(function(){
	slideUp();
});

// Gestion de la commande manuelle pour slide vers la droite
$('.slide.bottom').click(function(){
	slideBottom();
});