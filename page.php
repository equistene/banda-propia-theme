<?php get_header(); ?>

	<main class="page">				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail()): ?>
		<section class="topPage">
			<?php the_post_thumbnail('large'); ?>									
		</section>
		<?php endif ?>			

		<section class="contentPage container">
			<?php the_content(''); ?>
		</section>

		<?php endwhile; endif; ?>		
	</main>

<?php get_footer(); ?>