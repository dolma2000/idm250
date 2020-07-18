<?php

function includes_css_files() {
    //Adding CSS stylesheet: https://developer.wordpress.org/reference/functions/wp_enqueue_style/ 
    //wp_enqueue_style('google-font', 'www.gogolefontlink.com'); <<LOAD FONT FIRST>>
    wp_enqueue_style('idm250-css', '/wp-content/themes/portfolio-theme/dist/css/style.css');
}

add_action('wp_enqueue_scripts', 'includes_css_files');

function includes_js_files() {
    //Adding JS Files: https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script('idm250-js', '/wp-content/themes/portfolio-theme/dist/scripts/main.js');
}

add_action('wp_enqueue_scripts', 'includes_js_files');