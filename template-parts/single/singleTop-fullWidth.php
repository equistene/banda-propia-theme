<section class="singleTop">			
  <div class="poster">
  <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail('large'); ?>
  <?php else: ?>
    <img src="<?php bloginfo('template_url'); ?>/img/cf.jpg" alt="">
  <?php endif ?>				
  </div>

  <div class="titlePost">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

</section>