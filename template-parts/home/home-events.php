<section class="homeEvents">
  <div class="container">
    <h2 class="titleSection">Eventos</h2>

    <div class="itemsList">
      <?php for ($i = 1; $i <= 4; $i++) { ?> 
        <div class="item">
          <a href="#">
            <div class="thumb">
              <div class="layer"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/cf.jpg" alt="">
            </div>
            <div class="data">
              <div class="top">
                <h3>Tropicalia Fest 2021</h3>
                <h4>March 13 - 14</h4>
              </div>
              <div class="bottom">
                <span>Buy Tickets</span>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>

    <div class="row buttonRight">
      <a href="#">
        Más Eventos
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
  </div>
</section>