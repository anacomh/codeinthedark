

<div class="fx-main-content">

    <div id="randomize">
      <div>
        <?php
          $division = floor(count($players)/4);
        ?>
      </div>
    </div>
    <style>

    </style>
    <div id="round">
      <p class="upper-title">So you think you know front-end?</p>
      <h1 id="round-number">#Round <?php echo $current_round; ?></h1>
    </div>

    <div class="random-container">
      <div class="clearfix">

        <?php for($i=0;$i<4;$i++){ ?>

        <div class="random-column" data-column-id="<?php echo $i ?>">
          <?php
          for( $ii=$i*$division; $ii<($i*$division)+$division; $ii++){
            echo '<div class="random-player" data-id="'.$players[$ii]->user_id.'" style="position: relative;">';
            if($players[$ii]->user_pic != ''){
                echo '<img src="'.MEDIA_URL.$players[$ii]->user_pic.'">';
            }else{
                echo '<img src="'.BASE_URL.'static/img/user_avatar.png">';
            }
            echo '<div class="overlay-gradient"></div>';
            echo '<h3 class="player" style="position: absolute; bottom: 0px; background: black; width: 300px; color:white;">  '.$players[$ii]->user_name.' </h3>';
            echo '</div>';
          }

          ?>
        </div>
        <?php } ?>




      </div>



    </div>

    <button class="primary-btn" type="button" id="random">Random</button>
    <a href="<?php echo BASE_URL.'admin/timer'; ?>" class="primary-btn" id="round-start" style="color:#FFF;display:none;">Start</a>
    <!--<a href="/codedark/admin/timer" style= class="primary-btn" type="button">Timer</a> -->

  </div>


<!--  -->

    <script>

     //base url
    var base_url = '<?php echo BASE_URL; ?>';

      //Imagens iniciais pre-random
      $('.random-column').each(function(i,item){
            $(this).prepend('<div class="random-player"><img src="<?php echo BASE_URL; ?>/static/img/'+(i+1)+'.jpg"></div>');
      });

      //Array que vai guardar ids
      var random_ids = [];

      //CLick no botão
      $('#random').click(function(){

          $(this).css({'display':'none'});
          $('#round-start').css({'display':'inline-block'});
          random_ids = [];
          random();
          save();

        /*if(document.getElementById("random").innerHTML == "Random") {
          random_ids = [];
          document.getElementById("random").innerHTML = "Start";
          random();
          save();
        } else {
          window.location.href = base_url+'admin/timer';
        }*/

      });

      $('.random-column .random-player').click(function(){

        var column = $(this).parent('.random-column').attr('data-column-id');

        random_ids.splice(column, 1)
        randomColumn(column);

        save();
      });

      function random() {
        //Loop para cada coluna
        $('.random-column').each(function(i,item){
          var pic_count = $(this).find('img').length - 1;
          var random = Math.ceil(pic_count * Math.random());
          random_ids.push( $(this).find('.random-player').eq(random).attr('data-id') );
          $(this).css('transition',pic_count/2+'s');
          $(this).css('top',-300*random);
        });
      }

      function randomColumn(index) {
        //Loop para cada coluna
        $('.random-column').eq(index).each(function(i,item){
          var pic_count = $(this).find('img').length - 1;
          var random = Math.ceil(pic_count * Math.random());
          random_ids.push( $(this).find('.random-player').eq(random).attr('data-id') );
          $(this).css('transition',pic_count/2+'s');
          $(this).css('top',-300*random);
        });
      }

      function save()
      {
        //Criar um round via ajax
        $.post(
          base_url+'admin/wall/createRound/',
          {
            'round': <?php echo $current_round; ?>,
            'players[]':random_ids
          },
          function(data){
            round++;
            console.log(data);
          }
        );
      }
    </script>

    <!-- Run Socket  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
    <script src="<?php echo ADMIN_JS.'socket/socket_admin.js?cache=<?php echo time(); ?>'; ?>"></script>
