/* Preloader */
$(function(){
	$(".container_middle").preloadify();
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