<?php get_header(); ?>

	<main class="page container">				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php			
			$termAutor = get_the_terms( $post->ID, 'autor' );
			$termName = $termAutor[0]->name;
			$colectionTerm = get_the_terms($post->ID, 'coleccion');
			$colectionName = $colectionTerm[0]->name;
			
			global $product;
			$idProd = $product->get_id();					
		?>

		<section class="bookCard">
			<div class="left">
				<div class="thumb">        										
					<img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
				</div>

				<div class="priceBook">							
					<?php do_action( 'woocommerce_single_product_summary' ); ?>
				</div>			

				<div class="codeBook">
					<p>
						<?php if(get_field('isbn_fisico')): ?>
							ISBN: <?php the_field('isbn_fisico'); ?><br>
						<?php endif ?>

						<?php if(get_field('isbn_ebook')): ?>
							ISBN eBook: <?php the_field('isbn_ebook'); ?><br>
						<?php endif ?>
						
						<?php if(get_field('medidas')): ?>
							<?php the_field('medidas'); ?><br>
						<?php endif ?>
						
						<?php if(get_field('paginas')): ?>
							<?php the_field('paginas'); ?><br>
						<?php endif ?>						
						
						<?php 
						global $post;
						$terms = wp_get_post_terms($post->ID, 'product_tag');
						if ($terms) {
								$output = array();
								foreach ($terms as $term) {
										$output[] = $term->name ;
								}
								echo join( ', ', $output );
						};
						?>
						</p>
				</div>
			</div>
			<div class="right">
				<h1><?php the_title(); ?></h1>
				<h3>
					<?php echo $termName;?>					
					<?php if(get_field('traducción')): ?>
						<br><?php the_field('traducción'); ?>
					<?php endif ?>
				</h3>
				<h4>
					<?php if(get_field('year')): ?>
						<?php the_field('year'); ?> — 
					<?php endif ?>
					<?php echo $colectionName; ?>
				</h4>

				<div class="descriptionProduct">
					
					<p><?php echo $post->post_content; ?></p>
				</div>

				<?php get_template_part('template-parts/author'); ?>
			</div>
		</section>


    <?php get_template_part('template-parts/book/quotes'); ?>    

		<?php endwhile; endif; ?>		

		<?php get_template_part('template-parts/single/related'); ?>
	</main>

<?php get_footer(); ?>