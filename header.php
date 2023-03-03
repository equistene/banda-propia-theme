<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">

		<?php wp_head(); ?>		

	</head>
	<body <?php body_class(); ?>>

	<?php get_template_part('searchform'); ?>

	<header>
		<div class="container">
			<a href="<?php echo get_option('home'); ?>" class="logo" title="Banda Propia">
				<img src="<?php bloginfo('template_url'); ?>/img/logo.svg" loading="lazy" alt="Banda Propia Editoras">
			</a>

			<section class="right">
				<nav>
					<?php wp_nav_menu(array('menu' => 'Menu Principal')); ?>
				</nav>

				<button id="search" class="searchButton onlyDesktop">
					<img src="<?php bloginfo('template_url'); ?>/img/search-solid.svg" alt="Search">
				</button>					

				<?php if ( WC()->cart->get_cart_contents_count() > 0 ): ?>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">					
						<?php echo sprintf ( _n( '%d producto', '%d productos', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?>
					</a>
				<?php endif; ?>											

				<button id="search" class="searchButton onlyMobile">
					<img src="<?php bloginfo('template_url'); ?>/img/search-solid.svg" alt="Search">
				</button>					

				<button id="menuButton" class="menuButtonMobile">
					<img src="<?php bloginfo('template_url'); ?>/img/bars-solid.svg" alt="Menu">
				</button>

			</section>
		</div>

		<div class="navmobile">			
			<nav>
				<?php wp_nav_menu(array('menu' => 'Menu Principal')); ?>
			</nav>			
		</div>
	</header>