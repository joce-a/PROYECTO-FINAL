$(function (){

	//responsive hamburguesa
	$('.main_nav__hamb-link').on('click', function(e) {
		e.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});

	//pop up jQuery plugin
	//FALTA ARREGLAR EL BOTÓN DE CIERRE
	$('.main_media__iarc').on('click', function() {
		$('#demo').simplePopup();
	});

	$('.main_media__rp').on('click', function() {
		$('#demo2').simplePopup();
	});

	$('.main_media__zancada').on('click', function() {
		$('#demo3').simplePopup();
	});

	$('.main_media__rena').on('click', function() {
		$('#demo4').simplePopup();
	});

	$('.main_media__psb').on('click', function() {
		$('#demo5').simplePopup();
	});

	$('.main_media__cp').on('click', function() {
		$('#demo6').simplePopup();
	});

	//video jQuery plugin
	$('.covervid-video').coverVid(1920, 1080);

});