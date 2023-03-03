<section class="singleTopMidWidth">			
  <div class="thumb">
  <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail('large'); ?>
  <?php else: ?>
    <img src="<?php bloginfo('template_url'); ?>/img/cf.jpg" alt="">
  <?php endif ?>				
  </div>

  <div class="titlePost">
    <div class="data">
      <span class="cat">
      <?php get_template_part('template-parts/parts/getCat'); ?>
      </span>
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

</section>