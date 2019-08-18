
<div class="fx-main-content">



    <div id="round">
      <p class="upper-title">So you think you know front-end?</p>
      <h1 id="round-number">Final</h1>
    </div>

    <div class="random-container">
      <div class="clearfix">

        <?php for($i=0;$i<4;$i++){ ?>

        <div class="random-column" data-column-id="<?php echo $i ?>">
          <?php

            echo '<div class="random-player" data-id="'.$players[$i]->user_id.'" style="position: relative;">';
            echo '<img src="'.MEDIA_URL.$players[$i]->user_pic.'">';
            echo '<div class="overlay-gradient"></div>';
            echo '<h3 class="player" style="position: absolute; bottom: 0px; background: black; width: 300px; color:white;">  '.$players[$i]->user_name.' </h3>';
            echo '</div>';


          ?>
        </div>
        <?php } ?>




      </div>



    </div>

    <br /><br />
    <a href="<?php echo BASE_URL.'admin/timer/'; ?>"  class="primary-btn" id="random">Start</a>
    <!--<a href="/codedark/admin/timer" style= class="primary-btn" type="button">Timer</a> -->

  </div>


<!--  -->

    <script>


    </script>
