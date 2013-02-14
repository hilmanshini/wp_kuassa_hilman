/* 
	visual @media queries
	@ http://xycss.com/xy/tools/media-queries/
	ver 1.1 @ 2012.01.10
	license: GNU General Public License
	jeff starr @ http://perishablepress.com/
*/
function xycss_display_media_query(){
	$('#media-query').css({
		position:'fixed', bottom:'0', left:'0', zIndex:9999, padding:'9px', opacity: 1, 
		background:'#FF6633', cursor:'pointer', textDecoration:'none', color:'#fff'
	}).hover(function(){
		$(this).css('opacity',1);
	},function(){
		$(this).css('opacity',1);
	});
}
$(document).ready(function(){
	$('body').append('<div id="media-query"></div>');
	xycss_display_media_query();
	
	$('ul.menu').addClass('nav_simple')
	.attr('id','nav');
});
$(window).resize(function() {
	xycss_display_media_query();
	$('#media-query').css({ opacity:1 });
});