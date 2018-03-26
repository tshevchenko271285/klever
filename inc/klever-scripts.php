<?php
/**
* Enqueue scripts
*/
function klever_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'klever-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'klever-skel', get_template_directory_uri() . '/js/skel.min.js', array(), '20151215', true );
    wp_enqueue_script( 'klever-util', get_template_directory_uri() . '/js/util.js', array(), '20151215', true );
    wp_enqueue_script( 'klever-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'klever_scripts' );
