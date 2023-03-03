<div class="itemsListArchive">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/parts/item'); ?>
	<?php endwhile; endif; ?>
</div>