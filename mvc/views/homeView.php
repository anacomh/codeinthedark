<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL.'glitch/glitch.css'; ?>" />

<!-- Facebook -->
<meta property="og:title" content="Code in the Dark Lisboa">
<meta property="og:description" content="Evento de front-end que junta código, amigos e cerveja num só espaço! Venha se divertir com a gente!">
<meta property="og:image" content="<?php echo IMG_URL.'dec-code-in-the-dark-lisboa-og.png'; ?>">
<meta property="og:url" content="http://codeinthedark.pt/">

<!-- Twitter -->
<meta name="twitter:title" content="Code in the Dark Lisboa">
<meta name="twitter:description" content="Evento de front-end que junta código, amigos e cerveja num só espaço! Venha se divertir com a gente!">
<meta name="twitter:image" content="https://codeinthedark.pt/static/img/dec-code-in-the-dark-twitter-og.png">
<meta name="twitter:card" content="summary_large_image">

</head>

<body class="demo-1 loading">
    <!-- Intro -->
    <section class="intro content-wrap">
        <div class="container">
          <div class="morph-wrap">
    				<svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
    					<path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
    				</svg>
    			</div>
          <!-- Main header -->
          <div class="glitch">
              <div class="glitch__img"></div>
              <div class="glitch__img"></div>
              <div class="glitch__img"></div>
              <div class="glitch__img"></div>
              <div class="glitch__img"></div>
            </div>
          <div class="header-content">
            <!-- nav top -->
            <div class="header-logo"><img src="<?php echo IMG_URL.'citd-logo.png'; ?>" /></div>
            <?php // foreach($vote as $vote_vis){ ?>
              <?php // if($vote_vis->round_users_votes_vis == 1){ ?>
              <!-- <div class="header-vote"><a href="vote" class="primary-btn">vote</a></div> -->
          <?php // } } ?>
            <!-- center glitch -->


              <header>
                  <h1 class="content__title">
                      SO YOU THINK YOU KNOW FRONT-END?
                  </h1>
                  <br>
                  <a class="primary-btn" href="https://ti.to/gdg-devfest-lisbon/gdg-devfest-lisbon-18/with/qloutwyaskg">Compete</a>
              </header>

            <!-- nav bottom -->
            <div class="header-day content__title">
              08.dez.18 às 20h
            </div>

            <div class="header-place content__title">
              Altice Picoas
            </div>

            <div class="header-mobile">
              08.dez.18 às 20h, Altice Picoas
            </div>
          </div>

        </div>
    </section>

    <!-- O evento -->
    <section class="home-section content-wrap">

      <div id="about">
        <div class="container">
          <div class="row">
            <div class="col col4 m-col4 s-col12 left">
              <header class="section-header">
                  <div class="upper-title text-left s-col text-center">Sem Photoshop</div>
                  <h2 class="text-left s-col text-center">O Evento</h2>
              </header>
            </div>
            <div class="col col4 m-col4 s-col12 left">
                <p>Este é o evento de front-end mais fixe do mundo, que junta código, amigos e cerveja num só espaço!</p>
                <p>Num total de 16 competidores, 4 rondas de 15 minutos cada e uma ronda final.Um vencedor apenas!!!</p>
                <p>Os competidores só podem usar HTML e CSS, tentando implementar um layout de um site apenas com uma captura de ecrã.</p>
                <p>Não podem ser utilizadas outras ferramentas além das que são disponibilizadas em cada ronda.</p>
            </div>
            <div class="col col4 m-col4 s-col12 left">
                <p>A verdadeira emoção da competição é que a visualização do layout que está a ser implementado só pode ser feita no final da ronda
                tanto pelo competidor, como por todas as pessoas que estarão no evento. Assim todos poderão ficar surpreendidos com o desfecho.</p>
                <p>Após terem sido vistos todos os layouts, começa a votação!</p>
                <p>O público pode votar no seu concorrente preferido as vezes que quiser, levando assim o seu competidor favorito ao pódium!</p>
                <!--<p>O vencedor é decidido pelo público.</p>-->
            </div>
          </div>

        </div>
      </div>

    </section>


    <!-- Rules -->
    <section class="home-section content-wrap">
        <div class="glitch">
          <div class="glitch__img2"></div>
          <div class="glitch__img2"></div>
          <div class="glitch__img2"></div>
          <div class="glitch__img2"></div>
          <div class="glitch__img2"></div>
        </div>
        <div class="container">
            <header class="section-header">
                <div class="upper-title content__text">Know the Rules</div>
                <h2 class="content__text">Como funciona</h2>
            </header>

            <div class="row">
                <div class="col col3 m-col6 s-col12 left">
                    <article class="rules">
                        <figure><img src="<?php echo IMG_URL.'bi1.png'; ?>" /></figure>
                        <header>
                            <h3>15 minutes</h3>
                        </header>
                    </article>
                </div>
                <div class="col col3 m-col6 s-col12 left">
                    <article class="rules">
                        <figure><img src="<?php echo IMG_URL.'bi2.png'; ?>" /></figure>
                        <header>
                          <h3>HTML/CSS only</h3>
                        </header>
                    </article>
                </div>
                <div class="col col3 m-col6 s-col12 left">
                    <article class="rules">
                        <figure><img src="<?php echo IMG_URL.'bi3.png'; ?>" /></figure>
                        <header>
                            <h3>No Previews</h3>
                        </header>
                    </article>
                </div>
                <div class="col col3 m-col6 s-col12 left">
                    <article class="rules">
                        <figure>
                          <img src="<?php echo IMG_URL.'bi4.png'; ?>" />
                        </figure>
                        <header>
                            <h3>One Winner</h3>
                        </header>
                    </article>
                </div>
            </div>
        </div>
    </section>




    <!-- organizers -->
    <section class="home-section organizer content-wrap">
        <div class="container">

            <header class="section-header">
                <div class="upper-title">conheça o</div>
                <h2>Staff</h2>
            </header>

            <div class="row">
                <div class="col col2 m-col6 s-col12 left">
                    <article class="organizer">
                        <figure><a href="https://www.linkedin.com/in/anagogomes/"><img src="<?php echo IMG_URL.'ana-gomes.jpg'; ?>" /></a></figure>
                        <header>
                            <h3>Ana<br>Gomes</h3>

                        </header>
                    </article>
                </div>
                <div class="col col2 m-col6 s-col12 left">
                    <article class="organizer">
                        <figure><a href="http://www.adentro.co/anah-assumpcao/"><img src="<?php echo IMG_URL.'anah-assumpcao.jpg'; ?>" /></a></figure>
                        <header>
                            <h3>Anah<br>Assumpção</h3>

                        </header>
                    </article>
                </div>
                <div class="col col2 m-col6 s-col12 left">
                    <article class="organizer">
                        <figure><a href="https://www.facebook.com/filipe.paulo.1232/"><img src="<?php echo IMG_URL.'filipe-paulo.jpg'; ?>" /></a></figure>
                        <header>
                            <h3>Filipe<br>Paulo</h3>
                        </header>
                    </article>
                </div>
                <div class="col col2 m-col6 s-col12 left">
                    <article class="organizer">
                        <figure><a href="https://www.facebook.com/goncalo.santos.54584"><img src="<?php echo IMG_URL.'goncalo-santos.jpg'; ?>" /></a></figure>
                        <header>
                          <h3>Gonçalo<br>Santos</h3>

                        </header>
                    </article>
                </div>
                <div class="col col2 m-col6 s-col12 left">
                    <article class="organizer">
                        <figure><a href="https://www.linkedin.com/in/patriciavicentemartins/"><img src="<?php echo IMG_URL.'patricia-martins.jpg'; ?>" /></a></figure>
                        <header>
                          <h3>Patrícia Martins</h3>
                        </header>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>


    <!-- Sponsors -->
    <section class="home-section content-wrap mobile-sponsor">
      <div class="glitch">
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
      </div>
        <div class="container">
            <header class="section-header">
                <div class="upper-title">em parceria com</div>
                <!-- <h2>PARCERIA COM</h2> -->
            </header>

            <div class="row sponsors">
              <a href="https://devfest.gdglisbon.xyz"><img style="width:320px;margin-top:20px;" src="<?php echo IMG_URL.'gdg-devfest-logo.png'; ?>" alt="GDG DevFest"></a>
              <div style="margin-top:120px;"class="upper-title">Agradecimentos</div>
              <a href="https://tictail.com/"><img style="padding:1.5em 0;width:100px;" src="<?php echo IMG_URL.'tictail.png'; ?>" /></a>
              <a style="display: block;" href="http://codeinthedark.com/">Code in the Dark</a>
            </div>
        <!-- close container -->
        </div>
    </section>


    <!-- Sponsors -->
    <section class="home-section content-wrap">
      <div class="glitch">
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
        <div class="glitch__img2"></div>
      </div>


        <div class="container">
            <header class="section-header">
                <div class="upper-title">Tire as suas dúvidas</div>
                <h2>FAQ</h2>
            </header>
            <div class="row">
              <div class="col col12">
                <div class="faq-wrapper">
                  <div class="faq-box">
                    <h3 class="faq-title">Quem pode participar?</h3>
                    <p>O evento é focado apenas em desenvolvedores(as) front-end e isso será pré-requisito nas inscrições! De estagiário(a) a sênior, todos poderão participar.</p>
                  </div>
                  <div class="faq-box">
                    <h3 class="faq-title">Posso ir apenas assistir?</h3>
                    <p>Quem estiver lá vai poder interagir votando em cada rodada da competição. Além disso, caso não seja um dos(as) competidores, a oportunidade de fazer network vai ser incrível!</p>
                  </div>
                  <div class="faq-box">
                    <h3 class="faq-title">Eu quero competir. Como será feita a escolha dos participantes das rodadas?</h3>
                    <p>Serão 16 competidores e, para participar, você precisa de se inscrever à entrada do evento. Se tivermos mais de 16 interessados, faremos um sorteio.</p>
                  </div>
                  <div class="faq-box">
                    <h3 class="faq-title">Posso usar meu editor de código habitual?</h3>
                    <p>Não. O editor será o do evento. Pode testá-lo <a href="<?php echo BASE_URL.'editor';?>">aqui.</a></p>
                  </div>
                  <div class="faq-box">
                    <h3 class="faq-title">Preciso levar o meu computador para participar?</h3>
                    <p>Não. Cada participante terá um computador à disposição com as mesmas características.</p>
                  </div>
                  <div class="faq-box">
                    <h3 class="faq-title">Posso usar alguma ferramenta de medição de pixels, de cor ou qualquer outra coisa parecida?</h3>
                      <p>Definitivamente, não! Só poderá ter acesso ao editor. Só. Mais nada!</p>
                  </div>

                  <div class="faq-box">
                    <h3 class="faq-title">Eu consigo ver o resultado do que eu estiver a fazer?</h3>
                      <p>Hahahahah não. Só código, sem visualização do resultado.</p>
                  </div>

                  <div class="faq-box">
                    <h3 class="faq-title">O que é que o público vai fazer enquanto os competidores estiverem a desenvolver?</h3>
                      <p>Quem for assistir não vai só estar a ver! O público vai votar no melhor resultado e definir os vencedores de cada rodada.</p>
                  </div>

                  <div class="faq-box">
                    <h3 class="faq-title" id="showvideo">Como foi a edição de Julho de 2018?</h3>
                    <p>A Edição foi incrível e o ganhador foi José Rosário. O site da primeira edição pode ser acessado <a href="<?php echo BASE_URL.'home/citd2017';?>">aqui.</a></p>
                    <div id="videocitd" style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/280233581?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                  </div>








                </div>



              </div>
            </div>
        <!-- close container -->
        </div>
    </section>


    <!-- Map -->


<section class="home-section map-section content-wrap">
  <div class="map-content">
    <div class="container">
        <header class="section-header">
            <div class="upper-title">Como chegar</div>
            <h2>MAPA</h2>
            <p class="text-center">Altice Picoas, Av. Fontes Pereira de Melo 40, 1050-118 Lisboa </p>

        </header>
    </div>
    <div class="map">
      <div class="content--related" id="map"></div>
    </div>
  </div>
</section>

<!-- faq.js -->
<script src="<?php echo JS_URL.'faq.js'; ?>"></script>

<!-- maps -->
<script src="<?php echo JS_URL.'altice.js'; ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhNsD1Q-j2O-WqJmMiRiEu9BuTaj9p-ak&callback=initMap"
async defer></script>

<!-- morph -->
<script src="<?php echo JS_URL.'morph/imagesloaded.pkgd.min.js'; ?>"></script>
<script src="<?php echo JS_URL.'morph/anime.min.js'; ?>"></script>
<script src="<?php echo JS_URL.'morph/scrollMonitor.js'; ?>"></script>
<script src="<?php echo JS_URL.'morph/morph.js'; ?>"></script>

<!-- glitch -->
<script src="<?php echo JS_URL.'glitch/glitch.js'; ?>"></script>
