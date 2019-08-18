//base url
var base_url = $('#ADMIN_IMG').attr('src');

  //Colocar as fotos iniciais
  $('.random-column').each(function(i,item){
        $(this).prepend('<div class="random-player"><img src="'+base_url+(i+1)+'.jpg"></div>');
  });

  //Array que vai guardar ids
  var random_ids = [];

  //CLick no botão
  $('#start').click(function(){


    random_ids = [];

    //Loop para cada coluna
    $('.random-column').each(function(i,item){
      var pic_count = $(this).find('img').length - 1;
      var random = Math.ceil(pic_count * Math.random());
      random_ids.push( $(this).find('.random-player').eq(random).attr('data-id') );
      $(this).css('transition',pic_count/2+'s');
      $(this).css('top',-300*random);
    });

    //Criar um round via ajax
    $.post(
      base_url+'admin/wall/createRound/',
      {'players[]':random_ids},
      function(data){
        console.log(data);
      }
    );

});
