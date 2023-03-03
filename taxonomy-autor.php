<?php get_header();
  $taxonomy = get_queried_object();
  $taxName = $taxonomy->name;
  $taxDesc = $taxonomy->description;  
  $taxSlug = $taxonomy->slug;
  $taxID = $taxonomy->term_taxonomy_id;
  $taxDescLong = get_field('descripcion_larga', 'term_'. $taxID);  
  $image = get_field('imagen', 'term_'. $taxID);  
?>
  

	<main class="page container">						

    <section class="authorProfileTop">
      <div class="bio">
        <h1><?php echo $taxName; ?></h1>
        <?php if($taxDescLong):?>
          <p><?php echo $taxDescLong; ?></p>
        <?php else: ?>
          <p><?php echo $taxDesc; ?></p>
        <?php endif;?>
      </div>
      <div class="photo">
        <img src="<?php echo $image ?>" alt="">
      </div>
    </section>

    <section class="authorProfileBottom">
      <div class="books">
        <?php
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => 100,
            'tax_query' => array(
              array(
                'taxonomy' => 'autor',
                'field' => 'term_id',
                'terms' => $taxID
              )
            )
          );
          $query = new WP_Query($args);
          if($query->have_posts()) : while($query->have_posts()): $query->the_post();
        ?>
          <div class="itemBook">
            <a href="<?php the_permalink(); ?>">
              <div class="thumb">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class="data">
                <h2><?php the_title(); ?></h2>
                <h3>
                  <?php
                    $termAutor = get_the_terms( $post->ID, 'autor' );
                    $nameAutor = $termAutor[0]->name;
                    echo $nameAutor;
                  ?>
                </h3>
                <p>
                <?php
                    $termColeccion = get_the_terms( $post->ID, 'coleccion' );
                    $nameColeccion = $termColeccion[0]->name;
                    echo $nameColeccion;
                  ?>
                </p>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>        
      </div>
      <div class="relatedNews">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 100,
          'tax_query' => array(
            array(
              'taxonomy' => 'autor',
              'field' => 'term_id',
              'terms' => $taxID
            )
          )
        );
        $query = new WP_Query($args);
        if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
          <?php get_template_part('template-parts/parts/item'); ?>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </section>

	</main>

<?php get_footer(); ?>