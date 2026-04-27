<?php
/**
 * Register Custom Post Types for Estatein
 */

function estatein_register_post_types() {
    $cpts = array(
        'property' => array(
            'label' => 'Properties',
            'icon'  => 'dashicons-admin-home',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
        ),
        'testimonial' => array(
            'label' => 'Testimonials',
            'icon'  => 'dashicons-testimonial',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        ),
        'faq' => array(
            'label' => 'FAQs',
            'icon'  => 'dashicons-editor-help',
            'supports' => array('title', 'editor', 'custom-fields')
        ),
        'feature' => array(
            'label' => 'Features',
            'icon'  => 'dashicons-star-filled'
        ),
        'team_member' => array(
            'label' => 'Team Members',
            'icon'  => 'dashicons-groups',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        ),
        'client' => array(
            'label' => 'Clients',
            'icon'  => 'dashicons-businessman'
        ),
        'achievement' => array(
            'label' => 'Achievements',
            'icon'  => 'dashicons-awards'
        ),
        'experience_step' => array(
            'label' => 'Experience Steps',
            'icon'  => 'dashicons-list-view'
        ),
        'value' => array(
            'label' => 'Values',
            'icon'  => 'dashicons-heart'
        )
    );

    foreach ($cpts as $slug => $args) {
        register_post_type($slug, array(
            'labels' => array(
                'name'          => __($args['label'], 'estatein'),
                'singular_name' => __(substr($args['label'], 0, -1), 'estatein'),
            ),
            'public'      => true,
            'has_archive' => ($slug === 'property'),
            'menu_icon'   => $args['icon'],
            'supports'    => isset($args['supports']) ? $args['supports'] : array('title', 'editor', 'custom-fields'),
            'show_in_rest' => true,
        ));
    }
}
add_action('init', 'estatein_register_post_types');
