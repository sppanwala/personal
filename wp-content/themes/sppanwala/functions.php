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

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('animatedheadline', get_template_directory_uri() . '/assets/css/jquery.animatedheadline.css', array(), 1, 'all' );
    wp_enqueue_style('animatedheadline');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 1, 'all' );
    wp_enqueue_style('magnific-popup');

    wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), 1, 'all' );
    wp_enqueue_style('carousel');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all' );
    wp_enqueue_style('main');
}
add_action( 'wp_enqueue_scripts', 'sppanwala_styles' );





/*jQuery will call in the function*/
function sppanwala_js() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1, 1, 1 );
    wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1, 1, 1 );
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, 1, 1 );
    wp_enqueue_script('bootstrap');

    wp_register_script('animatedheadline', get_template_directory_uri() . '/assets/js/jquery.animatedheadline.min.js', array(), 1, 1, 1 );
    wp_enqueue_script('animatedheadline');

    wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), 1, 1, 1 );
    wp_enqueue_script('magnific-popup');

    wp_register_script('ajax-contact', get_template_directory_uri() . '/assets/js/ajax-contact.js', array(), 1, 1, 1 );
    wp_enqueue_script('ajax-contact');

    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, 1, 1 );
    wp_enqueue_script('carousel');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1 );
    wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'sppanwala_js' );



?>
