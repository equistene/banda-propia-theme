<?php get_header(); ?>

	<main class="page container">				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="authorProfileTop">
      <div class="bio">
        <h1>Edwidge Danticat</h1>
        <p>(1969) Nació en Puerto Príncipe, Haití.  Actualmente reside en Estados Unidos, país al que migró cuando tenía doce años. Ha publicado las novelas Palabras, ojos, memoria (1994) y Cosecha de huesos (1998); y los volúmenes de cuentos ¿Cric? ¡Crac! (2000) y El quebrantador (2004), entre otros títulos literarios y de no ficción. Es colaboradora en The New Yorker, Time y The Progressive. Fue finalista del National Book Award, ganadora del National Critics Circle Award y beneficiada con la MacArthur Fellowship en 2009. Sus libros circulan en más de siete idiomas. Esta w la primera traducción de Crear en peligro: El trabajo del artista migrante a nuestra lengua.</p>
      </div>
      <div class="photo">
        <img src="<?php bloginfo('template_url'); ?>/img/edwidge.jpg" alt="">
      </div>
    </section>

    <section class="authorProfileBottom">
      <div class="books">
        <?php for ($i = 1; $i <= 2; $i++) { ?> 
          <div class="itemBook">
            <a href="<?php echo get_option('home'); ?>/catalogo/libro">
              <div class="thumb">
                <img src="<?php bloginfo('template_url'); ?>/img/bookCover.jpg" alt="">
              </div>
              <div class="data">
                <h2>Crear en peligro: el trabajo del artista migrante</h2>
                <h3>Edwidge Danticat</h3>
                <p>Colección</p>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
      <div class="relatedNews">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4
      );
      $query = new WP_Query($args);
      if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
        <?php get_template_part('template-parts/parts/item'); ?>
      <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </section>

		<?php endwhile; endif; ?>		
	</main>

<?php get_footer(); ?>