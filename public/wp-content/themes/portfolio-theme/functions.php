<?php

function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

/**
 * Theme Requirements
 */
require get_template_directory() . '/lib/required.php';


/**
 * Theme Initialiation
 */
require get_template_directory() . '/lib/setup.php';


/**
 * Require Custom Post Types
 */
require get_template_directory() . '/lib/custom-post-type.php';

/**
 * ACF Setup
 */
// require get_template_directory() . '/lib/acf.php';
