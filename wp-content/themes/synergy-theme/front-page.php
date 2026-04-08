<?php
/* Template Name: Home */
get_header();

?>



<section id="home" class="banner pad-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-6">
                <div class="banner-txt">
                    <div class="banner-txt-inner">
                        <?php
                        $banner = get_field('banner');

                        if ($banner) {
                            // Access sub fields
                            $caption_1   = $banner['caption_1'];
                            $caption_2   = $banner['caption_2'];
                            $caption_3 = $banner['caption_3'];
                            $caption_4 = $banner['caption_4'];
                            $banner_description_part_1 = $banner['banner_description_part_1'];
                            $banner_description_part_2 = $banner['banner_description_part_2'];
                            $banner_hidden_content = $banner['banner_hidden_content'];
                            $banner_button_text = $banner['banner_button_text'];
                            $banner_count_1 = $banner['banner_count_1'];
                            $banner_count_1_text = $banner['banner_count_1_text'];
                            $banner_count_2 = $banner['banner_count_2'];
                            $banner_count_2_text = $banner['banner_count_2_text'];
                            $banner_image = $banner['banner_image'];
                        }
                        ?>
                        <h1 id="hero-title">
                            <span class="ai-span"><?php echo esc_html($caption_1); ?></span>
                            <?php echo esc_html($caption_2); ?>
                            <br><span style="color: #094C80;"><?php echo esc_html($caption_3); ?></span>
                            <?php echo ' ' . esc_html($caption_4); ?>
                        </h1>

                        <div class="action-wrap">
                            <p>
                                <?php echo esc_html($banner_description_part_1); ?>
                                <br>
                                <?php echo esc_html($banner_description_part_2); ?><br>
                                <span class="hide-show"><?php echo esc_html($banner_hidden_content); ?></span>
                            </p>

                            <button id="banner-explore-more" class="explore-more">
                                <span class="btn-text"><?php echo esc_html($banner_button_text); ?></span>
                                <img src="<?php echo esc_url(get_site_url()); ?>/wp-content/themes/synergy-theme/assets/img/arrow-more-circle.svg" alt="Arrow Icon" />
                            </button>




                        </div>


                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-lg-5 offset-lg-1 col-6">
                <div style="background-image: url('<?php echo esc_url($banner_image); ?>');" class="banner-img">
                    <!-- <img id="hand-img" src="<?php echo $banner_image; ?>" />
                    <div class="box exp-box" style="
    top: 45px;
    left: 30px;
">

                        <h2 style="
    margin-top: 60px;
    color: #65BCFF;
    font-size: 81px;
    font-family: 'Poppins';
    font-weight: 600;
    margin-bottom: 0px;
"> <span class="odometer" data-count="<?php echo $banner_count_1; ?>">00</span>+</h2>
                        <p style="
    color: #fff;
    font-family: 'Poppins';
    font-size: 18px;
"><?php echo $banner_count_1_text; ?></p>
                    </div>
                    <div class="box cli-box" style="
      bottom: 30px;
    right: 30px;
">

                        <h2 style="
    margin-top: 70px;
    color: #65BCFF;
    font-size: 81px;
    font-family: 'Poppins';
    font-weight: 600;
    margin-bottom: 0px;
    text-align: right;
"><span class="odometer" data-count="<?php echo $banner_count_2; ?>">00</span>K+</h2>
                        <p style="
    color: #fff;
    font-family: 'Poppins';
    font-size: 18px;
     text-align: right;
"><?php echo $banner_count_2_text; ?></p>
                    </div> -->
                </div>
            </div>
        </div>

</section>




