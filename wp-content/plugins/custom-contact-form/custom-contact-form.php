<?php

/**
 * Plugin Name: Custom Contact Form Handler
 * Description: Handles homepage contact form submissions — saves to DB, displays in backend, and sends email.
 * Version: 1.1
 * Author: Jasmine
 */

if (! defined('ABSPATH')) exit;

// ✅ 1. Create DB Table on activation
function ccf_create_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "custom_contact_form";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        first_name varchar(100) NOT NULL,
        last_name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(50),
        company varchar(150),
        service varchar(150),
        message text,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'ccf_create_table');


// ✅ 2. AJAX handler
add_action('wp_ajax_synergy_contact_form_ajax', 'synergy_handle_contact_form_ajax');
add_action('wp_ajax_nopriv_synergy_contact_form_ajax', 'synergy_handle_contact_form_ajax');

function synergy_handle_contact_form_ajax()
{
    global $wpdb;

    $table_name = $wpdb->prefix . "custom_contact_form";

    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name  = sanitize_text_field($_POST['last_name']);
    $email      = sanitize_email($_POST['email']);
    $phone      = sanitize_text_field($_POST['phone']);
    $company    = sanitize_text_field($_POST['company']);
    $service    = sanitize_text_field($_POST['service']);
    $message    = sanitize_textarea_field($_POST['message']);

    $inserted = $wpdb->insert($table_name, [
        'first_name' => $first_name,
        'last_name'  => $last_name,
        'email'      => $email,
        'phone'      => $phone,
        'company'    => $company,
        'service'    => $service,
        'message'    => $message,
    ]);

    if (! $inserted) {
        wp_send_json_error('Database insert failed');
    }

    // Send email
    $to = get_field('contact_form_email', 6);
    $subject = "New Contact Form Submission";
    $body = "You received a new message:\n\n" .
        "Name: $first_name $last_name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Company: $company\n" .
        "Service: $service\n\n" .
        "Message:\n$message";

    $headers = ["Content-Type: text/plain; charset=UTF-8"];

    wp_mail($to, $subject, $body, $headers);

    wp_send_json_success('Message sent successfully');
}


// ✅ 3. Admin Menu
function ccf_admin_menu()
{
    add_menu_page(
        'Contact Form Entries',
        'Form Entries',
        'manage_options',
        'ccf-entries',
        'ccf_render_admin_page',
        'dashicons-email',
        20
    );
}
add_action('admin_menu', 'ccf_admin_menu');


// ✅ 4. Admin Page with Clear All button
function ccf_render_admin_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "custom_contact_form";

    // 🔴 Handle Clear All
    if (
        isset($_POST['ccf_clear_all']) &&
        isset($_POST['ccf_nonce']) &&
        wp_verify_nonce($_POST['ccf_nonce'], 'ccf_clear_all_action')
    ) {
        $wpdb->query("DELETE FROM $table_name");

        echo "<div class='notice notice-success'><p>All entries deleted successfully.</p></div>";
    }

    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");

    echo "<div class='wrap'><h1>Contact Form Entries</h1>

    <form method='post' onsubmit='return confirm(\"Are you sure you want to delete all entries?\");'>
        " . wp_nonce_field('ccf_clear_all_action', 'ccf_nonce', true, false) . "
        <input type='hidden' name='ccf_clear_all' value='1'>
        <button type='submit' class='button button-secondary' style='margin-bottom:15px;background:#dc3232;color:#fff;border-color:#dc3232;'>
            Clear All Entries
        </button>
    </form>

    <table class='widefat striped'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Service</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>";

    if ($results) {
        foreach ($results as $row) {
            echo "<tr>
                <td>{$row->id}</td>
                <td>{$row->first_name} {$row->last_name}</td>
                <td>{$row->email}</td>
                <td>{$row->phone}</td>
                <td>{$row->company}</td>
                <td>{$row->service}</td>
                <td>{$row->message}</td>
                <td>{$row->submitted_at}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No entries found.</td></tr>";
    }

    echo "</tbody></table></div>";
}