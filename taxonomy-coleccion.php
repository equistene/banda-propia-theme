<?php
  /* Template Name: Catalogo */ 
  get_header();

  $taxonomy = get_queried_object();
  $taxName = $taxonomy->name;
  $taxDesc = $taxonomy->description;
  $taxID = $taxonomy->term_taxonomy_id;
  $image = get_field('imagen', 'term_'. $taxID);  
  // print_r($taxonomy);  
?>

	<main class="page">						
    <section class="topCatalogo" style="background: url(<?php echo $image; ?>) no-repeat center center;background-size: cover; ">
      <div class="container">
        <h1><?php echo $taxName; ?></h1>
        <div>
          <p><?php echo $taxDesc; ?></p>
        </div>
      </div>
    </section>

		<section class="contentPage container">			
      <?php get_template_part('loop-books'); ?>      
		</section>		
	</main>

<?php get_footer(); ?>