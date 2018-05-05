<?php

/**
 * comments.php
 *
 **/

?>

<?php

if ( post_password_required() )
  return;
?>

<?php if ( have_comments() ) : ?>

  <section>

    <h2 class=""><?php _e('Comments','wp-blank-starter')?></h2>
  
    <ol class="">
      <?php wp_list_comments('type=comment&callback=wp_blank_format_comment'); ?>
    </ol>

    <?php
      if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>

    <nav>
      <?php previous_comments_link( '&larr; '.__( 'older comments', 'wp-blank-starter' ) ); ?>
      <?php next_comments_link( __( 'newer comments', 'wp-blank-starter' ).' &rarr;' ); ?>
    </nav>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
      <?php
        _e( 'Comments are closed.', 'wp-blank-starter' );
      ?>
    <?php endif; ?>

  </section>

<?php endif; ?>

  <?php
  $args = array('comment_field' => '
  <p>
    <label for="comment" class="screen-reader-text">'.__( 'Your Comments', 'wp-blank-starter' ).'
    </label>
    <textarea id="comment" name="comment" class="" aria-required="true" rows="6" placeholder="'.__( 'Comments', 'wp-blank-starter' ).'">
    </textarea>
  </p>',
  'fields' => apply_filters( 'comment_form_default_fields', array( 'author' => '
    <p>
      <label for="name" class="screen-reader-text">'.__( 'Name', 'wp-blank-starter' ).'
      </label>
      <input id="name" name="name"  class="" type="text" value="'.esc_attr( $commenter['comment_author'] ).'" placeholder="'.__( 'Name', 'wp-blank-starter' ).'" />
    </p>',
  'email' => '
    <p>
      <label for="email" class="screen-reader-text">'.__( 'Email Address', 'wp-blank-starter' ).'
      </label>
      <input id="email" name="email"  class="" type="text" value="'. esc_attr(  $commenter['comment_author_email'] ).'" placeholder="'.__( 'Email Address', 'wp-blank-starter' ).'" />
    </p>',
  'url' => '
    <p>
      <label for="url" class="screen-reader-text">'.__( 'Your Website', 'wp-blank-starter' ).'
      </label>
      <input id="url" name="url" type="text" class="" value="'.esc_attr( $commenter['comment_author_url'] ).'" placeholder="'.__( 'Your Website', 'wp-blank-starter' ).'" />
    </p>')),
  'class_submit' => '');
  comment_form( $args );
?>