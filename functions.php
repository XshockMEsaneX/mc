<?php

function mc_scripts() {
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', false );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'mc_scripts' ); 

?>