<?php
/* Template Name: Products */
get_header();

?>

<section class="x9f2_container_block">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left -->
            <div class="col-lg-4">
                <div class="bg-label d-inline-block">ALL PRODUCTS</div>

                <h2 class="x9f2_main_title">
                    Wide Range of <br>
                    Investment <span>Products</span>
                </h2>
            </div>

            <!-- Right -->
            <div class="col-lg-8">
                <div class="x9f2_right_block">

                    <p class="x9f2_desc_text">
                        Precision-engineered investment solutions designed to grow and protect your wealth using
                        data-driven insights and veteran expertise.
                    </p>

                    <div class="x9f2_btn_wrap">
                        <button id="banner-explore-more " class="explore-more small" onclick="window.location.href='<?php echo esc_url(home_url('/contact')); ?>'">
                            <span class="btn-text">Talk to Advisor</span>
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/arrow-more-circle.svg">
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="our-services pad-sec pt-2 our-products">
    <div class="container">

        <!-- Tabs -->
        <div class="k8x_tabs_wrapper">
            <div class="k8x_tabs_container">

                <!-- ALL TAB -->
                <div class="k8x_tab_item k8x_active_tab" data-category="all">
                    <span class="k8x_icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="5" height="5"></rect>
                            <rect x="11" y="2" width="5" height="5"></rect>
                            <rect x="2" y="11" width="5" height="5"></rect>
                            <rect x="11" y="11" width="5" height="5"></rect>
                        </svg>
                    </span>
                    All
                </div>

                <?php
                $terms = get_terms([
                    'taxonomy' => 'service-category',
                    'hide_empty' => false,
                ]);
                

                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        $icon_svg = get_field('icon_svg', 'service-category_' . $term->term_id);
                        echo '<div class="k8x_tab_item" data-category="' . $term->slug . '">
                                <span class="k8x_icon">
                                    ' . $icon_svg . '
                                </span>
                                ' . $term->name . '
                              </div>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Services -->
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'service',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'ASC',
            );

            $service_query = new WP_Query($args);
            $i = 1;

            if ($service_query->have_posts()) :
                while ($service_query->have_posts()) : $service_query->the_post();

                    // Single category
                    $terms = get_the_terms(get_the_ID(), 'service-category');
                    $category_slug = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->slug : '';
            ?>
                    <div class="col-md-6 col-lg-4 service-item"
                        data-category="<?php echo $category_slug; ?>">

                        <a href="<?php echo get_permalink(); ?>" class="service-link">
                            <div class="Services-box">

                                <div class="sb-serv-img"
                                    style="background: url(<?php echo get_field('service_image'); ?>);">
                                    <div class="number-label"><?php echo '0' . $i; ?></div>
                                </div>

                                <div class="sb-serv-content">
                                    <h4><?php echo get_the_title(); ?></h4>

                                    <p class="product-dec">
                                        <?php echo get_field('service_description'); ?>
                                    </p>

                                    <span class="learn-more">
                                        Learn More
                                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg">
                                    </span>
                                </div>

                            </div>
                        </a>
                    </div>

            <?php
                    $i++;
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No services found.</p>';
            endif;
            ?>
        </div>

    </div>
</section>







<?php get_footer(); ?>