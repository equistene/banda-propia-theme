<?php
  $categories = get_the_category();    
  if ( ! empty( $categories ) ) {
      foreach( $categories as $category ) {
          $categoryName = $category->name;
          $categoryID = $category->term_id;          
      }      
  };
  $color = get_field('color', 'category_'. $categoryID);
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');   
?>
<div class="item <?php echo $color; ?>">  
  <a href="<?php the_permalink(); ?>">
    <div class="data <?php echo $color; ?>">
      <span>
        <h3><?php the_title(); ?></h3>
        <span class="cat"><?php echo $categoryName; ?></span>
      </span>
    </div>
    <div class="thumb">
      <img src="<?php echo $featured_img_url ?>" alt="">
    </div>
  </a>
</div>