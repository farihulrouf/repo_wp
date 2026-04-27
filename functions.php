<?php
/**
 * Estatein functions and definitions
 */
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';

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

    // Feature CPT
    register_post_type('feature', array(
        'labels' => array(
            'name' => __('Features', 'estatein'),
            'singular_name' => __('Feature', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Team Member CPT
    register_post_type('team_member', array(
        'labels' => array(
            'name' => __('Team Members', 'estatein'),
            'singular_name' => __('Team Member', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Client CPT
    register_post_type('client', array(
        'labels' => array(
            'name' => __('Clients', 'estatein'),
            'singular_name' => __('Client', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Achievement CPT
    register_post_type('achievement', array(
        'labels' => array(
            'name' => __('Achievements', 'estatein'),
            'singular_name' => __('Achievement', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Experience Step CPT
    register_post_type('experience_step', array(
        'labels' => array(
            'name' => __('Experience Steps', 'estatein'),
            'singular_name' => __('Experience Step', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-list-view',
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
    ));

    // Value CPT
    register_post_type('value', array(
        'labels' => array(
            'name' => __('Values', 'estatein'),
            'singular_name' => __('Value', 'estatein'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-heart',
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'estatein_register_post_types');

/**
 * Register widget area.
 */
function estatein_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Column 1', 'estatein'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'estatein'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-[#999999] font-medium mb-6">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer Column 2', 'estatein'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'estatein'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-[#999999] font-medium mb-6">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer Column 3', 'estatein'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'estatein'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-[#999999] font-medium mb-6">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer Column 4', 'estatein'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Add widgets here.', 'estatein'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-[#999999] font-medium mb-6">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'estatein_widgets_init');

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

    add_meta_box(
        'feature_details',
        __('Feature Details', 'estatein'),
        'estatein_feature_details_callback',
        'feature',
        'normal',
        'high'
    );

    add_meta_box(
        'team_details',
        __('Team Member Details', 'estatein'),
        'estatein_team_details_callback',
        'team_member',
        'normal',
        'high'
    );

    add_meta_box(
        'client_details',
        __('Client Details', 'estatein'),
        'estatein_client_details_callback',
        'client',
        'normal',
        'high'
    );

    add_meta_box(
        'experience_step_details',
        __('Step Details', 'estatein'),
        'estatein_experience_step_details_callback',
        'experience_step',
        'normal',
        'high'
    );

    add_meta_box(
        'value_details',
        __('Value Details', 'estatein'),
        'estatein_value_details_callback',
        'value',
        'normal',
        'high'
    );

    // Hero Meta Box for Front Page
    add_meta_box(
        'hero_details',
        __('Hero & CTA Section Settings', 'estatein'),
        'estatein_hero_details_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'estatein_add_property_metaboxes');

function estatein_feature_details_callback($post) {
    wp_nonce_field('estatein_feature_details_nonce', 'estatein_feature_details_nonce_field');
    $icon = get_post_meta($post->ID, '_feature_icon', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Lucide Icon Name (e.g. home, dollar-sign, settings)', 'estatein'); ?></label>
        <input type="text" name="feature_icon" value="<?php echo esc_attr($icon); ?>" style="width:100%;" />
    </div>
    <?php
}

function estatein_team_details_callback($post) {
    wp_nonce_field('estatein_team_details_nonce', 'estatein_team_details_nonce_field');
    $position = get_post_meta($post->ID, '_team_position', true);
    $twitter = get_post_meta($post->ID, '_team_twitter', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Position', 'estatein'); ?></label>
        <input type="text" name="team_position" value="<?php echo esc_attr($position); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Twitter Link', 'estatein'); ?></label>
        <input type="text" name="team_twitter" value="<?php echo esc_attr($twitter); ?>" style="width:100%;" />
    </div>
    <?php
}

function estatein_client_details_callback($post) {
    wp_nonce_field('estatein_client_details_nonce', 'estatein_client_details_nonce_field');
    $since = get_post_meta($post->ID, '_client_since', true);
    $website = get_post_meta($post->ID, '_client_website', true);
    $domain = get_post_meta($post->ID, '_client_domain', true);
    $category = get_post_meta($post->ID, '_client_category', true);
    $testimonial = get_post_meta($post->ID, '_client_testimonial', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Since Year (e.g. 2019)', 'estatein'); ?></label>
        <input type="text" name="client_since" value="<?php echo esc_attr($since); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Website Link', 'estatein'); ?></label>
        <input type="text" name="client_website" value="<?php echo esc_attr($website); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Domain (e.g. Commercial Real Estate)', 'estatein'); ?></label>
        <input type="text" name="client_domain" value="<?php echo esc_attr($domain); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Category (e.g. Luxury Home Development)', 'estatein'); ?></label>
        <input type="text" name="client_category" value="<?php echo esc_attr($category); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('What They Said', 'estatein'); ?></label>
        <textarea name="client_testimonial" style="width:100%;" rows="4"><?php echo esc_textarea($testimonial); ?></textarea>
    </div>
    <?php
}

function estatein_experience_step_details_callback($post) {
    wp_nonce_field('estatein_experience_step_details_nonce', 'estatein_experience_step_details_nonce_field');
    $step_label = get_post_meta($post->ID, '_step_label', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Step Label (e.g. Step 01)', 'estatein'); ?></label>
        <input type="text" name="step_label" value="<?php echo esc_attr($step_label); ?>" style="width:100%;" />
    </div>
    <?php
}

function estatein_value_details_callback($post) {
    wp_nonce_field('estatein_value_details_nonce', 'estatein_value_details_nonce_field');
    $icon = get_post_meta($post->ID, '_value_icon', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Lucide Icon Name (e.g. star, award, users)', 'estatein'); ?></label>
        <input type="text" name="value_icon" value="<?php echo esc_attr($icon); ?>" style="width:100%;" />
    </div>
    <?php
}

function estatein_hero_details_callback($post) {
    wp_nonce_field('estatein_hero_details_nonce', 'estatein_hero_details_nonce_field');
    $hero_title_gray = get_post_meta($post->ID, '_hero_title_gray', true);
    $stat1_val = get_post_meta($post->ID, '_hero_stat1_val', true);
    $stat1_lbl = get_post_meta($post->ID, '_hero_stat1_lbl', true);
    $stat2_val = get_post_meta($post->ID, '_hero_stat2_val', true);
    $stat2_lbl = get_post_meta($post->ID, '_hero_stat2_lbl', true);
    $stat3_val = get_post_meta($post->ID, '_hero_stat3_val', true);
    $stat3_lbl = get_post_meta($post->ID, '_hero_stat3_lbl', true);
    $hero_btn1_text = get_post_meta($post->ID, '_hero_btn1_text', true);
    $hero_btn1_link = get_post_meta($post->ID, '_hero_btn1_link', true);
    $hero_btn2_text = get_post_meta($post->ID, '_hero_btn2_text', true);
    $hero_btn2_link = get_post_meta($post->ID, '_hero_btn2_link', true);
    $hero_hide_title = get_post_meta($post->ID, '_hero_hide_title', true);
    ?>
    <div style="padding: 10px 0; background: #f9f9f9; border: 1px solid #ddd; padding: 10px; margin-bottom: 20px;">
        <label>
            <input type="checkbox" name="hero_hide_title" value="1" <?php checked($hero_hide_title, '1'); ?> />
            <?php _e('Hide Main Title (Page Title) in Hero', 'estatein'); ?>
        </label>
        <p class="description"><?php _e('Check this if you want to put the whole title in the "Gray Text" field below.', 'estatein'); ?></p>
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Hero Title Gray Text (e.g. Property with Estatein)', 'estatein'); ?></label>
        <input type="text" name="hero_title_gray" value="<?php echo esc_attr($hero_title_gray); ?>" style="width:100%;" />
    </div>
    <div style="display: flex; gap: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px;">
        <div style="flex: 1;">
            <label><?php _e('Stat 1 Value', 'estatein'); ?></label>
            <input type="text" name="hero_stat1_val" value="<?php echo esc_attr($stat1_val); ?>" style="width:100%;" />
            <label><?php _e('Stat 1 Label', 'estatein'); ?></label>
            <input type="text" name="hero_stat1_lbl" value="<?php echo esc_attr($stat1_lbl); ?>" style="width:100%;" />
        </div>
        <div style="flex: 1;">
            <label><?php _e('Stat 2 Value', 'estatein'); ?></label>
            <input type="text" name="hero_stat2_val" value="<?php echo esc_attr($stat2_val); ?>" style="width:100%;" />
            <label><?php _e('Stat 2 Label', 'estatein'); ?></label>
            <input type="text" name="hero_stat2_lbl" value="<?php echo esc_attr($stat2_lbl); ?>" style="width:100%;" />
        </div>
        <div style="flex: 1;">
            <label><?php _e('Stat 3 Value', 'estatein'); ?></label>
            <input type="text" name="hero_stat3_val" value="<?php echo esc_attr($stat3_val); ?>" style="width:100%;" />
            <label><?php _e('Stat 3 Label', 'estatein'); ?></label>
            <input type="text" name="hero_stat3_lbl" value="<?php echo esc_attr($stat3_lbl); ?>" style="width:100%;" />
        </div>
    </div>

    <div style="display: flex; gap: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px;">
        <div style="flex: 1;">
            <label><?php _e('Hero Button 1 Text', 'estatein'); ?></label>
            <input type="text" name="hero_btn1_text" value="<?php echo esc_attr($hero_btn1_text); ?>" style="width:100%;" />
            <label><?php _e('Hero Button 1 Link', 'estatein'); ?></label>
            <input type="text" name="hero_btn1_link" value="<?php echo esc_attr($hero_btn1_link); ?>" style="width:100%;" />
        </div>
        <div style="flex: 1;">
            <label><?php _e('Hero Button 2 Text', 'estatein'); ?></label>
            <input type="text" name="hero_btn2_text" value="<?php echo esc_attr($hero_btn2_text); ?>" style="width:100%;" />
            <label><?php _e('Hero Button 2 Link', 'estatein'); ?></label>
            <input type="text" name="hero_btn2_link" value="<?php echo esc_attr($hero_btn2_link); ?>" style="width:100%;" />
        </div>
    </div>

    <?php
    $value_title = get_post_meta($post->ID, '_value_title', true);
    $value_desc = get_post_meta($post->ID, '_value_desc', true);
    ?>
    <div style="border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px;">
        <h3><?php _e('Our Values Section Settings', 'estatein'); ?></h3>
        <div style="padding: 10px 0;">
            <label style="display:block; margin-bottom:5px;"><?php _e('Section Title', 'estatein'); ?></label>
            <input type="text" name="value_title" value="<?php echo esc_attr($value_title); ?>" style="width:100%;" />
        </div>
        <div style="padding: 10px 0;">
            <label style="display:block; margin-bottom:5px;"><?php _e('Section Description', 'estatein'); ?></label>
            <textarea name="value_desc" style="width:100%; height: 80px;"><?php echo esc_textarea($value_desc); ?></textarea>
        </div>
    </div>

    <?php
    $cta_title = get_post_meta($post->ID, '_cta_title', true);
    $cta_desc = get_post_meta($post->ID, '_cta_desc', true);
    $cta_btn_text = get_post_meta($post->ID, '_cta_btn_text', true);
    $cta_btn_link = get_post_meta($post->ID, '_cta_btn_link', true);
    ?>
    <h3><?php _e('CTA Section Settings', 'estatein'); ?></h3>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('CTA Title', 'estatein'); ?></label>
        <input type="text" name="cta_title" value="<?php echo esc_attr($cta_title); ?>" style="width:100%;" />
    </div>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('CTA Description', 'estatein'); ?></label>
        <textarea name="cta_desc" style="width:100%; height: 100px;"><?php echo esc_textarea($cta_desc); ?></textarea>
    </div>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <label><?php _e('Button Text', 'estatein'); ?></label>
            <input type="text" name="cta_btn_text" value="<?php echo esc_attr($cta_btn_text); ?>" style="width:100%;" />
        </div>
        <div style="flex: 1;">
            <label><?php _e('Button Link', 'estatein'); ?></label>
            <input type="text" name="cta_btn_link" value="<?php echo esc_attr($cta_btn_link); ?>" style="width:100%;" />
        </div>
    </div>
    <?php
}

function estatein_testimonial_details_callback($post) {
    wp_nonce_field('estatein_testimonial_details_nonce', 'estatein_testimonial_details_nonce_field');
    $name = get_post_meta($post->ID, '_testimonial_name', true);
    $location = get_post_meta($post->ID, '_testimonial_location', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><?php _e('Client Name', 'estatein'); ?></label>
        <input type="text" name="testimonial_name" value="<?php echo esc_attr($name); ?>" style="width:100%;" />
    </div>
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
    // Check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Property Meta
    if (isset($_POST['estatein_property_details_nonce_field']) && wp_verify_nonce($_POST['estatein_property_details_nonce_field'], 'estatein_property_details_nonce')) {
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
    }

    // Testimonial Meta
    if (isset($_POST['estatein_testimonial_details_nonce_field']) && wp_verify_nonce($_POST['estatein_testimonial_details_nonce_field'], 'estatein_testimonial_details_nonce')) {
        if (isset($_POST['testimonial_name'])) {
            update_post_meta($post_id, '_testimonial_name', sanitize_text_field($_POST['testimonial_name']));
        }
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

    // Feature Meta
    if (isset($_POST['estatein_feature_details_nonce_field']) && wp_verify_nonce($_POST['estatein_feature_details_nonce_field'], 'estatein_feature_details_nonce')) {
        if (isset($_POST['feature_icon'])) {
            update_post_meta($post_id, '_feature_icon', sanitize_text_field($_POST['feature_icon']));
        }
    }

    // Team Meta
    if (isset($_POST['estatein_team_details_nonce_field']) && wp_verify_nonce($_POST['estatein_team_details_nonce_field'], 'estatein_team_details_nonce')) {
        if (isset($_POST['team_position'])) {
            update_post_meta($post_id, '_team_position', sanitize_text_field($_POST['team_position']));
        }
        if (isset($_POST['team_twitter'])) {
            update_post_meta($post_id, '_team_twitter', sanitize_text_field($_POST['team_twitter']));
        }
    }

    // Client Meta
    if (isset($_POST['estatein_client_details_nonce_field']) && wp_verify_nonce($_POST['estatein_client_details_nonce_field'], 'estatein_client_details_nonce')) {
        $client_fields = ['client_since', 'client_website', 'client_domain', 'client_category', 'client_testimonial'];
        foreach ($client_fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }

    // Experience Step Meta
    if (isset($_POST['estatein_experience_step_details_nonce_field']) && wp_verify_nonce($_POST['estatein_experience_step_details_nonce_field'], 'estatein_experience_step_details_nonce')) {
        if (isset($_POST['step_label'])) {
            update_post_meta($post_id, '_step_label', sanitize_text_field($_POST['step_label']));
        }
    }

    // Value Meta
    if (isset($_POST['estatein_value_details_nonce_field']) && wp_verify_nonce($_POST['estatein_value_details_nonce_field'], 'estatein_value_details_nonce')) {
        if (isset($_POST['value_icon'])) {
            update_post_meta($post_id, '_value_icon', sanitize_text_field($_POST['value_icon']));
        }
    }

    // Hero Meta
    if (isset($_POST['estatein_hero_details_nonce_field']) && wp_verify_nonce($_POST['estatein_hero_details_nonce_field'], 'estatein_hero_details_nonce')) {
        $hero_fields = [
            'hero_title_gray', 
            'hero_stat1_val', 'hero_stat1_lbl', 
            'hero_stat2_val', 'hero_stat2_lbl', 
            'hero_stat3_val', 'hero_stat3_lbl',
            'hero_btn1_text', 'hero_btn1_link',
            'hero_btn2_text', 'hero_btn2_link',
            'hero_hide_title',
            'value_title', 'value_desc',
            'cta_title', 'cta_btn_text', 'cta_btn_link'
        ];
        foreach ($hero_fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            } elseif ($field === 'hero_hide_title') {
                update_post_meta($post_id, '_hero_hide_title', '0');
            }
        }
        if (isset($_POST['cta_desc'])) {
            update_post_meta($post_id, '_cta_desc', sanitize_textarea_field($_POST['cta_desc']));
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

            // Initialize Swiper for Clients
            const clientsSwiper = new Swiper('.clients-swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.clients-next',
                    prevEl: '.clients-prev',
                },
                breakpoints: {
                    768: { slidesPerView: 2 }
                },
                on: {
                    init: function() {
                        updateClientsCounter(this);
                    },
                    slideChange: function() {
                        updateClientsCounter(this);
                    }
                }
            });

            function updateClientsCounter(swiper) {
                const current = document.querySelector('.clients-current');
                const total = document.querySelector('.clients-total');
                if (current && total) {
                    current.textContent = (swiper.realIndex + 1).toString().padStart(2, '0');
                    total.textContent = swiper.slides.length.toString().padStart(2, '0');
                }
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'estatein_custom_js');
