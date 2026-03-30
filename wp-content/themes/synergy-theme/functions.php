<?php
function synergy_enqueue_styles() {
    // Bootstrap 5 CSS from CDN
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        [],
        '5.3.8',
        'all'
    );

    // Odometer CSS (theme)
    wp_enqueue_style(
        'odometer-css',
        get_template_directory_uri() . '/assets/css/odometer.css',
        [],
        '1.0',
        'all'
    );

    // Theme core CSS
    wp_enqueue_style(
        'theme-core-css',
        get_template_directory_uri() . '/assets/css/theme-core.css',
        [],
        '1.0',
        'all'
    );

    // Swiper CSS from CDN
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        '11.0',
        'all'
    );

    // Main style.css
    wp_enqueue_style(
        'theme-style-css',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '1.0',
        'all'
    );

    // Favicon / Apple Touch Icons
    // Note: favicons are not enqueued; add via wp_head with proper <link> tags
    add_action('wp_head', function() {
        $site_url = esc_url(get_site_url());
        echo '<link rel="apple-touch-icon" sizes="180x180" href="' . $site_url . '/wp-content/themes/synergy-theme/assets/img/apple-touch-icon.png">';
        echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $site_url . '/wp-content/themes/synergy-theme/assets/img/favicon-32x32.png">';
        echo '<link rel="icon" type="image/png" sizes="16x16" href="' . $site_url . '/wp-content/themes/synergy-theme/assets/img/favicon-16x16.png">';
        echo '<link rel="manifest" href="' . $site_url . '/wp-content/themes/synergy-theme/assets/img/site.webmanifest">';
    });
}
add_action('wp_enqueue_scripts', 'synergy_enqueue_styles');


function synergy_enqueue_scripts() {

    // jQuery (local) 
    wp_enqueue_script( 
        'jquery-local', get_site_url() . '/wp-content/themes/synergy-theme/assets/js/jquery.js', 
        array(), null, 
        true );

    // Bootstrap bundle
    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.8',
        true
    );

    // Swiper
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11',
        true
    );

    // Odometer
    wp_enqueue_script(
        'odometer',
        get_template_directory_uri() . '/assets/js/odometer.js',
        array(),
        null,
        true
    );

    // GSAP
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    // ScrollTrigger
    wp_enqueue_script(
        'scroll-trigger',
        get_template_directory_uri() . '/assets/js/scroll-trigger.min.js',
        array('gsap'),
        null,
        true
    );

    // SplitText
    wp_enqueue_script(
        'split-text',
        get_template_directory_uri() . '/assets/js/split-text.min.js',
        array('gsap'),
        null,
        true
    );

    // WOW.js
    wp_enqueue_script(
        'wow',
        get_template_directory_uri() . '/assets/js/wow.min.js',
        array('jquery'),
        null,
        true
    );

    // Theme main JS
    wp_enqueue_script(
        'theme-main',
        get_template_directory_uri() . '/assets/js/theme-main.js',
        array('jquery'),
        null,
        true
    );

    // Main JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        null,
        true
    );

    // AJAX contact form JS
    wp_enqueue_script(
        'ccf-ajax-script',
        get_template_directory_uri() . '/assets/js/ccf-ajax.js',
        array('jquery'),
        null,
        true
    );

    // Localize AJAX URL & nonce
    wp_localize_script('ccf-ajax-script', 'ccf_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('ccf_nonce')
    ));
}

add_action('wp_enqueue_scripts', 'synergy_enqueue_scripts');


add_theme_support('post-thumbnails');




?>

