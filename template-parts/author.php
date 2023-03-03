<?php
  $termAutor = get_the_terms( $post->ID, 'autor' );  
?>

<?php foreach($termAutor as $key=>$value) { ?>
<?php
  $nameAutor = $termAutor[$key]->name;  
  $authorSlug = $termAutor[$key]->slug;
  $authorDesc = $termAutor[$key]->description;
  $authorID = $termAutor[$key]->term_id;
  $authorImg = get_field('imagen', 'term_'. $authorID);  
?>
<div class="itemAuthor">  
  <div class="thumb">
    <a href="<?php echo get_option('home'); ?>/autor/<?php echo $authorSlug; ?>/">
      <img src="<?php echo $authorImg; ?>" alt="">
    </a>    
  </div>
  <div class="data">
    <h3><?php echo $nameAutor; ?></h3>
    <p><?php echo $authorDesc; ?> </p>
    <a href="<?php echo get_option('home'); ?>/autor/<?php echo $authorSlug; ?>/">Ver perfil completo</a>
  </div>
</div>
<?php }; ?>