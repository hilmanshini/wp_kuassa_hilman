// Visual Browser Size @ http://xycss.com/xy/tools/visual-browser-size/

function xycss_dynamic_browser_size(){
	$('#browser-size').text('w : ' + ($(window).width()) + ' , h : ' + $(document).height()).css({
		width:'120px', top:'60px', left:'0', background:'#000', cursor:'pointer', padding:'0.75em', 
		zIndex:9999, position:'fixed', textDecoration:'none', color:'#fff', opacity:1
	}).hover(function(){
		$(this).css({ opacity:1 });
	},function(){
		$(this).css({ opacity:1 });
	});
}
$(document).ready(function(){
	if($(window).width() > 480) {
		$('body').append('<div class="button" id="browser-size"></div>');
	}
	xycss_dynamic_browser_size();
});
$(window).resize(function() {
	xycss_dynamic_browser_size();
});