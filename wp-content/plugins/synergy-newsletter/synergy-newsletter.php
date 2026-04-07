<?php
/**
 * Plugin Name: Synergy Newsletter
 * Description: Newsletter subscription with AJAX and admin panel listing
 * Version: 1.0
 * Author: You
 */

if (!defined('ABSPATH')) exit;

//
// ✅ Register Custom Post Type
//
function sn_register_newsletter_cpt() {

    register_post_type('newsletter', [
        'labels' => [
            'name' => 'Newsletter Subscribers',
            'singular_name' => 'Subscriber',
        ],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-email',
        'supports' => ['title'],
        'capabilities' => [
            'create_posts' => false, // disable manual add
        ],
        'map_meta_cap' => true,
    ]);

}
add_action('init', 'sn_register_newsletter_cpt');

//
// ✅ AJAX: Save Email
//
function sn_save_email() {

    $email = sanitize_email($_POST['email']);

    if (!is_email($email)) {
        wp_send_json_error("Invalid email address");
    }

    // 🔁 Check duplicate
    $existing = get_posts([
        'post_type' => 'newsletter',
        'title' => $email,
        'post_status' => 'publish',
        'numberposts' => 1
    ]);

    if ($existing) {
        wp_send_json_error("Email already subscribed");
    }

    // ✅ Insert as post
    $post_id = wp_insert_post([
        'post_title' => $email,
        'post_type' => 'newsletter',
        'post_status' => 'publish'
    ]);

    if ($post_id) {
        wp_send_json_success("Subscribed successfully");
    } else {
        wp_send_json_error("Something went wrong");
    }
}

add_action('wp_ajax_save_newsletter_email', 'sn_save_email');
add_action('wp_ajax_nopriv_save_newsletter_email', 'sn_save_email');

//
// ✅ Enqueue JS
//
function sn_enqueue_scripts() {

    wp_enqueue_script(
        'sn-newsletter-js',
         get_template_directory_uri() . '/assets/js/newsletter.js',
        [],
        null,
        true
    );

    wp_localize_script('sn-newsletter-js', 'sn_ajax_obj', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);

}
add_action('wp_enqueue_scripts', 'sn_enqueue_scripts');