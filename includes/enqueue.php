<?php

function wp_plugin_scripts() {
    wp_enqueue_style( 'sortable-plugin-styles',  constant('SPP_SORTABLE_CF7_DIR') . '/public/main.php' );
    wp_enqueue_script( 'sortable-plugin-script', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wp_plugin_scripts' );


function wp_plugin_scripts($hook) {
 
    // create my own version codes
    $wp_sortable_for_cf7_plugin_script_ver  = date("ymd-Gis", filemtime( constant('SPP_SORTABLE_CF7_DIR') . 'public/custom.js' ));
    $wp_sortable_for_cf7_plugin_styles_ver = date("ymd-Gis", filemtime( constant('SPP_SORTABLE_CF7_DIR') . 'style.css' ));
     
    // 
    wp_enqueue_script( 'custom_js', plugins_url( 'js/custom.js', __FILE__ ), array(), $wp_sortable_for_cf7_plugin_script_ver );
    wp_register_style( 'wp_sortable_for_cf7_plugin_styles',    plugins_url( 'style.css',    __FILE__ ), false,   $wp_sortable_for_cf7_plugin_styles_ver );
    wp_enqueue_style ( 'wp_sortable_for_cf7_plugin_styles' );
 
}
add_action('wp_enqueue_scripts', 'wp_plugin_scripts');