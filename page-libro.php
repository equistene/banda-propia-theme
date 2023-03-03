<?php get_header(); ?>

	<main class="page container">				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section class="bookCard">
			<div class="left">
				<div class="thumb">
					<img src="<?php bloginfo('template_url'); ?>/img/bookCover.jpg" alt="">
				</div>

				<a href="#" class="buy">Comprar</a>

				<div class="codeBook">
					<p>ISBN: 978-956-09362-1-9<br>
						ISBN eBook: 978-956-09362-8-8<br>
						14 × 21,5 cm<br>
						202 páginas<br>
						Crónica
						</p>
				</div>
			</div>
			<div class="right">
				<h1>Crear en peligro: El trabajo del artista migrante</h1>
				<h3>Edwige Danticat<br>Traducción de Lucía Stecher y Thomas Rothe</h3>
				<h4>2020 — Colección</h4>

				<p>A mediados de los años sesenta, dos jóvenes haitianos fueron fusilados a las afueras del cementerio nacional de Puerto Príncipe frente a una multitud convocada por la dictadura de François «Papa Doc» Duvalier. La escritora haitiano-estadounidense Edwidge Danticat no recuerda cuándo escuchó por primera vez sobre esta ejecución convertida en espectáculo, pero sí que siempre la ha perseguido y obsesionado.</p>

				<p>Crear en peligro enlaza esta y otras historias que transcurren entre su país natal y Estados Unidos, su país adoptivo. Es un conjunto de ensayos literarios que exploran las vidas de artistas migrantes en momentos de crisis y diáspora, artistas que crean en peligro para gente que lee en peligro. Edwidge Danticat ha desarrollado una prosa nutrida de voces orales y cosmopolitas, de tradiciones narradas en inglés, creol y francés. Su originalidad la ha consolidado como una de las escritoras internacionales más celebradas y premiadas de su generación.</p>

				<?php get_template_part('template-parts/author'); ?>
			</div>
		</section>


    <?php get_template_part('template-parts/book/quotes'); ?>

    <?php get_template_part('template-parts/single/related'); ?>

		<?php endwhile; endif; ?>		
	</main>

<?php get_footer(); ?>