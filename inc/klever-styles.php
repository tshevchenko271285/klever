<?php
/**
* Enqueue scripts and styles.
*/
function klever_styles() {
    wp_enqueue_style( 'klever-style', get_stylesheet_uri() );
    wp_enqueue_style( 'klever-main', get_template_directory_uri() . '/layouts/main.css');
}
add_action( 'wp_enqueue_scripts', 'klever_styles' );