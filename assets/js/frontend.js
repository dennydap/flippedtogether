AOS.init();

$('.js-btn-learnmore').click(function(e) {
	$('html, body').animate({
		scrollTop: $('#whatis').offset().top
	}, 1000); 
});