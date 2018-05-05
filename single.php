<?php

/**
 * single.php
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
      <p class="">
        Posted on 
          <?php
            $wp_blank_post_date = date_i18n( get_option( 'date_format' ) , get_the_date( 'U' ) );
            echo $wp_blank_post_date;
          ?>
         by
        <?php
          the_author();
        ?>
      </p>

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

      <?php
        $wp_blank_tags = get_the_tags();
        $wp_blank_tag_count = 0;
        if( !empty( $wp_blank_tags ) ) {
          
      ?>
          <h3 class="">
            <?php _e( 'Tagged', 'wp-blank-starter' ); ?>
          </h3>
          
          <p class="">

        <?php
          foreach( $wp_blank_tags as $tag ) {
        ?>      
            
          <?php
            echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" '.__('title','wp-blank-starter').'="'.esc_html( $tag->name ).' '.__(' archive','wp-blank-starter').'" class="">&nbsp;' . esc_html( $tag->name ) . '&nbsp;</a>&nbsp;&nbsp;';

            $wp_blank_tag_count++;

          }

          echo '</p>';
        }
      ?>

    </div>

    </article>

  <?php endwhile; ?>

  <?php else : ?>

    <h2 class=""><?php _e('Error','wp-blank-starter'); ?></h2>
    <p class=""><?php _e('There\'s nothing here.','wp-blank-starter'); ?></p>

  <?php endif; ?>

</main>

<?php get_footer(); ?>