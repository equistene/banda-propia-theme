<section class="homeBandas">
  <div class="container">
    <h2 class="titleSection">Conoce a la banda</h2>    
  </div>


  <section class="itemsList">
    <div class="container">
      <?php
      $max = 3; //number of categories to display
      $taxonomy = 'artistas';
      $terms = get_terms('taxonomy='.$taxonomy.'&orderby=name&order=ASC&hide_empty=0');
      // Random order
      shuffle($terms);
      // Get first $max items
      $terms = array_slice($terms, 0, $max);
      // Sort by name
      usort($terms, function($a, $b){
        return strcasecmp($a->name, $b->name);
      });

      // Echo random terms sorted alphabetically
      if ($terms) {
        foreach($terms as $term) {
          $id = $term->term_id;
          $ciudad = get_field('ciudad', 'term_' . $id . '');
          $imagen = get_field('imagen_principal', 'term_' . $id . '');
          echo '<div class="item">
          <a href="' . get_term_link( $term, $taxonomy ) . ' ">
            <div class="thumb">              
              <img src="' . $imagen . '" />
            </div>
            <div class="data">
              <h3>' . $term->name .  '</h3>
              <p>'. $ciudad .'</p>
            </div>
          </a>
        </div>';
        }
      }
      ?>
    </div>
  </section>
  <div class="row buttonRight container">
    <a href="#">
      Artists Directory
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</section>