<?php

function wp_plugin_scripts($hook) {
    
    // create my own version codes
    $wp_sortable_for_cf7_plugin_script_ver  = date("ymd-Gis", filemtime( constant('SPP_SORTABLE_CF7_DIR') . '/public/js/custom.js' ));
    $wp_sortable_for_cf7_plugin_styles_ver = date("ymd-Gis", filemtime( constant('SPP_SORTABLE_CF7_DIR') . '/public/css/style.css' ));
     
    // 
    wp_enqueue_script( 'wp_sortable_for_cf7_plugin_script', constant('SPP_SORTABLE_CF7_URL') . '/public/js/custom.js', array(), $wp_sortable_for_cf7_plugin_script_ver, true );
    wp_register_style( 'wp_sortable_for_cf7_plugin_styles', constant('SPP_SORTABLE_CF7_URL') . '/public/css/style.css', false,   $wp_sortable_for_cf7_plugin_styles_ver );
    wp_enqueue_style ( 'wp_sortable_for_cf7_plugin_styles' );
 
}
add_action('wp_enqueue_scripts', 'wp_plugin_scripts');