<?php

/**
 * search-excerpt.php
 *
 **/

?>

<section <?php post_class(''); ?>>
  
  <h3>
    <?php if( get_post_type() !== "page" ): ?>
      <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php _e( 'Read', 'wp-blank-starter' ); ?>" class="">
        <?php
          $wp_blank_post_date = date_i18n( get_option( 'date_format' ) , get_the_date( 'U' ) );
          echo $wp_blank_post_date.'<br>';
        ?>
      </a>
    <?php endif ;?>
    <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php _e( 'Read', 'wp-blank-starter' ); ?>" class="">
      <?php esc_html( the_title() ); ?>
    </a>

    <?php edit_post_link(__('Edit This','wp-blank-starter'),'','','',''); ?>
  </h3>

  <?php the_excerpt(); ?>

</section>
