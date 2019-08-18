/***

	SEARCH

**/

$('.fa-search').click(function(){
	$('#search-form').slideToggle();
	$('#search-form input').focus();
});


/***

	SCROLL FIXED TOP AND CHANGE HEADER

**/

$(window).scroll(function(){
	var currentScroll = $(window).scrollTop();
	var windowHeight = $(window).height();

	if ( currentScroll > windowHeight/2 ){
		$('.top-bar').addClass('fixed-bar');
		$('#main-header img').attr('src','img/logo2.png')
	} else {
		$('.top-bar').removeClass('fixed-bar');
		$('#main-header img').attr('src','img/logo.png')
	}

});


/***

	#INTRO HEADER - usar animate depois

**/
$('#intro header').slideDown(800);


/***

	ABOUT US -FRASES

**/



$('.about-button').click(function(){

  // Guardar o índice do botão clicado
  var indice_clicado = $(this).index();
  // Guardar o índice do botão ativo
  var indice_ativo = $('.active-button').index();

  // Remover a classe active butto do elemento que a tem
  $('.active-button').removeClass('active-button');

  // Adicionar a classe active button ao elemento clicado
  $(this).addClass('active-button');

  // Colocar o slide que vai entrar em left 100
  $('.about-slide').eq(indice_clicado).css({'left':'100%'});

  // Animar o slide que vai entrar para left 0
  $('.about-slide').eq(indice_clicado).animate({'left':0});

  // Animar o slide que vai entrar sair left -100%
  $('.about-slide').eq(indice_ativo).animate({'left':'-100%'});

});


/***

	THUMBS TABS

**/




$('.projects-thumbs img').click(function(){

	// Saber source da imagem clicada
	var source = $(this).attr('src');

	// Substitui o atributo da #main-project
	$('#main-project').attr( 'src' , source );

});


/***

	MAPA

**/

$('.map-button').click(function(){
	var left = $(this).attr('data-left');
	var top = $(this).attr('data-top');

	$('#map-icon').css({'left':left+'%', 'top':top+'%'});
	$('.active-map').removeClass('active-map');
	$(this).addClass('active-map');




});
