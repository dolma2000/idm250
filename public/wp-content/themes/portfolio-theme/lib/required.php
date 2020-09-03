<?php

// Check Server PHP Version
// if (version_compare('7.4', phpversion(), '>')) {
//    die ('You must be using PHP Version 7.4 or greater.');
// }

//Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
   die ('WP theme only works in Wordpress 5.4.2 or later. Please upgrade your WP site.');
}
?>