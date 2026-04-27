<?php
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
