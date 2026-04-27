<?php

function estatein_register_post_types() {

    $cpts = [
        'property' => ['Properties', 'Property', 'dashicons-admin-home'],
        'testimonial' => ['Testimonials', 'Testimonial', 'dashicons-testimonial'],
        'faq' => ['FAQs', 'FAQ', 'dashicons-editor-help'],
        'feature' => ['Features', 'Feature', 'dashicons-star-filled'],
        'team_member' => ['Team Members', 'Team Member', 'dashicons-groups'],
        'client' => ['Clients', 'Client', 'dashicons-businessman'],
        'achievement' => ['Achievements', 'Achievement', 'dashicons-awards'],
        'experience_step' => ['Experience Steps', 'Experience Step', 'dashicons-list-view'],
        'value' => ['Values', 'Value', 'dashicons-heart'],
    ];

    foreach ($cpts as $slug => $data) {
        register_post_type($slug, [
            'labels' => [
                'name' => __($data[0], 'estatein'),
                'singular_name' => __($data[1], 'estatein'),
            ],
            'public' => true,
            'has_archive' => true,
            'menu_icon' => $data[2],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
            'show_in_rest' => true,
        ]);
    }
}

add_action('init', 'estatein_register_post_types');