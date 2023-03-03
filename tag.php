<?php get_header(); ?>

	<?php get_template_part('template-parts/ads/topbanner'); ?>

	<main role="main" class="archive container">
		<!-- section -->
		<section class="content">

			<article>

				<h1 class="titleCat"><?php single_cat_title(); ?></h1>
				
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</article>

			<?php get_sidebar(); ?>

		</section>
		<!-- /section -->		
	</main>

<?php get_footer(); ?>
