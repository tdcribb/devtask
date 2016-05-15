$(document).ready(function() {
	setFontSearch();
	mobNav();

	$(window).resize(function() {
		mobNav();
	});

});

function setFontSearch() {
	$('.search-form label .search-field').attr({placeholder:"search our site", 
		onfocus:"this.placeholder = ''", onblur:"this.placeholder = 'search our site'"});
}

function mobNav() {
	var winWidth = $(window).width();
	if (winWidth <= 780) {
		$('.main-nav').addClass('collapse');
	} else {
		$('.main-nav').removeClass('collapse');
	}
}