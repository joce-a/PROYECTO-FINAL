$(function (){

	$('.main_nav__hamb-link').on('click', function(e) {
		e.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});

	//NECESITO CAMBIAR LA IMAGEN DEL UNICORNIO CUANDO HAGA HOVER
	/*$('.main_about__btn').on('click', function(e) {
		e.preventDefault();
		$('.main_about__btn-img').toggleClass('.main_about__btn-img-2');
	})/* 

});