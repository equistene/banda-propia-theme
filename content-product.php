<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="itemBook">
	<a href="<?php the_permalink(); ?>">
		<div class="thumb">        
			<?php the_post_thumbnail('large'); ?>          
		</div>
		<div class="data">
			<h2 class="titleBook"><?php the_title(); ?></h2>
			<h3>
				<?php $termAutor = wp_get_object_terms( $post->ID, 'autor'); ?>
				<?php foreach($termAutor as $key=>$value) { $nameAutor = $termAutor[$key]->name; echo $nameAutor . " · "; } ?>
			</h3>
			<p>
				<?php
					$term_list = wp_get_object_terms( $post->ID, 'coleccion');
					$termName = $term_list[0]->name;              
					echo $termName;
				?>
			</p>
			<?php if ($price_html = get_post_meta(get_the_ID(), '_regular_price', true)) : ?>
				<span class="price">$<?php echo $price_html; ?></span>
			<?php endif; ?>

			<p>PROBANDO</p>
		</div>
	</a>
</div>
