<?php

//add a meta box to package post
if (is_admin())
    add_action('add_meta_boxes', 'ank_init_package_meta_box');
function ank_init_package_meta_box()
{
    add_meta_box(
        'package_meta_box',   //id
        'Package Information',
        'ank_show_package_meta_box', //callback function
        'package',//post-type
        'normal'   //position
    );
}

function ank_show_package_meta_box($post)
{
    wp_nonce_field(basename(__FILE__), 'package_meta_box_nonce');
    ?>
    <p>
        <label for="last_minute_offer">Last Minute Offer (% OFF)</label>
        <input class="widefat" type="text" id="last_minute_offer" name="last_minute_offer" value="<?php echo esc_attr(get_post_meta($post->ID, 'last_minute_offer', true)) ?>"/>
    </p>
    <p>
        <label for="pkg_duration">Package Duration</label>
        <input class="widefat" type="text" id="pkg_duration" name="pkg_duration" value="<?php echo esc_attr(get_post_meta($post->ID, 'pkg_duration', true)) ?>"/>
    </p>
    <p>
        <label for="pkg_location">Package Location</label>
        <input class="widefat" type="text" id="pkg_location" name="pkg_location" value="<?php echo esc_attr(get_post_meta($post->ID, 'pkg_location', true)) ?>"/>
    </p>
    <p>
        <label for="pkg_price">Package Price (In $)</label>
        <input class="widefat" type="text" id="pkg_price" name="pkg_price" value="<?php echo esc_attr(get_post_meta($post->ID, 'pkg_price', true)) ?>"/>
    </p>
    <p>
        <label for="pkg_seat">Total Seats</label>
        <input class="widefat" type="text" id="pkg_seat" name="pkg_seat" value="<?php echo esc_attr(get_post_meta($post->ID, 'pkg_seat', true)) ?>"/>
    </p>
<?php
}

if (is_admin())
    add_action('save_post', 'ank_save_package_meta_box');

function ank_save_package_meta_box($post_id)
{

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if (!current_user_can('edit_post', $post_id))
        return;

    if (!isset($_POST['package_meta_box_nonce']) || !wp_verify_nonce($_POST['package_meta_box_nonce'], basename(__FILE__)))
        return;

    if (!isset($_POST['post_type']) || 'package' !== $_POST['post_type'])
        return;

    update_post_meta($post_id, 'last_minute_offer', sanitize_text_field($_POST['last_minute_offer']));
    update_post_meta($post_id, 'pkg_duration', sanitize_text_field($_POST['pkg_duration']));
    update_post_meta($post_id, 'pkg_location', sanitize_text_field($_POST['pkg_location']));
    update_post_meta($post_id, 'pkg_price', sanitize_text_field($_POST['pkg_price']));
    update_post_meta($post_id, 'pkg_seat', sanitize_text_field($_POST['pkg_seat']));
}
