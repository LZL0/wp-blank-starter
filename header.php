<?php

/**
 * header.php
 *
 **/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>

  <?php if( has_site_icon() ) { ?>
     <img src="<?php echo get_site_icon_url('50'); ?>" alt="<?php echo esc_html( get_bloginfo('name') ); ?> <?php _e('icon', 'wp-blank-starter');?>" height="50" width="50" class="" />
  <?php } ?>
  <h1 class=""><a href="<?php echo get_home_url(); ?>" class="" ><?php echo esc_html( get_bloginfo('name') ); ?></a></h1>
  <p class=""><?php echo esc_html( get_bloginfo('description') ); ?></p>
  <?php if( has_header_image() ) { ?>
     <img src="<?php echo get_header_image(); ?>" alt="<?php echo esc_html( get_bloginfo('name') ); ?> <?php _e('header image', 'wp-blank-starter');?>" height="200" width="300" class="" />
  <?php } ?>
  