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
        <!--<i class="fa fa-trophy yellow big-i"></i>-->
        <img style="width:250px;" src="<?= MEDIA_URL.$win->user_pic ?>" alt="">
        <!--<i class="fa fa-trophy yellow big-i"></i>-->
      </div>

      <div class="people">
        <p class="text-center"><?= $win->user_name ?></p>
        <p class="text-center pink"><?= $win->round_users_votes; ?> votos</p>
      </div>
      <?php } ?>
  </main>

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


<button id="startConfetti" style="display:none;">Start</button>
<script src="<?php echo BASE_URL.'admin/static/js/confetti/jquery.confetti.js'?>"></script>
<script>
    $('#startConfetti').trigger('click');
</script>

<!-- Run Socket  -->
<script>var base_url = '<?php echo BASE_URL; ?>';</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
<script src="<?php echo BASE_URL.'static/js/socket_front.js'; ?>"></script>
