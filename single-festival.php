<?php get_header(); ?>	

	<main class="single container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section class="festSingleTop">
    <div>
      <span class="col">
        <img src="<?php bloginfo('template_url'); ?>/img/mudanzas_title.png" alt="">
        <h2><?php the_field('nombre'); ?><br>
        <?php the_field('fecha'); ?></h2>
      </span>
      <h3><?php the_field('numero'); ?></h3>
      <img src="<?php bloginfo('template_url'); ?>/img/mudanzas_fest.png" alt="">
    </div>
  </section>

  <section class="festSingleContent">
    <?php the_content(''); ?>
  </section>
  
  <section class="festSingleBottom">
    <div class="col">
      <a class="volver" href="<?php echo get_option('home'); ?>/festival/">⟵ Volver a Mudanzas</a>
    </div>

    <div class="col">
      <?php the_field('resena_bio'); ?>
    </div>
  </section>

	<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
