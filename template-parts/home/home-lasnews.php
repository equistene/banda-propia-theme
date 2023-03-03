<section class="homeLasNews">
  <div class="container">
    <h2 class="titleSection">Las News</h2>    
  </div>  

  <div class="itemsList">
    <?php for ($i = 1; $i <= 3; $i++) { ?> 
    <div class="item">
      <div class="col">
        <div class="thumb">
          <img src="<?php bloginfo('template_url'); ?>/img/cf.jpg" alt="Imagen">
        </div>
      </div>
      <div class="col">
        <div class="data">
          <p>Repasamos lo mejor de la banda mexicana</p>
          <h2>Café Tacvba : Seguir siendo</h2>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="row buttonRight container">
    <a href="#">
      Más News
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</section>