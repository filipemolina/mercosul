jQuery(function($){

	// Ativar o slider de depoimentos

	$(".slick-slider").slick({
		arrows: false,
		dots: true,
		fade: true,
		speed: 700
	});

	// Efeito de Scroll do Menu Principal

	$("ul.menu-principal a.link").click(function(){

		var elemento = $(this).data('section');
		var offset = $(this).data('offset');

		console.log($(elemento));

		$('html, body').animate({
	        scrollTop: $(elemento).offset().top - offset
	    }, 700);

	});

});