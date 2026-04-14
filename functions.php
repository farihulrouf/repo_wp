<?php
/**
 * Estatein functions and definitions
 */

function estatein_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'estatein'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'estatein_setup');

/**
 * Enqueue scripts and styles.
 */
function estatein_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('estatein-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap', array(), null);
    
    // Enqueue Main Style
    wp_enqueue_style('estatein-style', get_stylesheet_uri(), array(), '1.0');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0');

    // Enqueue Tailwind CDN
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // Enqueue Lucide Icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0', true);
}
add_action('wp_enqueue_scripts', 'estatein_scripts');

/**
 * Register Custom Post Types
 */
function estatein_register_post_types() {
    // Properties CPT
    register_post_type('property', array(
        'labels' => array(
            'name' => __('Properties', 'estatein'),
            'singular_name' => __('Property', 'estatein'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Testimonials CPT
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'estatein'),
            'singular_name' => __('Testimonial', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // FAQ CPT
    register_post_type('faq', array(
        'labels' => array(
            'name' => __('FAQs', 'estatein'),
            'singular_name' => __('FAQ', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-editor-help',
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'estatein_register_post_types');

/**
 * Add Meta Boxes for Property Details
 */
function estatein_add_property_metaboxes() {
    add_meta_box(
        'property_details',
        __('Property Details', 'estatein'),
        'estatein_property_details_callback',
        'property',
        'normal',
        'high'
    );

    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'estatein'),
        'estatein_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );

    add_meta_box(
        'faq_details',
        __('FAQ Details', 'estatein'),
        'estatein_faq_details_callback',
        'faq',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'estatein_add_property_metaboxes');

function estatein_testimonial_details_callback($post) {
    wp_nonce_field('estatein_testimonial_details_nonce', 'estatein_testimonial_details_nonce_field');
    $location = get_post_meta($post->ID, '_testimonial_location', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Location (e.g. USA, California)', 'estatein'); ?></label>
        <input type="text" name="testimonial_location" value="<?php echo esc_attr($location); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Rating (1-5)', 'estatein'); ?></label>
        <input type="number" name="testimonial_rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" style="width:100%;" />
    </div>
    <?php
}

function estatein_faq_details_callback($post) {
    wp_nonce_field('estatein_faq_details_nonce', 'estatein_faq_details_nonce_field');
    $btn_text = get_post_meta($post->ID, '_faq_btn_text', true);
    $btn_link = get_post_meta($post->ID, '_faq_btn_link', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Button Text (e.g. Read More)', 'estatein'); ?></label>
        <input type="text" name="faq_btn_text" value="<?php echo esc_attr($btn_text); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Button Link', 'estatein'); ?></label>
        <input type="text" name="faq_btn_link" value="<?php echo esc_attr($btn_link); ?>" style="width:100%;" />
    </div>
    <?php
}

function estatein_property_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('estatein_property_details_nonce', 'estatein_property_details_nonce_field');

    $price = get_post_meta($post->ID, '_property_price', true);
    $bedrooms = get_post_meta($post->ID, '_property_bedrooms', true);
    $bathrooms = get_post_meta($post->ID, '_property_bathrooms', true);
    $type = get_post_meta($post->ID, '_property_type', true);

    echo '<div style="padding: 10px 0;">';
    echo '<label for="property_price" style="display:block; margin-bottom:5px;">' . __('Price (e.g. $550,000)', 'estatein') . '</label>';
    echo '<input type="text" id="property_price" name="property_price" value="' . esc_attr($price) . '" style="width:100%;" />';
    echo '</div>';

    echo '<div style="padding: 10px 0;">';
    echo '<label for="property_bedrooms" style="display:block; margin-bottom:5px;">' . __('Bedrooms (e.g. 4-Bedroom)', 'estatein') . '</label>';
    echo '<input type="text" id="property_bedrooms" name="property_bedrooms" value="' . esc_attr($bedrooms) . '" style="width:100%;" />';
    echo '</div>';

    echo '<div style="padding: 10px 0;">';
    echo '<label for="property_bathrooms" style="display:block; margin-bottom:5px;">' . __('Bathrooms (e.g. 3-Bathroom)', 'estatein') . '</label>';
    echo '<input type="text" id="property_bathrooms" name="property_bathrooms" value="' . esc_attr($bathrooms) . '" style="width:100%;" />';
    echo '</div>';

    echo '<div style="padding: 10px 0;">';
    echo '<label for="property_type" style="display:block; margin-bottom:5px;">' . __('Property Type (e.g. Villa, Apartment)', 'estatein') . '</label>';
    echo '<input type="text" id="property_type" name="property_type" value="' . esc_attr($type) . '" style="width:100%;" />';
    echo '</div>';
}

function estatein_save_property_details($post_id) {
    // Check if nonce is set
    if (!isset($_POST['estatein_property_details_nonce_field'])) {
        return;
    }
    // Verify nonce
    if (!wp_verify_nonce($_POST['estatein_property_details_nonce_field'], 'estatein_property_details_nonce')) {
        return;
    }
    // Check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    if (isset($_POST['property_price'])) {
        update_post_meta($post_id, '_property_price', sanitize_text_field($_POST['property_price']));
    }
    if (isset($_POST['property_bedrooms'])) {
        update_post_meta($post_id, '_property_bedrooms', sanitize_text_field($_POST['property_bedrooms']));
    }
    if (isset($_POST['property_bathrooms'])) {
        update_post_meta($post_id, '_property_bathrooms', sanitize_text_field($_POST['property_bathrooms']));
    }
    if (isset($_POST['property_type'])) {
        update_post_meta($post_id, '_property_type', sanitize_text_field($_POST['property_type']));
    }

    // Testimonial Meta
    if (isset($_POST['estatein_testimonial_details_nonce_field']) && wp_verify_nonce($_POST['estatein_testimonial_details_nonce_field'], 'estatein_testimonial_details_nonce')) {
        if (isset($_POST['testimonial_location'])) {
            update_post_meta($post_id, '_testimonial_location', sanitize_text_field($_POST['testimonial_location']));
        }
        if (isset($_POST['testimonial_rating'])) {
            update_post_meta($post_id, '_testimonial_rating', sanitize_text_field($_POST['testimonial_rating']));
        }
    }

    // FAQ Meta
    if (isset($_POST['estatein_faq_details_nonce_field']) && wp_verify_nonce($_POST['estatein_faq_details_nonce_field'], 'estatein_faq_details_nonce')) {
        if (isset($_POST['faq_btn_text'])) {
            update_post_meta($post_id, '_faq_btn_text', sanitize_text_field($_POST['faq_btn_text']));
        }
        if (isset($_POST['faq_btn_link'])) {
            update_post_meta($post_id, '_faq_btn_link', sanitize_text_field($_POST['faq_btn_link']));
        }
    }
}
add_action('save_post', 'estatein_save_property_details');

/**
 * Custom script to initialize Lucide, Mobile Menu, and Swiper
 */
function estatein_custom_js() {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Mobile Menu Toggle
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Close banner
            const closeBanner = document.querySelector('header button');
            const banner = document.querySelector('header > div:first-child');
            if (closeBanner && banner) {
                closeBanner.addEventListener('click', () => {
                    banner.style.display = 'none';
                    document.querySelector('header').style.top = '0';
                });
            }

            // Initialize Swiper for Properties
            new Swiper('.properties-swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.prop-next',
                    prevEl: '.prop-prev',
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1280: { slidesPerView: 3 }
                }
            });

            // Initialize Swiper for Testimonials
            new Swiper('.testimonials-swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.test-next',
                    prevEl: '.test-prev',
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1280: { slidesPerView: 3 }
                }
            });

            // Initialize Swiper for FAQ
            new Swiper('.faq-swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.faq-next',
                    prevEl: '.faq-prev',
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1280: { slidesPerView: 3 }
                }
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'estatein_custom_js');
