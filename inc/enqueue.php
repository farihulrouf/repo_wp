<?php

function estatein_scripts() {
    
     // Enqueue Google Fonts
    wp_enqueue_style('estatein-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap', array(), null);
   
    // 🔥 Tailwind (hasil build)
    wp_enqueue_style(
        'estatein-app',
        get_template_directory_uri() . '/assets/css/app.css',
        [],
        '1.0'
    );

    // 🎯 Swiper CSS (LOCAL)
    wp_enqueue_style(
        'swiper-css',
        get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css',
        [],
        '11.0'
    );

    // 🎯 Swiper JS (LOCAL)
    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js',
        [],
        '11.0',
        true
    );

    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);

    

    // 🚀 App JS (custom kamu)
   wp_enqueue_script(
        'estatein-js',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'estatein_scripts');