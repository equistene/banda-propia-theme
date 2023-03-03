<section class="relatedPosts">
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4
  );
  $query = new WP_Query($args);
  if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
    <?php get_template_part('template-parts/parts/item'); ?>
  <?php endwhile; wp_reset_postdata(); endif; ?>
</section>