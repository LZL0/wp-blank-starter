<?php

/**
 * page.php
 *
 **/

?>

<?php get_header(); ?>

<main class="">
  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(''); ?>>

      <h2 class="">
        <?php esc_html( the_title() ); ?>
        <br>
        <?php edit_post_link(__('Edit This','wp-blank-starter'),'','','',''); ?>
      </h2>

      <?php
        $wp_blank_thumbnail = esc_url( get_the_post_thumbnail_url() );
        $wp_blank_thumbnail_id = get_post_thumbnail_id( $post->ID );
        $wp_blank_alt_text = get_post_meta( $wp_blank_thumbnail_id, '_wp_attachment_image_alt', true );;
        if( !empty( $wp_blank_thumbnail ) ) {
            if( !empty( $wp_blank_alt_text )){
              $wp_blank_alt_text = $wp_blank_alt_text;
            } else {
              $wp_blank_alt_text = __( 'featured image', 'wp-blank-starter' );
            }
            echo '<img src="'.esc_url( get_the_post_thumbnail_url() ).'" alt="'.$wp_blank_alt_text.'" width="300" height="150" class="" />';
        }
      ?>

      <?php the_content(); ?>

      <?php wp_link_pages(); ?>

      <?php
        if ( comments_open() || get_comments_number() ) : comments_template();
        endif;
      ?>

    </article>

  <?php endwhile; ?>

  <?php else : ?>

    <h2 class=""><?php _e('Error','wp-blank-starter'); ?></h2>
    <p class=""><?php _e('There\'s nothing here.','wp-blank-starter'); ?></p>

  <?php endif; ?>

</main>

<?php get_footer(); ?>