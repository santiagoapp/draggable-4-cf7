<?php

function wp_plugin_scripts() {
    wp_enqueue_style( 'sortable-plugin-styles', get_stylesheet_uri() );
    wp_enqueue_script( 'sortable-plugin-script', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wp_plugin_scripts' );