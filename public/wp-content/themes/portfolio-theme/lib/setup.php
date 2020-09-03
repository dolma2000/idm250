<?php

function includes_css_files() {

    //Adding CSS stylesheet: https://developer.wordpress.org/reference/functions/wp_enqueue_style/ 
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap'); //LOAD FONT FIRST
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans+Condensed:wght@300;400;500;600;700&display=swap');

    
    
    wp_enqueue_style('idm250-hamburgercss', '/wp-content/themes/portfolio-theme/dist/css/hamburger-style.css');
    wp_enqueue_style('idm250-hamburger-master-css', '/wp-content/themes/portfolio-theme/hamburgers-master/dist/hamburgers.css');
    wp_enqueue_style('idm250-css', '/wp-content/themes/portfolio-theme/dist/css/styles.css');
    wp_enqueue_style('idm250-post-css', '/wp-content/themes/portfolio-theme/dist/css/post-styles.css');
    wp_enqueue_style('idm250-archive', '/wp-content/themes/portfolio-theme/dist/css/archive.css');
    wp_enqueue_style('idm250-w3-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('idm250-font-stylesheet', '/wp-content/themes/portfolio-theme/dist/css/font-stylesheet.css');
    wp_enqueue_style('idm250-fineart', '/wp-content/themes/portfolio-theme/dist/css/fineart.css');
    wp_enqueue_style('carousel-css', '/wp-content/themes/portfolio-theme/dist/css/glide.core.css');
    wp_enqueue_style('idm250-graphicdesign', '/wp-content/themes/portfolio-theme/dist/css/graphicdesign.css');
    wp_enqueue_style('idm250-uiux', '/wp-content/themes/portfolio-theme/dist/css/uiux.css');
    wp_enqueue_style('idm250-resume', '/wp-content/themes/portfolio-theme/dist/css/resume.css');




    // wp_enqueue_style('idm250-normalize-css', '/wp-content/themes/portfolio-theme/dist/css/normalize.css');



}
add_action('wp_enqueue_scripts', 'includes_css_files');

//link rel="stylesheet" href="<?php echo get_template_directory_uri(); ? > /dist/css/styles.css"> <!-- php replaces wp-content/themes/portfolio-theme/ -->


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
