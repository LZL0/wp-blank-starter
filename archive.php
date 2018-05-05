<?php

/**
 * archive.php
 *
 **/

?>

<?php get_header(); ?>

<main class="">
    
    <?php
        the_archive_title( '<h2 class="">', '</h2>' );
    ?>
    <?php
        the_archive_description( '<p class="">', '</p>' );
    ?>

    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section <?php post_class(''); ?>>
        <h3 class="">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php _e( 'Read', 'wp-blank-starter' ); ?>" class="">
            <?php
                $wp_blank_post_date = date_i18n( get_option( 'date_format' ) , get_the_date( 'U' ) );
                echo $wp_blank_post_date;
            ?>
            </a>
            <br>
            <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php _e( 'Read', 'wp-blank-starter' ); ?>" class="">
            <?php esc_html( the_title() ); ?>
            </a>
            <br>
            <?php edit_post_link(__('Edit This','wp-blank-starter'),'','','',''); ?>
        </h3>

        <?php
            $wp_blank_thumbnail = esc_url( get_the_post_thumbnail_url() );
            $wp_blank_thumbnail_id = get_post_thumbnail_id( $post->ID );
            $wp_blank_alt_text = get_post_meta( $wp_blank_thumbnail_id, '_wp_attachment_image_alt', true );
            if( !empty( $wp_blank_thumbnail ) ) {
                if( !empty( $wp_blank_alt_text )){
                $wp_blank_alt_text = $wp_blank_alt_text;
                } else {
                $wp_blank_alt_text = __( 'featured image', 'wp-blank-starter' );
                }
                echo '<img src="'.esc_url( get_the_post_thumbnail_url() ).'" alt="'.$wp_blank_alt_text.'" width="300" height="150" class="" />';
            }
        ?>

        <?php the_excerpt(); ?>

        </section>

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
