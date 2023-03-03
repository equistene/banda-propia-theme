<div class="item">
  <div class="col thumb">
    <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('video-ratio'); ?>
    <?php else: ?>
      <img src="<?php bloginfo('template_url'); ?>/img/nothumb.jpg" alt="Banda Propia">
    <?php endif ?>
    </a>
  </div>
  <div class="col">
    <div class="row top">      
      <img src="<?php bloginfo('template_url'); ?>/img/mudanzas_title.png" alt="">
      <h3><?php the_field('numero'); ?></h3>
      <img src="<?php bloginfo('template_url'); ?>/img/mudanzas_fest.png" alt="">
    </div>      
    <div class="row bottom">
      <h2><?php the_field('nombre'); ?><br>
      <?php the_field('fecha'); ?></h2>
    </div>    
  </div>
</div>