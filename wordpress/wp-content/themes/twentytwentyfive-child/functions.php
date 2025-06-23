<?php
/**
 * Twenty Twenty-Five Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty_Twenty_Five_Child
 */

/**
 * Enqueue parent theme styles and child theme styles.
 */
function twentytwentyfive_child_theme_enqueue_styles() {
    $parent_style = 'twentytwentyfive-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version') 
    );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_child_theme_enqueue_styles' );

/**
 * Custom function to demonstrate child theme functionality.
 *
 * This function can be modified or extended as needed.
 */
function twentytwentyfive_child_custom_function_example() {
    echo 'Your custom function is working!';
}
add_action( 'wp_footer', 'twentytwentyfive_child_custom_function_example' );