<section id="about" class="about-us pad-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-6">
                <label class="bg-label">About US</label>
                <?php
                $about = get_field('about'); // group field

                // Captions
                $caption_1 = $about['caption_1'] ?? 'no data';
                $caption_2 = $about['caption_2'] ?? 'no data';
                $caption_3 = $about['caption_3'] ?? 'no data';



                // Descriptions
                $description_1 = $about['description_1'] ?? 'no data';
                $description_2 = $about['description_2'] ?? 'no data';

                // Features
                $feature_1_title       = $about['feature_1_title'] ?? 'no data';
                $feature_1_description = $about['feature_1_description'] ?? 'no data';
                $feature_1_icon        = $about['feature_1_icon'] ?? null;

                $feature_2_title       = $about['feature_2_title_copy'] ?? 'no data';
                $feature_2_description = $about['feature_2_description'] ?? 'no data';
                $feature_2_icon        = $about['feature_2_icon'] ?? null;

                $feature_3_title       = $about['feature_3_title'] ?? 'no data';
                $feature_3_description = $about['feature_3_description'] ?? 'no data';
                $feature_3_icon        = $about['feature_3_icon'] ?? null;

                //Right
                $about_right_caption_1 = $about['about_right_caption_1'];
                $about_right_caption_2 = $about['about_right_caption_2'];
                $about_right_image = $about['about_right_image'];
                $mobile_visible_about = $about['mobile_visible_about'];
                ?>

                <h1><?php echo $caption_1; ?> <span><?php echo $caption_2; ?></span> <?php echo $caption_3; ?> </h1>
                <p> <?php echo $description_1; ?></p>

                <p> <?php echo $description_2; ?> </p>
                <!-- mobile hidden   -->

                <div class="mobile-hidden-about">
                    <div class="d-flex about-us-op">
                        <div><img src="<?php echo $feature_1_icon; ?>"></div>
                        <div>
                            <h4><?php echo $feature_1_title; ?></h4>
                            <p><?php echo $feature_1_description; ?></p>
                        </div>
                    </div>

                    <div class="d-flex about-us-op">
                        <div><img src="<?php echo $feature_2_icon; ?>"></div>
                        <div>
                            <h4><?php echo $feature_2_title; ?></h4>
                            <p><?php echo $feature_2_description; ?></p>
                        </div>
                    </div>
                    <div class="d-flex about-us-op">
                        <div><img src="<?php echo $feature_3_icon; ?>"></div>
                        <div>
                            <h4><?php echo $feature_3_title; ?></h4>
                            <p><?php echo $feature_3_description; ?></p>
                        </div>
                    </div>
                </div>
                <!-- mobile hidden   -->
            </div>
            <div class="col-md-5 offset-md-1 col-6">
                <div class="about-us-right-box">
                    <div class="aboutus-pop-note"><?php echo $about_right_caption_1; ?> <img style="margin-left: 5px;" src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/Check Mark.png" /></div>
                    <div class="aboutus-pop-note" style="bottom: 60px;"><?php echo $about_right_caption_2; ?> <img style="margin-left: 5px;" src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/Check Mark.png" /></div>
                    <!-- <img src="<?php echo $about_right_image; ?>" width="100%" /> -->
                </div>

            </div>
        </div>
        <!-- mobile visible  -->
        <div class="mobile-visible-about">
            <div class="mob-view-about-atc-head">

                <p><?php echo $mobile_visible_about; ?></p>
            </div>
            <div class="d-flex about-us-op">
                <div><img src="<?php echo $feature_1_icon; ?>"></div>
                <div>
                    <h4><?php echo $feature_1_title; ?></h4>
                    <p><?php echo $feature_1_description; ?></p>
                </div>
            </div>
            <div class="d-flex about-us-op">
                <div><img src="<?php echo $feature_2_icon; ?>"></div>
                <div>
                    <h4><?php echo $feature_2_title; ?></h4>
                    <p><?php echo $feature_2_description; ?></p>
                </div>
            </div>
            <div class="d-flex about-us-op">
                <div><img src="<?php echo $feature_3_icon; ?>"></div>
                <div>
                    <h4><?php echo $feature_3_title; ?></h4>
                    <p><?php echo $feature_3_description; ?></p>
                </div>
            </div>
        </div>
        <!-- mobile visible   -->
    </div>
</section>

