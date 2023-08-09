<?php
require get_stylesheet_directory(). '/shortcodes/shortcode.php';

function prefix_add_footer_styles() {
  wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri().'/assets/css/custom.css' );
};

add_action( 'get_footer', 'prefix_add_footer_styles' );

wp_enqueue_script('custom-js', get_stylesheet_directory_uri().'/assets/js/custom.js', array(), false, true);