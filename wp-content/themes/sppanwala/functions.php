<?php
/**
 * sppanwala personal theme functions and definitions
 *
 * @link https://github.com/sppanwala/personal.git
 *
 * @package WordPress
 * @subpackage sppanwala
 * @since sppanwala1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

/*Stylesheet call in the function*/
function sppanwala_styles() {
    wp_register_style('common', get_template_directory_uri() . '/assets/css/all.css', array(), 1, 'all' );
    wp_enqueue_style('common');

    wp_register_style('font-icons', get_template_directory_uri() . '/assets/css/elegant-font-icons.css', array(), 1, 'all' );
    wp_enqueue_style('font-icons');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('animatedheadline', get_template_directory_uri() . '/assets/css/jquery.animatedheadline.css', array(), 1, 'all' );
    wp_enqueue_style('animatedheadline');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 1, 'all' );
    wp_enqueue_style('magnific-popup');

    wp_register_style('carousel', get_template_directory_uri() . '/assets/css/carousel.css', array(), 1, 'all' );
    wp_enqueue_style('carousel');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all' );
    wp_enqueue_style('main');
}
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap', false );
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap', false );
}
	
 add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

?>