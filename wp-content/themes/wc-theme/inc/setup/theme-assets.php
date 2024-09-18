<?php

if (!defined('ABSPATH')) {
    die();
}

/**
 * Load core css and js
 */

add_action('wp_enqueue_scripts', 'wc_enqueue_styles', 20);

function wc_enqueue_styles(): void
{

    $css_files = array('theme');

    foreach ($css_files as $file) {
        $filename = 'theme' . ('theme' == $file ? '' : '-' . $file);

        wp_register_style('wc-' . $filename, WC_CSS . '/theme/' . ('theme' == $file ? '' : 'pages/') . $file . '.min.css', array(), '1.0.0');
    }

    wp_enqueue_style( 'wc-theme' );
}
