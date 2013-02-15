/* Preloader */
$(function(){
	$("#main_template").preloadify();
});

/* Image hover[remove preloader style] */
$(function() {
	$('img').hover(function(){
		$(this).css("opacity", "");
	});
});





/* --------------------------------------------------------------------------
Your scripts below 
--------------------------------------------------------------------------- */

$(document).ready(function(){
	
	// buat menu top
	
	$('ul.menu')
	.addClass('nav_simple')
	.attr('id','nav');
	
	$('#content_fill').each( function( index, item) {
			var parent = $(item).parent();
			var $this = $(item);
			$this
			.css('position', 'absolute')
			.css('top', Math.round((parent.height() - $this.height()) / 2) + 'px')
			.css('left', Math.round((parent.width() - $this.width()) / 2) + 'px');
	});
	
});

	$(window).resize(function() {
	// buat bagian banner di tengah
		$('#content_fill').each( function( index, item) {
			var parent = $(item).parent();
			var $this = $(item);
			$this
			.css('position', 'absolute')
			.css('top', Math.round((parent.height() - $this.height()) / 2) + 'px')
			.css('left', Math.round((parent.width() - $this.width()) / 2) + 'px');
		});
	});