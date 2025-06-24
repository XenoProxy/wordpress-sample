<?php

if ( ! function_exists( 'my_custom_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function my_custom_theme_setup() {

        /*
         * Enable support for Post Thumbnails on posts and pages.
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document's <head>, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Add support for custom logo.
        add_theme_support( 'custom-logo' );

        // Register navigation menus.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'my-custom-theme' ),
            'footer'  => esc_html__( 'Footer Menu', 'my-custom-theme' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'my_custom_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function my_custom_theme_scripts() {
    wp_enqueue_style( 'my-custom-theme-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script( 'my-custom-theme-block', get_template_directory_uri() . '/blocks/hello-world.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts' );


/**
 * Custom function example: Add a custom widget area.
 */
function my_custom_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'my-custom-theme' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets here to appear in your main sidebar.', 'my-custom-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_custom_theme_widgets_init' );