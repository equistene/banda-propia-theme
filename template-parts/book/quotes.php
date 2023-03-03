<section class="quotes">
  <?php if( have_rows('resenas') ): ?>
    <?php while( have_rows('resenas') ): the_row(); ?>
    <div class="itemQuotes">
      <p>«<?php the_sub_field('resena'); ?>»</p>
      <h4>— <?php the_sub_field('autor'); ?></h4>
    </div>
    <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
  <?php endif; // if( get_field('to-do_lists') ): ?>  
</section>