<section id="products" class="our-services pad-sec">
    <div class="container">
        <div class="row">
            <?php

            $services = get_field('services');

            if ($services) {
                $service_caption_1   = $services['service_caption_1'] ?? 'no data';
                $service_caption_2   = $services['service_caption_2'] ?? 'no data';
                $service_caption_3   = $services['service_caption_3'] ?? 'no data';
                $button_text = $services['button_text'] ?? 'no data';
            }
            ?>

            <div class="d-flex head-flex">
                <div>
                    <label class="bg-label">Our Products</label>
                    <h1><?php echo $service_caption_1; ?> <br><?php echo $service_caption_2; ?> <span><?php echo $service_caption_3; ?></span></h1>
                </div>

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
                        <div class="Services-box">
                            <div class="sb-serv-img" style="background: url(<?php echo get_field('service_image'); ?>);">
                                <!-- <div class="number-label"><?php echo '0' . $i; ?></div> -->
                            </div>
                            <div class="sb-serv-content">
                                <h4><?php echo get_the_title(); ?></h4>
                                <p class="product-dec"><?php echo get_field('service_description'); ?> </p>
                                <a href="#" class="learn-more" data-site-url="<?php echo esc_url(get_site_url()); ?>"> Learn More <img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg" /></a>
                            </div>





                        </div>
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

<!-- our services mobile -->

<div id="products-mobile" class="our-services-mobile">
    <label class="bg-label">Our Products</label>
    <h1><?php echo $service_caption_1; ?><br><?php echo $service_caption_2; ?> <span><?php echo $service_caption_3; ?></span></h1>
    <!-- Swiper Container -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            $service_query = new WP_Query($args);
            $i = 1;
            if ($service_query->have_posts()) :
                while ($service_query->have_posts()) : $service_query->the_post();

            ?>

                    <!-- Each Slide -->
                    <div class="swiper-slide">
                        <div class="Services-box">
                            <div class="sb-serv-img" style="background: url(<?php echo get_field('service_image'); ?>">
                                <!-- <div class="number-label"><?php echo '0' . $i; ?></div> -->
                            </div>
                            <div class="sb-serv-content">
                                <h4><?php echo get_the_title(); ?></h4>

                                <p class="product-dec"><?php echo get_field('service_description'); ?></p>
                                <a href="#" class="learn-more" data-site-url="<?php echo esc_url(get_site_url()); ?>">Learn More <img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg" /></a>



                            </div>
                        </div>

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


        <!-- Pagination Dots -->
        <div class="swiper-pagination"></div>
    </div>

</div>

<!-- our services mobile -->


<?php

$ai = get_field('ai');

if ($ai) {

    $caption_1   = $ai['caption_1'] ?? 'no data';
    $caption_2   = $ai['caption_2'] ?? 'no data';
    $caption_3   = $ai['caption_3'] ?? 'no data';


    $description_1 = $ai['description_1'] ?? 'no data';
    $description_2 = $ai['description_2'] ?? 'no data';
}
?>


<section id="ai" class="elementor-element elementor-element-f50548c e-con-full e-flex e-con e-parent" data-id="f50548c"
    data-element_type="container">
    <div class="container">
        <div class="elementor-element elementor-element-5e6fbaa e-con-full tj-sticky-panel-3-container e-flex e-con e-child"
            data-id="5e6fbaa" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-a98450b e-flex e-con-boxed e-con e-child" data-id="a98450b"
                data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d1fd51a e-con-full tj-sticky-panel-3 e-flex e-con e-child"
                        data-id="d1fd51a" data-element_type="container">
                        <div class="elementor-element elementor-element-68e3022 elementor-widget elementor-widget-tj-title"
                            data-id="68e3022" data-element_type="widget" data-widget_type="tj-title.default">
                            <div class="elementor-widget-container">

                                <div class="sec-heading style-3">

                                    <label class="bg-label white">AI Strategies</label>
                                    <h1><?php echo $caption_1; ?><span class="ai-span"> <?php echo $caption_2; ?></span> <?php echo $caption_3; ?></h1>
                                    <p> <?php echo $description_1; ?></p>
                                    <p><?php echo $description_2; ?>  </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="elementor-element elementor-element-a9048a5 e-con-full e-flex e-con e-child"
                        data-id="a9048a5" data-element_type="container">
                        <div class="elementor-element elementor-element-f811ade elementor-widget elementor-widget-tj-process"
                            data-id="f811ade" data-element_type="widget" data-widget_type="tj-process.default">
                            <div class="elementor-widget-container">


                                <div class="h10-process-wrapper">
                                    <?php
                                    $i = 1;
                                    $strategy_args = array(
                                        'post_type'      => 'ai-strategy', // your custom post type
                                        'posts_per_page' => -1,        // -1 = all posts
                                        'post_status'    => 'publish', // only published posts
                                        'orderby'        => 'date',    // optional
                                        'order'          => 'ASC',    // optional
                                    );

                                    $ai_strategy_query = new WP_Query($strategy_args);

                                    if ($ai_strategy_query->have_posts()) :
                                        while ($ai_strategy_query->have_posts()) : $ai_strategy_query->the_post();

                                    ?>

                                            <div class="h10-process-item tj-sticky-panel-3 tj-el-process">
                                                <div class="number-label"><?php echo '0' . $i; ?></div>
                                                <div class="h10-process-icon tj-el-icon">
                                                    <img src="<?php echo get_field('icon'); ?>" />
                                                </div>
                                                <div class="h10-process-content">
                                                    <h4 class="title tj-el-title"><?php echo get_the_title(); ?></h4>
                                                    <p class="desc tj-el-desc"><?php echo get_field('description'); ?> </p>
                                                </div>
                                            </div>

                                    <?php
                                            $i++;
                                        endwhile;
                                        wp_reset_postdata(); // reset query
                                    else :
                                        echo '<p>No AI strategies found.</p>';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Strategies mobile -->

