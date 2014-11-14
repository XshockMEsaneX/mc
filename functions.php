<?php

//Register scripts
function mc_scripts() {
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', false );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', 'foundation' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'mc_scripts' ); 

//Thumbnail Support
add_theme_support( 'post-thumbnails' ); 

//Register Sidebar
function mc_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'tmd' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="panel">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
}
add_action( 'widgets_init', 'mc_widgets_init' );

//Register Navigation
function mc_main_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'mc_main_menu' );

?>