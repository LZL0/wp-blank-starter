<?php

/**
 * searchform.php
 *
 **/

?>

<h2 class="screen-reader-text"><?php _e( 'Search', 'wp-blank-starter' ); ?>:</h2>

<form role="search" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="screen-reader-text" for="s">Search</label>
  <input id="s" type="search" class="" placeholder="<?php _e( 'Search', 'wp-blank-starter' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
  <input type="submit" class="" value="<?php _e( 'Go', 'wp-blank-starter' ); ?>" />
</form>
