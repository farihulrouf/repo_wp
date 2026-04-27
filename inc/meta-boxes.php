<?php
/**
 * Custom Meta Boxes for Estatein
 */

function estatein_add_custom_metaboxes() {
    $metaboxes = array(
        'property'        => 'Property Details',
        'testimonial'     => 'Testimonial Details',
        'faq'             => 'FAQ Details',
        'feature'         => 'Feature Details',
        'team_member'     => 'Team Member Details',
        'client'          => 'Client Details',
        'experience_step' => 'Step Details',
        'value'           => 'Value Details',
        'page'            => 'Hero & CTA Section Settings'
    );

    foreach ($metaboxes as $post_type => $title) {
        $callback = ($post_type === 'page') ? 'estatein_hero_details_callback' : 'estatein_' . $post_type . '_details_callback';
        add_meta_box(
            $post_type . '_details',
            __($title, 'estatein'),
            $callback,
            $post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'estatein_add_custom_metaboxes');

/**
 * HELPER: Simple text field
 */
function estatein_field($label, $name, $value, $type = 'text', $extra = '') {
    ?>
    <div style="padding: 10px 0;">
        <label style="display:block; margin-bottom:5px;"><b><?php echo $label; ?></b></label>
        <?php if ($type === 'textarea') : ?>
            <textarea name="<?php echo $name; ?>" style="width:100%;" rows="4"><?php echo esc_textarea($value); ?></textarea>
        <?php else : ?>
            <input type="<?php echo $type; ?>" name="<?php echo $name; ?>" value="<?php echo esc_attr($value); ?>" style="width:100%;" <?php echo $extra; ?> />
        <?php endif; ?>
    </div>
    <?php
}

// --- CALLBACKS ---

function estatein_property_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Price', 'estatein'), 'property_price', get_post_meta($post->ID, '_property_price', true));
    estatein_field(__('Bedrooms', 'estatein'), 'property_bedrooms', get_post_meta($post->ID, '_property_bedrooms', true));
    estatein_field(__('Bathrooms', 'estatein'), 'property_bathrooms', get_post_meta($post->ID, '_property_bathrooms', true));
    estatein_field(__('Property Type', 'estatein'), 'property_type', get_post_meta($post->ID, '_property_type', true));
}

function estatein_testimonial_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Client Name', 'estatein'), 'testimonial_name', get_post_meta($post->ID, '_testimonial_name', true));
    estatein_field(__('Location', 'estatein'), 'testimonial_location', get_post_meta($post->ID, '_testimonial_location', true));
    estatein_field(__('Rating (1-5)', 'estatein'), 'testimonial_rating', get_post_meta($post->ID, '_testimonial_rating', true), 'number', 'min="1" max="5"');
}

function estatein_faq_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Button Text', 'estatein'), 'faq_btn_text', get_post_meta($post->ID, '_faq_btn_text', true));
    estatein_field(__('Button Link', 'estatein'), 'faq_btn_link', get_post_meta($post->ID, '_faq_btn_link', true));
}

function estatein_feature_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Lucide Icon Name', 'estatein'), 'feature_icon', get_post_meta($post->ID, '_feature_icon', true));
}

function estatein_team_member_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Position', 'estatein'), 'team_position', get_post_meta($post->ID, '_team_position', true));
    estatein_field(__('Twitter Link', 'estatein'), 'team_twitter', get_post_meta($post->ID, '_team_twitter', true));
}

function estatein_client_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Since Year', 'estatein'), 'client_since', get_post_meta($post->ID, '_client_since', true));
    estatein_field(__('Website Link', 'estatein'), 'client_website', get_post_meta($post->ID, '_client_website', true));
    estatein_field(__('Domain', 'estatein'), 'client_domain', get_post_meta($post->ID, '_client_domain', true));
    estatein_field(__('Category', 'estatein'), 'client_category', get_post_meta($post->ID, '_client_category', true));
    estatein_field(__('What They Said', 'estatein'), 'client_testimonial', get_post_meta($post->ID, '_client_testimonial', true), 'textarea');
}

function estatein_experience_step_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Step Label', 'estatein'), 'step_label', get_post_meta($post->ID, '_step_label', true));
}

function estatein_value_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    estatein_field(__('Lucide Icon Name', 'estatein'), 'value_icon', get_post_meta($post->ID, '_value_icon', true));
}

function estatein_hero_details_callback($post) {
    wp_nonce_field('estatein_meta_nonce', 'estatein_meta_nonce_field');
    $hide_title = get_post_meta($post->ID, '_hero_hide_title', true);
    ?>
    <div style="background: #f0f0f1; border-left: 4px solid #703BF7; padding: 15px; margin-bottom: 20px;">
        <label><input type="checkbox" name="hero_hide_title" value="1" <?php checked($hide_title, '1'); ?> /> <b><?php _e('Hide Main Page Title in Hero', 'estatein'); ?></b></label>
    </div>
    <?php
    estatein_field(__('Hero Title Gray Text', 'estatein'), 'hero_title_gray', get_post_meta($post->ID, '_hero_title_gray', true));
    
    echo '<div style="display:flex; gap:10px;">';
    estatein_field(__('Stat 1 Value', 'estatein'), 'hero_stat1_val', get_post_meta($post->ID, '_hero_stat1_val', true));
    estatein_field(__('Stat 1 Label', 'estatein'), 'hero_stat1_lbl', get_post_meta($post->ID, '_hero_stat1_lbl', true));
    echo '</div>';
    
    echo '<hr/><h3>' . __('CTA Section', 'estatein') . '</h3>';
    estatein_field(__('CTA Title', 'estatein'), 'cta_title', get_post_meta($post->ID, '_cta_title', true));
    estatein_field(__('CTA Description', 'estatein'), 'cta_desc', get_post_meta($post->ID, '_cta_desc', true), 'textarea');
}

/**
 * SAVE LOGIC
 */
function estatein_save_meta_data($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['estatein_meta_nonce_field']) || !wp_verify_nonce($_POST['estatein_meta_nonce_field'], 'estatein_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = array(
        'property_price', 'property_bedrooms', 'property_bathrooms', 'property_type',
        'testimonial_name', 'testimonial_location', 'testimonial_rating',
        'faq_btn_text', 'faq_btn_link',
        'feature_icon', 'team_position', 'team_twitter',
        'client_since', 'client_website', 'client_domain', 'client_category', 'client_testimonial',
        'step_label', 'value_icon',
        'hero_title_gray', 'hero_stat1_val', 'hero_stat1_lbl', 'hero_hide_title',
        'cta_title', 'cta_desc'
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $val = ($field === 'cta_desc' || $field === 'client_testimonial') ? sanitize_textarea_field($_POST[$field]) : sanitize_text_field($_POST[$field]);
            update_post_meta($post_id, '_' . $field, $val);
        } elseif ($field === 'hero_hide_title') {
            update_post_meta($post_id, '_hero_hide_title', '0');
        }
    }
}
add_action('save_post', 'estatein_save_meta_data');
