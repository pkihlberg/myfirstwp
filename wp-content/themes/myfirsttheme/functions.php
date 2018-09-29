<?php
//  Hide Admin bar
add_filter('show_admin_bar', '__return_false');

// Register Scripts
function enqueue_scripts() {
    wp_enqueue_script( 'myfirstwp-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'dist/bundle.js' ), array( 'jquery' ), '1.0', true );

    // Stylesheets
    wp_enqueue_style( 'myfirstwp-css', get_stylesheet_directory_uri() . '/dist/main.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts', 1 );

?>