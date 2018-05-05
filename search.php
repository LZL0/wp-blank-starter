<?php

/**
 * search.php
 *
 **/

?>

<?php get_header(); ?>

<main class="">

  <h2 class=""><?php _e( 'Search Results For', 'wp-blank-starter' ); ?> "<?php echo esc_html( get_search_query() ); ?>"</h2>
  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'search', 'excerpt' ); ?>

  <?php endwhile; ?>
  <?php else : ?>

    <h2 class=""><?php _e('Error','wp-blank-starter'); ?></h2>
    <p class=""><?php _e('There\'s nothing here.','wp-blank-starter'); ?></p>

  <?php endif; ?>
  
  <nav class="">
    <?php previous_posts_link( '&larr;' ); ?>
    <?php next_posts_link( '&rarr;' ); ?>
  </nav>

</main>

<?php get_footer(); ?>