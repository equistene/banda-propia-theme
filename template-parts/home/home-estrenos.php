<section class="homeEstrenos">  
  
  <?php query_posts('category_name=estrenos&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="container">
    <a href="<?php the_permalink(); ?>">
      <h2><?php the_title(); ?></h2>      
    </a>
  </div>
  <div class="gradientImg"></div>
  <div class="bgImg">
    <?php the_post_thumbnail('large'); ?>
  </div>
  <?php endwhile;?>
  <?php wp_reset_query(); ?>  

  <div class="row buttonRight container">
    <a href="<?php echo get_option('home'); ?>/category/estrenos/">
      All new Music
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</section>