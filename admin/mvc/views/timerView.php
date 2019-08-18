

    <link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>wall-base.css" />
    <?php /*<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>timer.css" />*/ ?>

  <main id="fx-main-container">
    <div class="fx-main-content">
      <p class="upper-title">Let's Fight</p>
      <?php if($final == 0){ ?>
      <h1>#Round <?= $current_round ?></h1>
      <?php }else{?>
      <h1>#Final Round</h1>
      <?php } ?>
      <h2 id="timer">15:00</h2>
      <div class="timer-control">
        <button class="primary-btn" id="start"><i class="fa fa-play"></i></button>
        <button class="primary-btn" id="stop"><i class="fa fa-pause"></i></button>
        <button class="primary-btn" id="resume"><i class="fa fa-retweet"></i></button>
        <a href="<?php echo ADMIN_URL.'wall/vote'; ?>" class="primary-btn" id="vote">Vote</a>
      <div>
    </div>
  </main>

  <div class="people-container">
    <div class="fx-people">
      <?php foreach($users as $key => $user) { ?>
      <?php $classes = ["fx-people-left-top", "fx-people-right-top", "fx-people-left-bottom", "fx-people-right-bottom"]; ?>

        <div class="<?= $classes[$key] ?>">
          <div class="people-box">
            <?php if($key % 2) { ?>
              <p style="color:white"><?= $user->user_name ?></p>
              <?php if($user->user_pic != ''){?>
              <img src="<?= MEDIA_URL.$user->user_pic ?>" width="150px;" alt="">
                <?php }else{ ?>
                <img src="<?php echo BASE_URL.'static/img/user_avatar.png' ?>" width="150px;" alt="">
                <?php } ?>
              <div class="timer-overlay-gradient o-right"></div>
            <?php } else { ?>
              <div class="timer-overlay-gradient"></div>
              <?php if($user->user_pic != ''){?>
              <img src="<?= MEDIA_URL.$user->user_pic ?>" width="150px;" alt="">
                <?php }else{ ?>
                <img src="<?php echo BASE_URL.'static/img/user_avatar.png' ?>" width="150px;" alt="">
                <?php } ?>
              <p style="color:white"><?= $user->user_name ?></p>
            <?php } ?>
          </div>
        </div>

      <?php } ?>
    </div>
  </div>

<style>


</style>
