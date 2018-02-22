<?php
function my_theme_enqueue_styles() {

    $parent_style = 'wallstreet-style'; // This is 'wallstreet-style' for the Wallstreet theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('wallstreet-default', get_stylesheet_directory_uri().'/css/default.css');
	wp_enqueue_style('wallstreet-theme-menu', get_stylesheet_directory_uri() . '/css/theme-menu.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>