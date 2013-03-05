/* Scripts required for this template 
@ file version: 1.0
@last edit: 10.14.2012, 3:57 PM
-------------------------------------------*/
/* =========================================== MENU */
$(document).ready(function() {
	//Variable
	this.navLi = $('#nav li').children('ul').end();
	//Add arrow for each menu item that has a children
	$.each(this.navLi, function() {
		if ( $(this).children('li ul li ul')[0] ) {
			$(this)
				.append('<span />')
				.children('span')
					.addClass('menuChildren')
		}
	});
	//keep marked parrent element
	this.navLi.hover(function() {
		$(this).children('a:first').addClass("hov");
	}, function() {
		$(this).children('a:first').removeClass("hov");
	});
	//Add arrow up for level 1
	$('#nav ul').prepend('<li class="mn_arr"><em></em></li>').css('padding', '0 0 5px');
});

/* Select nav */
$(function () {
	  // SelectNav.js
	selectnav('nav', {
		label: '&#8212; Main menu &#8212;',
		nested: true,
		indent: '&#8212;'
	});
	jQuery('.selectnav').children('option[value="undefined"]').hide();//this will hide list options with undefined value
});

/* =========================================== CONTACT FORM */
jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$('#submit').attr('disabled','disabled').after('<img src="img/ajax-loader.gif" class="loader" style="margin-top: 5px; margin-left: 10px;" />');

		$("#message").slideUp(750,function() {
		$('#message').hide();

		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			subject: $('#subject').val(),
			comments: $('#comments').val(),
			verify: $('#verify').val()
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('fast',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});

});

/* =========================================== HEAD TABS */
$(".top_head_switch .ths_item").click(function () {
	_tabVal = $(this).attr("data-headtab");
	$(".head_phone, .head_search, .head_social").removeClass("ths_active");
	$(_tabVal).addClass("ths_active");
	return false;
});


/* =========================================== LIGHTBOX */
$(document).ready(function(){
	$("a[rel^='lightbox']").prettyPhoto({
		social_tools: false
	});
});

/* =========================================== Tooltips*/
$('.head_part .head_social a').tooltip();
$('.team_member a.btn').tooltip();
$('.img_wrap_caption .cmore,.img_wrap_caption .czoom,.img_wrap_caption .cplay,.img_wrap_caption .clink').tooltip();
$('.blog_post .post_head .post_meta span i').tooltip({
	delay: { show: 300, hide: 100 }
});
/*Demo*/
$('.tooltip_top').tooltip({placement: 'top'});
$('.tooltip_bottom').tooltip({placement: 'bottom'});
$('.tooltip_left').tooltip({placement: 'left'});
$('.tooltip_right').tooltip({placement: 'right'});
/* =========================================== Responsive video */
$(".container_video, .post_video").fitVids();
  
/* =========================================== Slider */


/* =========================================== SELF HOSTED VIDEO/AUDIO */
jQuery(document).ready(function($) {
	$('audio,video').mediaelementplayer({
		videoWidth: '100%',
		videoHeight: '100%',
		audioWidth: '100%',
		features: ['playpause','progress','tracks','volume'],
		videoVolume: 'horizontal'
	});
	$(window).resize(function() {
		$(".mejs-controls .mejs-time-rail").css("width", "-=10");
	});
});

/* =========================================== ACCORDION */
$(document).ready(function() {
	 
	$('.accordion_button').click(function() {
	
		$('.accordion_button').removeClass('acdn_on');
	 	$('.accordion_container').slideUp('fast');
		
		if($(this).next().is(':hidden') == true) {
			$(this).addClass('acdn_on');
			$(this).next().slideDown('fast');
			$('.accordion_button span').addClass('minus');
		 } 
		  
	 });
	$('.accordion_button').mouseover(function() {
		$(this).addClass('acdn_over');
		
	}).mouseout(function() {
		$(this).removeClass('acdn_over');
	});
	;
		
	$('.accordion_container').hide();

});

/* =========================================== TOGGLE */
$(".box_toggle .block").show();
	$(".closed .block").hide();
	
	$(".tg_title").click(function(){
		$(this).toggleClass("tgg_isopen").next().slideToggle("fast");
});

/* =========================================== Portfolio sortable */

$(function(){

	// cache container
	var $IsoContainer = $('.portfolio_grid');
	// initialize isotope
	$IsoContainer.imagesLoaded( function(){
		$IsoContainer.isotope({
			// options...
			itemSelector : '.grid_item'
		});
	});

	// filter items when filter link is clicked
	$('#portfolio_menu a').click(function(){
		var selector = $(this).attr('data-filter');
		$IsoContainer.isotope({ filter: selector });
		$('#portfolio_menu a').removeClass('active_cat');
		$(this).addClass('active_cat');
		return false;
	});
	
});

$(document).ready(function(){

	$(window).scroll(function () {
		if ($(this).scrollTop() > 57) {
			$('.product_title').addClass("box_fixed");
		} else {
			$('.product_title').removeClass("box_fixed");
		}
	});

});


/* =========================================== Responsive footer */
$(".footer_responsive_block").click(function () {
	$(this).slideUp(100);
	$(".footer_inner_min").slideDown(500);
	return false;
});
$(".sidebar_responsive_block").click(function () {
	$(this).slideUp(100);
	$(".right_side,.left_side").slideDown(500);
	return false;
});
