/* These scripts are not necesary for template functionality, they are only for demo purpose. */
/* =========================================== Icons Switch 48px*/
$('#icn48switch #icn48black, #icn48switch #icn48white, #icn48switch #icn48gray, #icn48switch #icn48default').click(function(){
	$('#icn48switch a').removeClass('active');//remove active class from color switcher
	$(this).addClass('active');//add "active" class to this(clicked)
	
	//remove other clases at icons, but leave only default
	$('#icons48demo_list i[class^=icn48_]').removeClass('icn48black');
	$('#icons48demo_list i[class^=icn48_]').removeClass('icn48gray');
	$('#icons48demo_list i[class^=icn48_]').removeClass('icn48white');
	
	_thisID = $(this).attr('id');//Get id from color switcher menu(currently clicked)
	if(_thisID != 'icn48default'){//if is not this id then...
		$('#icons48demo_list i[class^=icn48_]').addClass($(this).attr('id'));//...convert this in a class and attribute it to icons
	}
	
	if(_thisID == 'icn48white'){//if show icons are white make demo background dark
		$('#icons48demo_list').css('background-color', '#333333');//make bg dark
	}else{
		$('#icons48demo_list').css('background-color', '');//change to default bg
	}
	
	return false;//prevent browser to access the link(#)
});

$('#icons48demo_list i').click(function(){
	$(this).css('background-color', '#ddd');//set a background color for currently clicked icon
	_thisClass = $(this).attr('class');//get the class
	_thisHTMLcode = $('pre#icn48addit_class').html();//get the html inside of "pre"
	
	$('pre#icn48addit_class').html(_thisHTMLcode + '&lt;i class="' + _thisClass + '"&gt;&lt;/i&gt;<br />');//add html inside of "pre", but keep existing
	
	return false;//prevent browser to access the link(#)
});

/* =========================================== Icons Switch 72px*/
$('#icn72switch #icn72black, #icn72switch #icn72white, #icn72switch #icn72gray, #icn72switch #icn72default').click(function(){
	$('#icn72switch a').removeClass('active');//remove active class from color switcher
	$(this).addClass('active');//add "active" class to this(clicked)
	
	//remove other clases at icons, but leave only default
	$('#icons72demo_list i[class^=icn72_]').removeClass('icn72black');
	$('#icons72demo_list i[class^=icn72_]').removeClass('icn72gray');
	$('#icons72demo_list i[class^=icn72_]').removeClass('icn72white');
	
	_thisID = $(this).attr('id');//Get id from color switcher menu(currently clicked)
	if(_thisID != 'icn72default'){//if is not this id then...
		$('#icons72demo_list i[class^=icn72_]').addClass($(this).attr('id'));//...convert this in a class and attribute it to icons
	}
	
	if(_thisID == 'icn72white'){//if show icons are white make demo background dark
		$('#icons72demo_list').css('background-color', '#333333');//make bg dark
	}else{
		$('#icons72demo_list').css('background-color', '');//change to default bg
	}
	
	return false;//prevent browser to access the link(#)
});

$('#icons72demo_list i').click(function(){
	$(this).css('background-color', '#ddd');//set a background color for currently clicked icon
	_thisClass = $(this).attr('class');//get the class
	_thisHTMLcode = $('pre#icn72addit_class').html();//get the html inside of "pre"
	
	$('pre#icn72addit_class').html(_thisHTMLcode + '&lt;i class="' + _thisClass + '"&gt;&lt;/i&gt;<br />');//add html inside of "pre", but keep existing
	
	return false;//prevent browser to access the link(#)
});

$('#reset_icnPre').click(function(){
	$('pre#icn48addit_class, pre#icn72addit_class').html('');
	$('#icons48demo_list i, #icons72demo_list i').css('background-color', '');
	return false;//prevent browser to access the link(#)
});

/* =========================================== Icons tooltip*/
$('.icn48blockicons i,#icons72demo_list i').tooltip({
	delay: { show: 300, hide: 100 }
});
