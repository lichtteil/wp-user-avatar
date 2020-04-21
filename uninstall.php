<?php

if ( ! defined('WP_UNINSTALL_PLUGIN')) {
    die('You are not allowed to call this page directly.');
}

global $blog_id, $wpdb;
$users = get_users();

// Remove settings for all sites in multisite
if ( ! is_multisite()) {

    delete_option('avatar_default_wp_user_avatar');
    delete_option('wp_user_avatar_allow_upload');
    delete_option('wp_user_avatar_disable_gravatar');
    delete_option('wp_user_avatar_edit_avatar');
    delete_option('wp_user_avatar_load_scripts');
    delete_option('wp_user_avatar_resize_crop');
    delete_option('wp_user_avatar_resize_h');
    delete_option('wp_user_avatar_resize_upload');
    delete_option('wp_user_avatar_resize_w');
    delete_option('wp_user_avatar_upload_size_limit');
    delete_option('wp_user_avatar_default_avatar_updated');
    delete_option('wp_user_avatar_media_updated');
    delete_option('wp_user_avatar_users_updated');
    delete_option('wpua_has_gravatar');
}

// Delete post meta
delete_post_meta_by_key('_wp_attachment_wp_user_avatar');

// Reset all default avatars to Mystery Man
update_option('avatar_default', 'mystery');
