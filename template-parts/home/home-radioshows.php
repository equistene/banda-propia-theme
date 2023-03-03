<section class="homeRadioShows">
  <div class="container">
    <h2 class="titleSection">Los Radio Shows</h2>

    <div class="itemsList">
      <?php for ($i = 1; $i <= 3; $i++) { ?> 
        <div class="item">
          <a href="#">
            <div class="col">
              <img src="<?php bloginfo('template_url'); ?>/img/cf.jpg" alt="">
            </div>
            <div class="col">
              <div class="data">
                <h2>Piloto Espacial</h2>
                <div class="date">
                  <p>Friday. 4PM</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>

    <div class="row buttonRight">
      <a href="<?php echo get_option('home'); ?>/shows/">
        All Radio Shows
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>

  </div>
</section>