<div id="ai-mobile" class="ai-Strategies-mobile">

    <label class="bg-label white">AI Strategies</label>
    <h1><?php echo $caption_1; ?><span class="ai-span"> <?php echo $caption_2; ?></span> <?php echo $caption_3; ?> </h1>
    <p class="points"><?php echo $description_1; ?> </p>
    <p class="points"><?php echo $description_2; ?>  </p>


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            $i = 1;
            $ai_strategy_query = new WP_Query($strategy_args);

            if ($ai_strategy_query->have_posts()) :
                while ($ai_strategy_query->have_posts()) : $ai_strategy_query->the_post();

            ?>
                    <!-- Each Slide -->
                    <div class="swiper-slide">
                        <div class="process-box">
                            <div class="number-label"><?php echo '0' . $i; ?></div>
                            <div class="h10-process-icon tj-el-icon">
                                <img src="<?php echo get_field('icon'); ?>" />
                            </div>
                            <div class="h10-process-content">
                                <h4 class="title tj-el-title"> <?php echo get_the_title(); ?></h4>
                                <p class="desc tj-el-desc"><?php echo get_field('description'); ?> </p>
                            </div>
                        </div>
                    </div>
            <?php
                    $i++;
                endwhile;
                wp_reset_postdata(); // reset query
            else :
                echo '<p>No AI strategies found.</p>';
            endif;
            ?>



        </div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination"></div>
    </div>
</div>


<!-- AI Strategies mobile -->

<section id="contact" class="contect-form pad-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div class="form-wrap">
                    <h2>Connect With Us</h2>
                    <p>
                        Hey! Connect us with
                        <span>
                            <a href="tel:<?php echo get_field('contact_phone_number'); ?>">
                                <?php echo get_field('contact_phone_number'); ?>
                            </a>
                        </span>
                        or email us through
                        <span>
                            <a href="mailto:<?php echo get_field('contact_form_email'); ?>">
                                <?php echo get_field('contact_form_email'); ?>
                            </a>
                        </span>
                        <br>
                        or fill the following form. We will contact you back within 12 hours or prior.
                    </p>
                    <form class="ajax-contact-form">


                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="first_name" placeholder="First Name*" class="form-control" required />
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="last_name" placeholder="Last Name*" class="form-control" required />
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address*" class="form-control" required />
                                    <small class="error error-email"></small>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Phone Number*" class="form-control" required>
                                    <small class="error error-phone"></small>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="company" placeholder="Company*" class="form-control" required />
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <select name="service" class="form-control" required>
                                        <option value="">Choose Services*</option>
                                        <option value="Mutual Funds">Mutual Funds</option>
                                        <option value="Portfolio Management Services">Portfolio Management Services</option>
                                        <option value="Alternative Investment Funds">Alternative Investment Funds</option>
                                        <option value="Financial Planning">Financial Planning</option>
                                        <option value="Retirement Solutions">Retirement Solutions</option>
                                        <option value="Insurance Advisory">Insurance Advisory</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Additional Message*" required></textarea>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="form-submit">
                                    SUBMIT
                                    <img style="vertical-align: baseline; margin-left: 5px;" src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/arrow-submit.svg" />
                                </button>
                            </div>
                        </div>
                        <div class="formStatus"></div>

                    </form>




                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>