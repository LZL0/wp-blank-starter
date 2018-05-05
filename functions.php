<?php

/**
 * functions.php
 *
 **/

require_once('functions-wp-blank-format-comments.php');

if ( ! function_exists( 'wp_blank_wp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function wp_blank_wp_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'wp-blank-starter' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

  	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu()
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wp-blank-starter' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
   	 *
	 */
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
	) );

	/**
	 *  Enables the Custom Header Image
	 */
	add_theme_support( 'custom-header', array(
        'default-image'      => get_template_directory_uri().'assets/placeholder-header-image.png',
		'default-text-color' => '000',
		'default-color'		 => 'fff',
        'width'              => 1200,
        'height'             => 800,
        'flex-width'         => true,
        'flex-height'        => true
    ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // wp_blank_wp_setup
add_action( 'after_setup_theme', 'wp_blank_wp_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 */
function wp_blank_wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_blank_wp_content_width', 1600 );
}
add_action( 'after_setup_theme', 'wp_blank_wp_content_width', 0 );

/**
 * Enqueues scripts and styles.
 *
 */
function wp_blank_wp_comments() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_blank_wp_comments' );

function wp_blank_wp_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'wp-blank-starter' ),
		'id'            => 'wp-blank-sidebar-1',
		'description'   => __( 'Appears at the bottom of all pages.', 'wp-blank-starter' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wp_blank_wp_widgets_init' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wp_blank_wp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="'.get_bloginfo( 'pingback_url' ).'">';
	}
}
add_action( 'wp_head', 'wp_blank_wp_pingback_header' );

/**
 * Enqueue scripts and styles.
 *
 */
function wp_blank_wp_scripts() {

	// Custom Palette Stylesheet
	wp_enqueue_style( 'wp_blank-palette-css', get_theme_file_uri( '/css/custom.css' ) );

	// Theme Stylesheet
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );


}
add_action( 'wp_enqueue_scripts', 'wp_blank_wp_scripts' );

