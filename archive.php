<?php get_header(); ?>

	<main role="main" class="content container">
		<!-- section -->
		<section class="container">

			<nav class="menuArchive">
				<?php wp_nav_menu(array('menu' => 'Categorias')); ?>
			</nav>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
