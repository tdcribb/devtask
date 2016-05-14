$(document).ready(function() {
	setFontSearch();
	
	$(window).resize(function() {
		
	});

});

function setFontSearch() {
	$('.search-form label .search-field').attr({placeholder:"search our site", 
		onfocus:"this.placeholder = ''", onblur:"this.placeholder = 'search our site'"});
}

