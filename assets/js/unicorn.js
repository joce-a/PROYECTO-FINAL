$(function (){

	$('.main_nav__hamb-link').on('click', function(e) {
		e.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});



});