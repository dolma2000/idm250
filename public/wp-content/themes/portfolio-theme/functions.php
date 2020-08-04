<?php

// //Check Server PHP Version
// if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
//     die ('WP theme only works in Wordpress 5.4.2 or later');
// }
// //Check WP Version
// if (version_compare('7.4', phpversion(), '>')) {
//     die ('You must be using PHP Version 7.4 or greater.');
// }

function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');



function includes_css_files() {
    //Adding CSS stylesheet: https://developer.wordpress.org/reference/functions/wp_enqueue_style/ 
    //wp_enqueue_style('google-font', 'www.gogolefontlink.com'); <<LOAD FONT FIRST>>
    wp_enqueue_style('idm250-css', '/wp-content/themes/portfolio-theme/dist/css/styles.css');
}
add_action('wp_enqueue_scripts', 'includes_css_files');

function includes_js_files() {
    //Adding JS Files: https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script('idm250-js', '/wp-content/themes/portfolio-theme/dist/scripts/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'includes_js_files');

//Use widget for similar post like this under the single.php page?
/**
 * Register custom sidebar for my theme
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 */
function register_theme_sidebar() {
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'This is a custom sidebar for my theme'
    ]);

    register_sidebar([
        'name' => 'Footer Column 1',
        'id' => 'footer-column-1',
        'description' => 'This is a custom footer for my theme'
    ]);
}

add_action('widgets_init', 'register_theme_sidebar');

/**
 * Register the Menus on my site
 * 
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @return void
 */

function register_theme_navigation() {
    register_nav_menus([
        'mobile_menu' => 'Mobile Menu',
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
        'social_menu' => 'Social Menu',
    ]) ;
}
add_action('after_setup_theme', 'register_theme_navigation');



//If Else statement in ONE line of code : https://www.php.net/manual/en/control-structures.alternative-syntax.php