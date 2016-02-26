////////////////////////////////////////////////////////// Funções Básicas da página

var $ = jQuery;

// Redimensiona o mapa da área de Contato para ficar do mesmo tamanho do formulário.

function redimensionarMapa()
{
	// Obter a altura da div preta

	var altura = $("section.contato div.altura").height();

	// Definir a altura do mapa de acordo com esta altura

	$("section.contato div.google-maps").css('paddingBottom', altura);
}

// Abrir ou fechar o menu mobile com base na variável "aberto"

function toggleMenuMobile()
{

	var botao = $("button.botao-menu");
	var aberto = $("button.botao-menu").data('aberto');
	var menu = $('ul.menu-principal');

	// Apenas abrir ou fechar o menu principal caso o botão de menu mobile esteja sendo mostrado,
	// ou seja, apenas quando a dimensão da tela seja pequena.

	if($(botao).css('display') == 'block')
	{
		if(aberto)
		{
			$(menu).css('height', "0");
			$(botao).data('aberto', 0);
		} 
		else 
		{
			$(menu).css('height', "220px");
			$(botao).data('aberto', 1);
		}
	}
}

jQuery(function($){

	/////////////////////////////////////////////////////// Ativar o parallax dos setores "Fabricantes" e "Depoimentos"

	$.stellar();

	/////////////////////////////////////////////////////// Redimensionar o mapa de acordo com o tamanho do formulário

	redimensionarMapa();

	/////////////////////////////////////////////////////// Ativar o slider de depoimentos

	$(".slick-slider").slick({
		arrows: false,
		dots: true,
		fade: true,
		speed: 700
	});

	/////////////////////////////////////////////////////// Efeito de Scroll do Menu Principal

	$("ul.menu-principal a.link").click(function(){

		// Obter as variáveis do link clicado

		var elemento = $(this).data('section');
		var offset = $(this).data('offset');

		// Scrollar a página

		if(elemento != "suporte")
		{
			$('html, body').animate({
		        scrollTop: $(elemento).offset().top - offset
		    }, 700);
		}

	    // Fechar o menu mobile

	    toggleMenuMobile();

	});

	/////////////////////////////////////////////////////// Mudar o conteúdo da seção "A Mercosul"

	$("section.mercosul .features img").click(function(){

		var section = $(this).data('section');

		//Esconder todas as divs

		$("section.mercosul .conteudo").each(function(){

			if(!$(this).hasClass('hidden'))
				$(this).addClass('hidden');

			if(!$(this).hasClass('transparente'))
				$(this).addClass('transparente');

			$(this).attr({ 'style' : '' });

		});

		//Mostrar apenas a div selecionada

		$("section.mercosul .conteudo." + section).removeClass('hidden').animate(
		{
			opacity : 1
		}, 
		500, 
		function(){
			$(this).removeClass('transparente');
		}
		);

	});

	/////////////////////////////////////////////////////// Mudar o conteúdo da seção "Produtos"

	$("section.setores ul li a").click(function(){

		var section = $(this).data('section');

		////////////////////////////////// Adicionar a classe ativo apenas ao link clicado

		$("section.setores ul li a").each(function(){

			// Remover a classe "ativo" de todos os links	

			if($(this).hasClass('ativo'))
				$(this).removeClass('ativo');

		});

		// Adicionar ao link atual

		$(this).addClass('ativo');

		//////////////////////////////////////// Esconder todas as imagens

		$("section.setores div.img-container img").each(function(){

			// Caso uma imagem ainda não possua a classe "hidden", adicionar esta classe a ela

			if(!$(this).hasClass('hidden'))
				$(this).addClass('hidden');

			// Fazer o mesmo para a classe "transparente"

			if(!$(this).hasClass('transparente'))
				$(this).addClass('transparente');

			// Remover os estilos inline

			$(this).attr({ 'style' : '' });

		});

		// Mostrar apenas a imagem desejada

		$('section.setores div.img-container img.' + section).removeClass('hidden').animate({ 
				opacity : 1 
			}, 
			500,
			function(){
				$(this).removeClass('transparente');
			}
		);

		//////////////////////////////////////// Esconder todos os textos

		$("section.setores div.textos div.row").each(function(){

			// Caso a div ainda não possua a classe "hidden", adicioná-la

			if(!$(this).hasClass('hidden'))
				$(this).addClass('hidden');

			// Fazer o mesmo para a classe "transparente"

			if(!$(this).hasClass('transparente'))
				$(this).addClass('transparente');

			// Remover os estilos inline

			$(this).attr({ 'style' : '' });

		});

		// Mostrar apenas o texto desejado

		$("section.setores div.textos div.row." + section).removeClass('hidden').animate({
				opacity : 1
			},
			500,
			function(){
				$(this).removeClass('transparente');	
			}
		);

	});

	//////////////////////////////////////// Ajustar o tamanho do mapa de acordo com o tamanho do formulário de contato

	$("section.contato input[type=submit]").click(function(){

		// Esperar alguns milisegundos para que a resposta do envio do formulário chegue e que o formulário se
		// redimensione, para então redimensionar o mapa de acordo.

		setTimeout(function(){

			redimensionarMapa();

		}, 500);

	});

	//////////////////////////////////////// Menu Mobile

	$("button.botao-menu").click(function(){

		toggleMenuMobile();

	});

});