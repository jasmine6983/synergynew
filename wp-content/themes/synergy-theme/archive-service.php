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
<section class="our-services pad-sec pt-2 our-products" style="">
    <div class="container">
        <!-- Tabs Section -->
        <div class="k8x_tabs_wrapper">
            <div class="k8x_tabs_container">
                <?php
                $terms = get_terms([
                    'taxonomy' => 'service-category',
                    'hide_empty' => false,
                ]);
mailto:



                if (!empty($terms) && !is_wp_error($terms)) {

                    $i = 0;

                    foreach ($terms as $term) {

                        $active_class = ($i === 0) ? 'k8x_active_tab' : '';

                        echo '<div class="k8x_tab_item ' . $active_class . '">
                <span class="k8x_icon">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="5" height="5"></rect>
                        <rect x="11" y="2" width="5" height="5"></rect>
                        <rect x="2" y="11" width="5" height="5"></rect>
                        <rect x="11" y="11" width="5" height="5"></rect>
                    </svg>
                </span>
                ' . $term->name . '
              </div>';

                        $i++;
                    }
                }
                ?>







            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'service', // your custom post type
                'posts_per_page' => -1,        // -1 = all posts
                'post_status'    => 'publish', // only published posts
                'orderby'        => 'date',    // optional
                'order'          => 'ASC',    // optional
            );

            $service_query = new WP_Query($args);
            $i = 1;
            if ($service_query->have_posts()) :
                while ($service_query->have_posts()) : $service_query->the_post();

            ?>
                    <div class="col-md-6 col-lg-4">
                        <a href="<?php echo get_permalink(); ?>" class="service-link">
                            <div class="Services-box"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                <div class="sb-serv-img" style="background: url(<?php echo get_field('service_image'); ?>);">
                                    <div class="number-label"><?php echo '0' . $i; ?></div>
                                </div>
                                <div class="sb-serv-content">
                                    <h4><?php echo get_the_title(); ?></h4>
                                    <p class="product-dec">
                                        <?php echo get_field('service_description'); ?>
                                    </p>
                                    <a href="<?php echo get_permalink(); ?>">Learn More <img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg"></a>
                                </div>
                            </div>
                        </a>
                    </div>

            <?php
                    $i++;
                endwhile;
                wp_reset_postdata(); // reset query
            else :
                echo '<p>No services found.</p>';
            endif;
            ?>


        </div>
    </div>
</section>







<?php get_footer(); ?>