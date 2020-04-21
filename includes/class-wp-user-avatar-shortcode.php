<?php
/**
 * Defines shortcodes.
 *
 * @package WP User Avatar
 * @version 1.9.13
 */

class WP_User_Avatar_Shortcode {
  /**
   * Constructor
   * @since 1.8
   * @uses object $wp_user_avatar
   * @uses add_action()
   * @uses add_shortcode()
   */
  public function __construct() {
    global $wp_user_avatar;
  }
}

/**
 * Initialize
 * @since 1.9.2
 */
function wpua_shortcode_init() {
  global $wpua_shortcode;
  $wpua_shortcode = new WP_User_Avatar_Shortcode();
  // Clean output
  ob_start();
}
add_action('init', 'wpua_shortcode_init');
