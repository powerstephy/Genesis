
jQuery(function( $ ) {
	var starting_position = $('.site-header').outerHeight( true );
 
	$(window).scroll(function() {
		var yPos = ( $(window).scrollTop() );
		if( yPos > starting_position) { // hide sticky header after these many (starting_position) pixels have been scrolled down from the top.	
			$(".site-header").slideUp()
			$( ".nav-primary" ).addClass( "whiteNav" );
		} else {
			$(".site-header").slideDown()
			$( ".nav-primary" ).removeClass( "whiteNav" );
		}
	});
});
