<section class="homeLists">
  <div class="container">
    <h2 class="titleSection">Listas</h2>
  </div>
  <?php query_posts('category_name=listas&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="listContainer">
    <div class="container">      
      <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
      </a>
    </div>
    <div class="bgImg">
      <div class="layer"></div>
      <?php the_post_thumbnail('large'); ?>
    </div>    
  </div>
  <?php endwhile;?>
  <?php wp_reset_query(); ?>  
  <div class="row buttonRight container">
    <a href="<?php echo get_option('home'); ?>/category/listas">
      Más listas
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</section>