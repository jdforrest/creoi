$(document).ready(function(){
	// START: switch out icon for search bar upon hover
	$('.box380 form input[type=image]').hover(
		function(){
			$(this).attr('src', 'http://creoi.org/wp-system/wp-content/themes/creoi/images/search-hover2.png');
		},
		function (){
			$(this).attr('src', 'http://creoi.org/wp-system/wp-content/themes/creoi/images/search2.png');
		}
	);
	// END: switch out icon for search bar upon hover
	
	// START: switch out icon for linked-in upon hover
	$('img.linkedin').hover(
		function(){
			$(this).attr('src', 'http://creoi.org/wp-system/wp-content/themes/creoi/images/linkedin-hover2.png');
		},
		function (){
			$(this).attr('src', 'http://creoi.org/wp-system/wp-content/themes/creoi/images/linkedin2.png');
		}
	);
	// END: switch out icon for linked-in upon hover
	
	// START: switch out icon for youtube upon hover
	$('img.youtube').hover(
		function(){
			$(this).attr('src', 'http://creoi.org/wp-system/wp-content/themes/creoi/images/youtube-hover2.png');
		},
		function (){
			$(this).attr('src', 'http://creoi.org/wp-system/wp-content/themes/creoi/images/youtube2.png');
		}
	);
	// END: switch out icon for youtube upon hover
	
	// START: turn on and off the dropdown menu for mobile-type viewport size
	$('div.responsive-icon img').click(
		function(){
			$('div.nav-wrapper, nav').toggle();
		}
	);
	// END: turn on and off the dropdown menu for mobile-type viewport size
	
	// Enable the flex slider
	 $('.flexslider').flexslider({
	 	animation: "fade"
	 });
});