<?php
/**
 * functions-wp-blank-format-comments.php
 *
 */

function wp_blank_format_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>

  <li id="comment-<?php comment_ID() ?>" <?php comment_class(''); ?>>

    <h4>
      <a href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>" class="">
        <?php echo esc_html( get_comment_date() ); ?> <?php _e('at','wp-blank-starter'); ?> <?php echo esc_html( get_comment_time()); ?>
      </a>
      <br><?php _e('by','wp-blank-starter'); ?> <?php echo get_comment_author(); ?>
    </h4>
      
    <?php if ($comment->comment_approved == '0') : ?>
        <p class=""><php _e('Your comment is awaiting moderation.') ?></p>
    <?php endif; ?>

    <?php comment_text(); ?>

    <p>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </p>

  </li>
  
<?php
  }
?>
