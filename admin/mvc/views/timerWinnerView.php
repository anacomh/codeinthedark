<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>wall-base.css" />
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>timer.css" />
<title>Winner</title>
</head>

<body>


  <main id="fx-main-container">
    <div class="fx-main-content">
      <p class="upper-title">Meet the Winner</p>
      <?php if($final == 0){ ?>
      <h1>#Round <?= $current_round ?></h1>
      <?php }else{ ?>
      <h1>#Final Round</h1>
      <?php } ?>
      <br>
      <?php foreach ($winner as $win) {?>
      <div class="winner">
        <i class="fa fa-trophy yellow big-i"></i>
        <?php if($win->user_pic != ''){?>
        <img style="width:250px;" src="<?= MEDIA_URL.$win->user_pic ?>" alt="">
        <?php }else{ ?>
        <img style="width:250px;" src="<?= BASE_URL.'static/img/user_avatar.png' ?>" alt="">
        <?php } ?>

        <i class="fa fa-trophy yellow big-i"></i>
      </div>

      <div class="people">
        <p class="text-center"><?= $win->user_name ?></p>
        <p class="text-center pink"><?= $win->round_users_votes; ?> votos</p>
      </div>
      <?php } ?>
  </main>
  <div class="people-container" style="z-index:99;">
      <div class="fx-people-right-top">
        <br><br>
          <a href="<?php echo ADMIN_URL.'wall/generateFinal'; ?>" class="primary-btn" style="margin:2em;top:2em!important;" type="" name="button">Generate Final</a>
          <a href="<?php echo ADMIN_URL.'wall'; ?>" class="primary-btn" style="margin:2em;top:2em!important;" type="" name="button">Restart</a>
      </div>
  </div>
<style>

.winner{display: flex;align-items: center;}
.people{
  font-family: 'Space Mono', monospace;
      font-weight: 700;
      font-size: 1.5em;
}
i{color: #fff;}
p{color: #fff;}
</style>

<?php if($final==1){ ?>
<button id="startConfetti">Start</button>
<script src="<?php echo BASE_URL.'admin/static/js/confetti/jquery.confetti.js'?>"></script>
<script>
    $('#startConfetti').trigger('click');
</script>
<?php } ?>
