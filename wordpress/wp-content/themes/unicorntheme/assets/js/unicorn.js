(function($) {

	//AJAX BEER API      
    setTimeout(function() {
        api.beer();
    });

    setInterval("api.beer()", 10000);

    api = {
        beer: function() {
            jQuery.ajax({
                url: 'https://api.punkapi.com/v2/beers/random',
                method: 'GET',
                dataType: 'json',
                data: { get_param: 'value' }, 
                cache: false,
                success: function(data) {
                   $.each(data, function(index, atributos) {
                         var nombre_cerveza = atributos.name;
                         var desc = atributos.tagline;
                         var foto_cerveza = atributos.image_url;
                         $('#nombre-cerveza').text(nombre_cerveza);
                         $('#desc').text(desc);
                         $('#foto-cerveza').attr("src", foto_cerveza);
                   });
                },
            });
        }
    }

	//responsive hamburguesa
	$('.main_nav__hamb-link').on('click', function(e) {
		e.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});

	//pop up jQuery plugin
	//FALTA ARREGLAR EL BOTÓN DE CIERRE
	$('.main_media__iarc').on('click', function() {
		$('#demo').simplePopup();
	})

	$('.main_media__rp').on('click', function() {
		$('#demo2').simplePopup();
	})

	$('.main_media__zancada').on('click', function() {
		$('#demo3').simplePopup();
	})

	$('.main_media__rena').on('click', function() {
		$('#demo4').simplePopup();
	})

	$('.main_media__psb').on('click', function() {
		$('#demo5').simplePopup();
	})

	$('.main_media__cp').on('click', function() {
		$('#demo6').simplePopup();
	});

	/*$('.simplePopupClose').on('click', function() {
		$('simplePopup').close();
	})*/

	// Flexslider
	$('.flexslider').flexslider({
		animation: "slide"
	});

})(window.jQuery);