function minimizeVersion (type) {
	switch (type) {
		case 1:
			maximizeVersion();
			$('body').css({'width': '80%', 'font-size': '13px'});
			$('h1.blogname').css({'font-size': '35px', 'line-height': '32px'});
			$('header div.description').css({'font-size': '14px', 'line-height': '16px'});
		break;
		case 2:
			maximizeVersion();
			$('h1.blogname').css({'font-size': '16px', 'line-height': '13px'});
			$('header div.description').css({'font-size': '12px', 'line-height': '10px'});
			$('body').css({'width': '90%', 'font-size': '10px'});
			$('p.article-message').css({fontSize: '10px', lineHeight: '10px'});
			$('h3.article-name').css({fontSize: '14px', lineHeight: '14px'});
		break;
	}
}

function maximizeVersion () {
	$('body').css({'width': '65%', 'font-size': '14px'});
	$('h1.blogname').css({'font-size': '48px', 'line-height': '43px'});
	$('header div.description').css({'font-size': '18px', 'line-height': '20px'});
	$('h3.article-name').css({fontSize: '24px', lineHeight: '24px'});
	$('p.article-message').css({fontSize: '14px', lineHeight: '22px'});
}

function largeDisplay () {
	maximizeVersion();
	$('body').css({'width': '75%', 'font-size': '18px'});
	$('h1.blogname').css({'font-size': '52px', 'line-height': '47px'});
	$('header div.description').css({'font-size': '22px', 'line-height': '24px'});
	$('h3.article-name').css({fontSize: '28px', lineHeight: '28px'});
	$('p.article-message').css({fontSize: '18px', lineHeight: '26px'});
}

function checkSize () {
	var width = $(window).width();
	console.log(width);
	if (width > 1500) largeDisplay(); else
	if (width > 800 && width < 1500) maximizeVersion(); else
	if (width < 800 && width > 400) minimizeVersion(1); else 
	if (width < 400) minimizeVersion(2);
}

function searchSubmit () {
	var form = $('#e2-form-search'),
		search = form.find('#query');
	if (search.val().length < 4) {
		search.focus();
		search.select();
	} else form.submit();
}

$(function () {
	checkSize();
	$(window).resize(checkSize);
});