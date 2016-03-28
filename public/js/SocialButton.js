$(document).ready(function(){

	var popUp = function(url, title, witdh, height) {
		//widht and height of the popup
		var popWidth = 	witdh || 900;
		var popHeight = height || 500;
		//window parameters 
		//window.screenX and window.screenY are for mozilla
		var wLeft = window.screenLeft || window.screenX;
		var wTop = 	window.screenTop || window.screenY;
		//document.documentElement.clientWidth and document.documentElement.clientHeight are for older versions of IE
		var wWidth =  window.innerWidth || document.documentElement.clientWidth;
		var wHeight =  window.innerHeight || document.documentElement.clientHeight;
		var popLeft = wLeft + wWidth / 2 - popWidth / 2;
		var popTop = wTop + wHeight / 2 - popHeight / 2;
		var popup = window.open(url, title, 'scrollbars=yes, width=' + popWidth +', height=' + popHeight + ', top=' + popTop + ', left=' + popLeft);
		popup.focus();
	}

	$(".share_twitter").click(function(e){
		e.preventDefault();
		var url = this.getAttribute('data-url');
		var share = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.title) + "&url=" + encodeURIComponent(url);
		popUp(share, "Share on Twitter");
	});

	$(".share_facebook").click(function(e){
		e.preventDefault();
		var url = this.getAttribute('data-url');
		var share = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
		popUp(share, "Share on Facebook");
	});

	$(".share_gplus").click(function(e){
		e.preventDefault();
		var url = this.getAttribute('data-url');
		var share = "https://www.plus.google.com/share?url=" + encodeURIComponent(document.title) + "&url=" + encodeURIComponent(url);
		popUp(share, "Share on Google+");
	});	

});