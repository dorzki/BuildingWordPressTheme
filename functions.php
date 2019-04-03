<?php
/**
 * FUNCTIONS
 */

// Theme setup and capabilities
function solid_theme_setup() {

	# Add i18n support to the theme
	load_theme_textdomain( 'solid-state', get_template_directory() . '/languages/' );

	# Let WordPress handle <title> tag
	add_theme_support( 'title-tag' );

	# Enable theme support for dynamic menus
	add_theme_support( 'menus' );
	register_nav_menu( 'main-menu', __( 'Main Menu', 'solid-state' ) );

	# Enable post thumbnail
	add_theme_support( 'post-thumbnails' );

}

add_action( 'after_setup_theme', 'solid_theme_setup' );


// Link the CSS & JavaScript files to the template
function solid_register_theme_assets() {

	# CSS
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:200,700|Source+Sans+Pro:300,600,300italic,600italic', false, false );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '4.4.0' );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'google-fonts', 'font-awesome' ), '1.0.0' );

	# JavaScript
	wp_enqueue_script( 'scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array( 'jquery' ), '0.2.1', true );
	wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', false, '3.0.0', true );
	wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/main.js', array(
		'scrollex',
		'skel',
		'util'
	), '1.0.0', true );

	if ( is_singular( 'post' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'solid_register_theme_assets' );