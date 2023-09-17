<?php
/**
 * Plugin Name:     Indie Social Icons
 * Description:     Adds h-card attributes to rel="me" social links.
 * Author:          Bob Matyas
 * Author URI:      https://www.bobmatyas.com
 * Text Domain:     indie-social-icons
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Indie_Social_Icons
 */

function indieSocialIcons_Enqueue() {   
    wp_enqueue_script( 'indie_social_icons', plugin_dir_url( __FILE__ ) . 'assets/js/u-url.js', '', '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'indieSocialIcons_Enqueue' );