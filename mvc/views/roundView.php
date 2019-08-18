<body>

<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>wall-base.css" />

  <?php if(isset($current_round)){ ?>

  <main id="fx-main-container" style="z-index:0;">
    <div class="fx-main-content full-content">
      <p class="upper-title">Vote</p>


      <h1>#Round <?php echo $current_round->rounds_number; ?></h1>

      <br>
      <div class="vote-front" style="z-index:99;">
        <div class="container">
          <div class="row">

            <?php foreach($players as $player) { ?>
              <?php if($player->round_users_votes_vis == 0) {?>
            <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                <?php if($player->user_pic != ''){ ?>
                <img width="300px" src="<?php echo MEDIA_URL.$player->user_pic; ?>" alt="">
                <?php }else{ ?>
                <img width="300px" src="<?php echo BASE_URL.'static/img/user_avatar.png'; ?>" alt="">
                <?php } ?>
                <div class="vote">

                </div>
              </div>
              <p class="text-center"><?php echo $player->user_name; ?><br>

            </div>

          <?php } else { ?>
            <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                  <?php if($player->user_pic != ''){ ?>
                  <img width="300px" src="<?php echo MEDIA_URL.$player->user_pic; ?>" alt="">
                  <?php }else{ ?>
                  <img width="300px" src="<?php echo BASE_URL.'static/img/user_avatar.png'; ?>" alt="">
                  <?php } ?>
                <div class="vote">
                  <a href="<?php echo BASE_URL.'vote/addVote/'.$player->user_id; ?>" class="vote-link" data-round-id="<?php echo $current_round->rounds_id; ?>">
                      <i class="fa fa-star yellow big-i page-button"></i>
                  </a>
                </div>
              </div>
              <p class="text-center"><?php echo $player->user_name; ?><br>
            </div>
          <?php }}?>
        </div>
        </div>
      </div>

  </main>

  <?php }else{ ?>

      <main id="fx-main-container" style="z-index:0;">
        <div class="fx-main-content full-content">
          <p class="upper-title">Vote Page</p>

          <h1>The fun will begin soon...</h1>

          </main>

  <?php } ?>

  <!-- <div class="people-container" style="z-index:0!important;">
      <div class="fx-people-right-top">
          <a href="vote/winner" style="margin:2em;"><i class="fa fa-trophy yellow"></i></a>
      </div>
  </div> -->

  <!-- Run Socket  -->
  <script>var base_url = '<?php echo BASE_URL; ?>';</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
  <script src="<?php echo BASE_URL.'static/js/socket_front.js?cache=<?php echo time();?>'; ?>"></script>
  <script src="<?php echo BASE_URL.'static/js/vote2.js?cache=<?php echo time();?>'; ?>"></script>



<style>
.people-container{z-index: 0!important;}
.vote-people{position: relative;}
.vote i{padding: .2em;font-size: 3.5em;margin: 0;position: absolute;top: 50%;left: 50%;transform:translate(-50%,-50%) rotateY(0deg);background: #fff;border-radius: 50px;transform-origin:0 0;}
.vote{position: absolute;top: 0;height: 100%;width: 100%;background: linear-gradient(to bottom right,#34ff94d6,#e100b485);}
.vote-front p {font-size: 1em;font-family: 'Space Mono', monospace;font-weight: 700;font-size: 1.2em;}
.full-content{width: 100%;}
.winner{display: flex;align-items: center;}

i{color: #fff;}
p{color: #fff;}
</style>
