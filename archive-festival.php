<?php get_header(); ?>

	<main role="main" class="content container">
		<!-- section -->
		<section class="container">

      <?php get_template_part('loop-festival'); ?>

      <?php get_template_part('pagination'); ?>

      <section class="festivalIntro">
        <div class="col">
          <img src="<?php the_field('festival_imagen', 'option'); ?>" alt="Festival">
        </div>
        <div class="col">
        <?php the_field('festival_resumen', 'option'); ?>
        </div>
      </section>


		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>