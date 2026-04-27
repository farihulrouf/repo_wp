<?php
/**
 * Estatein functions and definitions
 */

// Define constants
define('ESTATEIN_THEME_DIR', get_template_directory());
define('ESTATEIN_THEME_URI', get_template_directory_uri());

/**
 * Modular logic includes
 */
require ESTATEIN_THEME_DIR . '/inc/post-types.php';
require ESTATEIN_THEME_DIR . '/inc/meta-boxes.php';
require ESTATEIN_THEME_DIR . '/inc/enqueue.php';
require ESTATEIN_THEME_DIR . '/inc/setup.php';
require ESTATEIN_THEME_DIR . '/inc/widgets.php';

/**
 * Custom filters and actions
 */
