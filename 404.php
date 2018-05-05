<?php

/**
 * 404.php
 *
 **/

?>

<?php get_header(); ?>

<section class="">

  <h2 class=""><?php _e('404 error','wp-blank-starter'); ?></h2>
  <p class=""><?php _e('Page not found.','wp-blank-starter'); ?></p>

  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

  <?php endwhile; ?>

  <?php endif; ?>

</section>

<?php get_footer(); ?>
