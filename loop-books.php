<div class="itemsCatalogo">      
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="itemBook">
      <a href="<?php the_permalink(); ?>">
        <div class="thumb">        
          <?php the_post_thumbnail('large'); ?>          
        </div>
        <div class="data">
          <h2><?php the_title(); ?></h2>
          <h3>
            <?php $termAutor = wp_get_object_terms( $post->ID, 'autor'); ?>
            <?php foreach($termAutor as $key=>$value) { $nameAutor = $termAutor[$key]->name; echo $nameAutor . " • "; } ?>
          </h3>
          <p>
            <?php
              $term_list = wp_get_object_terms( $post->ID, 'coleccion');
              $termName = $term_list[0]->name;              
              echo $termName;
            ?>

			  <?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
			</p>
    </div>    <?php endwhile; endif; ?>

</div>

</div>  