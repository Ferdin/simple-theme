<?php
function simple_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'simple-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'simple_theme_setup' );

// Enqueue scripts and styles
function simple_theme_scripts() {
    wp_enqueue_style( 'simple-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'simple_theme_scripts' );
