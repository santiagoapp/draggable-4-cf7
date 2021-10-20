<?php

function form_creation($atts = [], $content = null, $tag = '') {

    $atts = array_change_key_case( (array) $atts, CASE_LOWER );

    $wporg_atts = shortcode_atts(
        array(
            'title' => 'WordPress.org',
        ), $atts, $tag
    );
    if ( ! is_null( $content ) ) {
        $text = '<div class="container">';
        $text = $text . $content;
        $text = $text . '</div>';
    }
    return $text;
}

add_shortcode('test', 'form_creation');