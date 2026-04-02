<?php
/* Template Name: Header
*/
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>
</head>


<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href=<?php echo get_home_url(); ?>><img src="<?php echo get_field('site_logo','6'); ?>" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sidebar" id="navbarScroll">
                <button type="button" class="btn-close sidebar-close d-lg-none" aria-label="Close"></button>
                <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                    <?php
                    $menu_name = 'primary';
                    $locations = get_nav_menu_locations();

                    if (isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                    }
                    foreach ($menu_items as $item) {


                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url($item->url);?>"><?php echo $item->title; ?></a></li>
                    <?php
                    }
                    ?>

                </ul>
                <div class="d-flex">
                    <a href="<?php echo wp_login_url(); ?>" class="login-link">Log In</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Overlay -->
    <div class="sidebar-overlay"></div>

    <!-- Mobile nav -->

    <section class="mobile-nav">

        <div class="mob-nav-wrap">
            <a class="navbar-brand" href="#"><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/logo.png" width="100%" /></a>
            <a href="<?php echo wp_login_url(); ?>" class="login-btn">Login</a>
        </div>
        <div class="mob-nav-menu">
            <ul>
                <?php
                
                    $menu_name = 'primary';
                    $locations = get_nav_menu_locations();

                    if (isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                    }
                foreach ($menu_items as $item) {
                ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url($item->url);?>"><?php echo $item->title; ?></a></li>
                <?php
                }
                ?>


        </div>

    </section>

    <!-- Mobile nav -->