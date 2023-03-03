<?php
	$facebook = get_field('facebook', 'option');
	$twitter = get_field('twitter', 'option');
	$instagram = get_field('twitter', 'option');
	$goodreads = get_field('goodreads', 'option');
	$mail = get_field('contacto_mail', 'option');
?>

		<footer>
			<div class="container">
				<section class="left">
					<nav>
						<?php wp_nav_menu(array('menu' => 'Menu Principal')); ?>
						<p>contacto: <a class="mailto" target="_blank" href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a> 

						<?php if($instagram): ?>
							<a target="_blank" href="<?php echo $instagram; ?>">Instagram</a> -
						<?php endif; ?>

						<?php if($twitter): ?>
							<a target="_blank" href="<?php echo $twitter; ?>">Twitter</a> -
						<?php endif; ?>

						<?php if($facebook): ?>
							<a target="_blank" href="<?php echo $facebook; ?>">Facebook</a> -
						<?php endif; ?>

						<?php if($goodreads): ?>
							<a target="_blank" href="<?php echo $goodreads; ?>">Goodreads</a>
						<?php endif; ?>
					</p>
					</nav>
				</section>

				<section>
					<img class="gob" src="<?php bloginfo('template_url'); ?>/img/gob.png" alt="GOB">
				</section>
			</div>		
		</footer>

		<?php wp_footer(); ?>

		<!-- analytics
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->

		<script src="<?php bloginfo('template_url'); ?>/js/lib/slick.min.js"></script>

	</body>
</html>
