
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>wall-base.css" />
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>timer.css" />

<body>

  <script>
    var base_url = '<?php echo BASE_URL; ?>';
  </script>

  <main id="fx-main-container">
    <div class="fx-main-content">
      <p class="upper-title">Let's Fight</p>
      <?php if($final == 0){ ?>
      <h1>#Round <?= $current_round ?></h1>
      <?php }else{?>
      <h1>#Final Round</h1>
      <?php } ?>
      <h2 id="timer">02:00</h2>
      <div class="timer-control">
        <button class="primary-btn" id="start-vote"><i class="fa fa-play"></i></button>
        <button class="primary-btn" id="stop-vote"><i class="fa fa-pause"></i></button>
        <button class="primary-btn" id="resume-vote"><i class="fa fa-retweet"></i></button>
        <a href="<?php echo ADMIN_URL.'wall/winner'; ?>" class="primary-btn" id="finish">Finish</a>
      <div>
    </div>
  </main>

  <div class="people-container">
    <div class="fx-people">
      <?php foreach($users as $key => $user) { ?>
      <?php $classes = ["fx-people-left-top", "fx-people-right-top", "fx-people-left-bottom", "fx-people-right-bottom"]; ?>

        <div class="<?= $classes[$key] ?>">
          <div class="people-box" id="player-<?= $user->user_id; ?>">
            <?php if($key % 2) { ?>
              <div class="player-graphic">
                <p class="competitors text-right"><?= $user->user_name ?></p>
                <div class="graphic-container">
                  <div class="graphic"></div>
                  <div class="graphic-score-right graph"></div>
                </div>
                <p class="competitors votes text-right"><?= $user->round_users_votes; ?> Votes</p>
              </div>
              <?php if($user->user_pic != ''){?>
              <img src="<?= MEDIA_URL.$user->user_pic ?>" width="150px;" alt="">
              <?php }else{ ?>
              <img src="<?= BASE_URL.'static/img/user_avatar.png' ?>" width="150px;" alt="">
              <?php } ?>
              <div class="timer-overlay-gradient o-right"></div>


            <?php } else { ?>
                <?php if($user->user_pic != ''){?>
                <img src="<?= MEDIA_URL.$user->user_pic ?>" width="150px;" alt="">
                <?php }else{ ?>
                <img src="<?= BASE_URL.'static/img/user_avatar.png' ?>" width="150px;" alt="">
                <?php } ?>
              <div class="timer-overlay-gradient"></div>
              <div class="player-graphic">
                <p class="competitors"><?= $user->user_name ?></p>
                <div class="graphic-container">
                  <div class="graphic"></div>
                  <div class="graphic-score graph"></div>
                </div>
                <p class="competitors votes"><?= $user->round_users_votes; ?> Votes</p>
              </div>
            <?php } ?>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>


  <script>

   var base_url = '<?php echo BASE_URL; ?>';
   var count_votes_interval;
   var max_votes = <?php echo $max_votes; ?>;

   function updateScore(){
       $.ajax({
         dataType:'json',
         url: base_url+'/admin/wall/updatescore',
       }).done(function(data){
         $.each(data,function(index,value){

          var width = Math.min( value.round_users_votes * 100 / max_votes , 100);

          $("#player-"+value.round_users_user_id).find('.votes').html(value.round_users_votes+' Votes');
          $("#player-"+value.round_users_user_id).find('.graph').attr('style','width:'+width+'%');


           if(value.round_users_votes >= max_votes){
               $.get(base_url+'admin/socket/turnvoteoff',function(){
                   currentTime = timer;
                   clearInterval(interval);
                   clearInterval(count_votes_interval);
                   //$("#player-"+value.round_users_user_id).addClass('winner-box');
                   socket.emit('change-page', 'vote' );
               });
           }

         });

       });
   }

   $(document).ready(function(){
       updateScore();
       count_votes_interval = setInterval(updateScore, 2000);
   });

  </script>

  <!-- Run Socket  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
  <script src="<?php echo ADMIN_JS.'socket/socket_admin.js'; ?>"></script>
