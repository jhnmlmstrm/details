<?php

  get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-10 ml-auto mr-auto">
      <?php 
          /* ladda query för galleri */
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); ?>

        <?php if ( $wpb_all_query->have_posts() ) : ?>

        <div class="row">
        <!-- loop -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <!-- hämta bilder -->
        <div class="col-md-4">
          <div class="pet-image">
            <a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('page-featured-gallery-image'); ?></a>
            <div class="pet-image-name"> <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
          </div>
        </div> <!-- col-md-4 -->

        <?php endwhile; ?>
        <!-- /loop -->
      </div> <!-- row -->
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e( 'Inget matchade sökningen..' ); ?></p>
      <?php endif; ?>
    </div> <!-- col-md-10 -->
  </div> <!-- row -->
</div> <!-- container -->
<?php
    
  get_footer();

?>