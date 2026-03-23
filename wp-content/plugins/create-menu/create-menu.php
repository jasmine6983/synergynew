<?php
/**
 * Plugin Name: Create & Display Menu
 * Description: Registers a Primary Menu and provides a function to fetch its items programmatically.
 * Version: 1.0
 * Author: Jasmine 
 
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Primary Menu
 */
add_action( 'after_setup_theme', 'pmf_register_primary_menu' );
function pmf_register_primary_menu() {
    register_nav_menus( [
        'primary' => __( 'Primary Menu' ),
        'primary-mobile' => ('Primary Menu Mobile'),
        'footer_menu' => ('Footer Menu'),
    ] );
}