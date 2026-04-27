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

/**
 * Basic Theme Setup
 */
if (!function_exists('estatein_setup')) :
    function estatein_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        add_theme_support('custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);

        register_nav_menus([
            'menu-1' => esc_html__('Primary', 'estatein'),
        ]);

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);
    }
endif;
add_action('after_setup_theme', 'estatein_setup');

/**
 * Register Widget Areas (Sidebars)
 */
function estatein_widgets_init() {
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array(
            'name'          => sprintf(esc_html__('Footer Column %d', 'estatein'), $i),
            'id'            => 'footer-' . $i,
            'description'   => esc_html__('Add widgets here.', 'estatein'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-[#999999] font-medium mb-6">',
            'after_title'   => '</h4>',
        ));
    }
}
add_action('widgets_init', 'estatein_widgets_init');
