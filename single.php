<?php get_header(); ?>	

	<main class="single container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section class="topPost">
			<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail('large'); ?>		
			<?php endif ?>
		</section>		

		<section class="titlePost">
			<span></span>
			<h1><?php the_title(); ?></h1>
		</section>

		<section class="contentPost">
			<aside>
				<span class="cat">
					<?php the_category(',', '', ''); ?>
				</span>

				<p>por <?php the_author(''); ?></p>
				<p><?php the_time('d F Y'); ?></p>
			</aside>

			<article>				
				<?php the_content(''); ?>
			</article>
		</section>

		<?php get_template_part('template-parts/single/related'); ?>

	<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
