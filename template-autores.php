<?php
  /* Template Name: Autores */ 
  get_header();
?>

	<main class="page">				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="topAuthors">
      <h1>Autores</h1>
    </section>

    <section class="listAuthors container">      

      <div class="authorsItems">
      <?php
        $autores = get_terms( array(
          'taxonomy' => 'autor',
          'hide_empty' => false,
          'orderby' => 'title',
          'order' => 'ASC' 
        ));                     
        foreach ($autores as $autor) {
          $authorName = $autor->name;
          $authorDesc = $autor->description;   
          $authorSlug = $autor->slug;          
          $authorID = $autor->term_id;
          $authorImg = get_field('imagen', 'term_'. $authorID);
          include(locate_template('template-parts/single/authorBlock.php'));          
        };
      ?>
      </div>      
    </section>
    
		<?php endwhile ?>
    <?php endif; ?>		
	</main>

<?php get_footer(); ?>