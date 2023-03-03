<?php get_header(); ?>

	<main>

		<section class="js-slider-home slider-home container">
		<?php if( have_rows('destacados', 'option') ): ?>
			<?php while( have_rows('destacados', 'option') ): the_row(); ?>
				<div class="item" style="background-color: <?php the_sub_field('color'); ?>">
					<div class="col">
							<a href="<?php the_sub_field('enlace'); ?>">
								<h2><?php the_sub_field('titulo'); ?></h2>
								<p><?php the_sub_field('bajada'); ?></p>
							</a>
					</div>
					<div class="thumb">
						<a href="<?php the_sub_field('enlace'); ?>">
							<img src="<?php the_sub_field('fondo'); ?>" alt="Cover">
						</a>
					</div>
				</div>
			<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
		<?php endif; // if( get_field('to-do_lists') ): ?>					
		</section>

		<section class="posts-home container">						
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 8
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>

					<?php get_template_part('template-parts/parts/item'); ?>

				<?php endwhile; wp_reset_postdata(); endif; ?>				
		</section>

		<section class="products-home container">						
				<div class="wrapper">
				<?php
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 6
				);
				$query = new WP_Query($args);

				if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
					
					<div class="itemBook">
						<a href="<?php the_permalink(); ?>">
							<div class="thumb">
								<?php the_post_thumbnail('large'); ?>
							</div>
							<div class="data">
								<h2><?php the_title(); ?></h2>
								<h3>
									<?php $termAutor = wp_get_object_terms($post->ID, 'autor'); ?>
									<?php foreach($termAutor as $key=>$value) { $nameAutor = $termAutor[$key]->name; echo $nameAutor . " • "; } ?>
								</h3>
								<p>
									<?php
										$term_list = wp_get_object_terms($post->ID, 'coleccion');
										$termName = $term_list[0]->name;              
										echo $termName;
									?>
								</p>
								<?php if ($price_html = get_post_meta(get_the_ID(), '_regular_price', true)) : ?>
									<span class="price">$<?php echo $price_html; ?></span>
								<?php endif; ?>
							</div>
						</a>
					</div>  					

				<?php endwhile; wp_reset_postdata(); endif; ?>				
				</div>
		</section>

	</main>

<?php get_footer(); ?>
