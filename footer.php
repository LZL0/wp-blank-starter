<?php

/**
 * footer.php
 *
 **/

?>

  <h2><?php _e('Menu','wp-blank-starter'); ?></h2>
  
  <?php
    wp_nav_menu([
      'menu'            => 'primary',
      'theme_location'  => 'primary',
      'container'       => 'div'
    ]);
  ?>

  <?php if ( is_active_sidebar( 'wp-blank-sidebar-1' ) ) : ?>
    <div class="" role="complementary">
      <?php dynamic_sidebar( 'wp-blank-sidebar-1' ); ?>
    </div>
  <?php endif; ?>

  <?php wp_footer(); ?>

</body>
</html>
