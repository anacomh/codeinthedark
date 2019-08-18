<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>wall-base.css" />
<title>Winner</title>
</head>

<body>


  <main id="fx-main-container">
    <div class="fx-main-content full-content">
      <p class="upper-title">Meet the</p>
      <h1>Winners</h1>
      <br>
      <div class="vote-front">
        <div class="container">
          <div class="row">

            <!-- if it's already a winner -->
            <!-- <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                <img width="300px" src="<?php echo IMG_URL.'1.jpg'; ?>" alt="">
                <div class="vote">
                  <span class="round">Round Number</span>
                </div>
              </div>
              <p class="text-center">Ana Gomes</p>
            </div> -->

            <!-- if winner is not defined -->
            <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                <img width="300px" src="<?php echo IMG_URL.'1.jpg'; ?>" alt="">
                <div class="future-winner">
                </div>
              </div>
              <p class="text-center">Undefined</p>
            </div>

            <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                <img width="300px" src="<?php echo IMG_URL.'2.jpg'; ?>" alt="">
                <div class="future-winner">
                </div>
              </div>
              <p class="text-center">Undefined</p>
            </div>

            <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                <img width="300px" src="<?php echo IMG_URL.'3.jpg'; ?>" alt="">
                <div class="future-winner">
                </div>
              </div>
              <p class="text-center">Undefined</p>
            </div>

            <div class="col col3 m-col3 s-col6 left">
              <div class="vote-people">
                <img width="300px" src="<?php echo IMG_URL.'4.jpg'; ?>" alt="">
                <div class="future-winner">
                </div>
              </div>
              <p class="text-center">Undefined</p>
            </div>





        </div>
      </div>
    </div>

  </main>
  <div class="people-container" style="z-index:99;">
      <div class="fx-people-right-top">
          <!-- <button href="index.html" style="margin:2em;z-index:99;" type="" name="button"><i class="fa fa-trophy yellow"></i></button> -->
          <a href="winner/vote" style="margin:2em;"><i class="fa fa-star yellow"></i></a>
      </div>
  </div>








<style>
.vote-people{position: relative;}
.vote i{padding: .2em;font-size: 3.5em;margin: 0;position: absolute;top: 50%;left: 50%;transform:translate(-50%,-50%);background: #fff;border-radius: 50px;}
.round{padding: .2em;font-size: 1em;width: 70%;position: absolute;top: 50%;left: 50%;transform:translate(-50%,-50%);background: #000;font-family: 'Space Mono', monospace;font-weight: 700;}
.vote{position: absolute;top: 0;height: 100%;width: 100%;background: linear-gradient(to bottom right,#34ff94d6,#e100b485);}
.future-winner{position: absolute;top: 0;height: 100%;width: 100%;border: 2px solid deeppink;}
.vote-front p {font-size: 1em;font-family: 'Space Mono', monospace;font-weight: 700;font-size: 1.2em;}
.full-content{width: 100%;}
.winner{display: flex;align-items: center;}

i{color: #fff;}
p{color: #fff;}
</style>
