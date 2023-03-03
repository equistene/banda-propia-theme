<section class="homeVideos">
  <div class="container">
    
    <h2 class="titleSection">Videos</h2>

    <div class="videoPlayer">
      <?php query_posts('category_name=videos&showposts=1'); ?>
      <?php while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="thumb">
          <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large'); ?>
          <?php endif ?>
        </div>
        <div class="layer"></div>
        <div class="data">
          <h2><?php the_title(); ?></h2>
        </div>
      </a>
      <?php endwhile;?>
      <?php wp_reset_query(); ?>      
    </div>

  </div>
</section>