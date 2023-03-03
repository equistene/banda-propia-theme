<?php
  /* Template Name: Catalogo */ 
  get_header();
?>

	<main class="page">				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="topCatalogo" style="background: url(<?php bloginfo('template_url'); ?>/img/bgCatalogo.jpg) no-repeat center center;background-size: cover; ">
      <div class="container">
        <h1>Colección nombre</h1>
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt magna a diam tristique semper. In orci elit, dictum hendrerit aliquet id, hendrerit ut arcu.</p>
        </div>
      </div>
    </section>

		<section class="contentPage container">
			<?php the_content(''); ?>

      <div class="itemsCatalogo">
        <?php for ($i = 1; $i <= 8; $i++) { ?> 
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
		</section>

		<?php endwhile; endif; ?>		
	</main>

<?php get_footer(); ?>