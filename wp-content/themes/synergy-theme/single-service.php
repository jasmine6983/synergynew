<?php
/* Template Name: Products Detail */
get_header();

?>


<!-- HERO -->
<section class="mf_hero_wrap">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <!-- <div class="bg-label d-inline-block"><?php echo the_title() ?></div> -->

                <h2 class="x9f2_main_title">
                    <!-- <?php echo get_field('heading_part_1'); ?><br> -->
                    <span><?php echo get_field('heading_part_2'); ?></span>


                </h2>
                <p class="x9f2_desc_text mt-3">
                    <?php echo get_field('detail_page_description'); ?>
                </p>

                <div class="x9f2_btn_wrap mt-4">
                    <button  class="explore-more small">
                        <span class="btn-text"><?php echo get_field('detail_page_intro_button_text'); ?></span>
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/arrow-more-circle.svg" alt="">
                    </button>
                </div>
            </div>

            <div class="col-lg-5 mx-auto">
                <img src="<?php echo get_field('intro_section_image'); ?>" class="mf_hero_img">
            </div>

        </div>
    </div>
</section>


<!-- FEATURES -->
<section class="mf_feature_wrap">
    <div class="container text-center">

        <span class="mf_badge light">FEATURES</span>

        <h2 class="mf_section_title" id="features">
            <?php echo get_field('feature_main_heading_part_1'); ?> <br> and <span><?php echo get_field('feature_main_heading_part_2'); ?></span>
        </h2>

        <div class="row mt-5 align-items-center g-4">

            <div class="col-lg-4">
                <div class="mf_card">

                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="54.8971" height="54.8971" rx="13.7243" fill="white" />
                        <path
                            d="M30.2988 34.2991V27.2991H34.2988V34.2991H30.2988V34.2991M24.2988 34.2991V18.2991H28.2988V34.2991H24.2988V34.2991M18.2988 34.2991V23.2991H22.2988V34.2991H18.2988V34.2991"
                            fill="#094C80" />
                    </svg>

                    <h4 class="mf_card_h4"><?php echo get_field('feature_1_heading'); ?></h4>
                    <p class="mf_card_p"><?php echo get_field('feature_1_description'); ?></p>
                </div>
                <div class="mf_card mt-4">

                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="54.8971" height="54.8971" rx="13.7243" fill="white" />
                        <path
                            d="M19.5767 36.0116V31.7116C18.6267 30.8449 17.8892 29.8324 17.3642 28.6741C16.8392 27.5158 16.5767 26.2949 16.5767 25.0116C16.5767 22.5116 17.4517 20.3866 19.2017 18.6366C20.9517 16.8866 23.0767 16.0116 25.5767 16.0116C27.66 16.0116 29.5058 16.6241 31.1142 17.8491C32.7225 19.0741 33.7683 20.6699 34.2517 22.6366L35.5517 27.7616C35.635 28.0783 35.5767 28.3658 35.3767 28.6241C35.1767 28.8824 34.91 29.0116 34.5767 29.0116H32.5767V32.0116C32.5767 32.5616 32.3808 33.0324 31.9892 33.4241C31.5975 33.8158 31.1267 34.0116 30.5767 34.0116H28.5767V36.0116H26.5767V32.0116H30.5767V32.0116V32.0116V27.0116H33.2767L32.3267 23.1366C31.9433 21.6199 31.1267 20.3866 29.8767 19.4366C28.6267 18.4866 27.1933 18.0116 25.5767 18.0116C23.6433 18.0116 21.9933 18.6866 20.6267 20.0366C19.26 21.3866 18.5767 23.0283 18.5767 24.9616C18.5767 25.9616 18.7808 26.9116 19.1892 27.8116C19.5975 28.7116 20.1767 29.5116 20.9267 30.2116L21.5767 30.8116V36.0116H19.5767V36.0116M25.9267 27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116V27.0116M24.5767 29.0116H26.5767L26.7267 27.7616C26.86 27.7116 26.9808 27.6533 27.0892 27.5866C27.1975 27.5199 27.2933 27.4449 27.3767 27.3616L28.5267 27.8616L29.5267 26.1616L28.5267 25.4116C28.56 25.2783 28.5767 25.1449 28.5767 25.0116C28.5767 24.8783 28.56 24.7449 28.5267 24.6116L29.5267 23.8616L28.5267 22.1616L27.3767 22.6616C27.2933 22.5783 27.1975 22.5033 27.0892 22.4366C26.9808 22.3699 26.86 22.3116 26.7267 22.2616L26.5767 21.0116H24.5767L24.4267 22.2616C24.2933 22.3116 24.1725 22.3699 24.0642 22.4366C23.9558 22.5033 23.86 22.5783 23.7767 22.6616L22.6267 22.1616L21.6267 23.8616L22.6267 24.6116C22.5933 24.7449 22.5767 24.8783 22.5767 25.0116C22.5767 25.1449 22.5933 25.2783 22.6267 25.4116L21.6267 26.1616L22.6267 27.8616L23.7767 27.3616C23.86 27.4449 23.9558 27.5199 24.0642 27.5866C24.1725 27.6533 24.2933 27.7116 24.4267 27.7616L24.5767 29.0116V29.0116M25.5767 26.5116C25.16 26.5116 24.8058 26.3658 24.5142 26.0741C24.2225 25.7824 24.0767 25.4283 24.0767 25.0116C24.0767 24.5949 24.2225 24.2408 24.5142 23.9491C24.8058 23.6574 25.16 23.5116 25.5767 23.5116C25.9933 23.5116 26.3475 23.6574 26.6392 23.9491C26.9308 24.2408 27.0767 24.5949 27.0767 25.0116C27.0767 25.4283 26.9308 25.7824 26.6392 26.0741C26.3475 26.3658 25.9933 26.5116 25.5767 26.5116V26.5116"
                            fill="#094C80" />
                    </svg>


                    <h4 class="mf_card_h4"><?php echo get_field('feature_2_heading'); ?></h4>
                    <p class="mf_card_p"><?php echo get_field('feature_2_description'); ?></p>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="<?php echo get_field('feature_image'); ?>" class="mf_center_img">
            </div>

            <div class="col-lg-4">
                <div class="mf_card mt-4">

                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="54.8971" height="54.8971" rx="13.7243" fill="white" />
                        <path
                            d="M26.3987 30.4985L32.0487 24.8485L30.6237 23.4235L26.3987 27.6485L24.2987 25.5485L22.8737 26.9735L26.3987 30.4985V30.4985M27.4487 36.9485C25.1321 36.3652 23.2196 35.036 21.7112 32.961C20.2029 30.886 19.4487 28.5818 19.4487 26.0485V19.9485L27.4487 16.9485L35.4487 19.9485V26.0485C35.4487 28.5818 34.6946 30.886 33.1862 32.961C31.6779 35.036 29.7654 36.3652 27.4487 36.9485V36.9485M27.4487 34.8485C29.1821 34.2985 30.6154 33.1985 31.7487 31.5485C32.8821 29.8985 33.4487 28.0652 33.4487 26.0485V21.3235L27.4487 19.0735L21.4487 21.3235V26.0485C21.4487 28.0652 22.0154 29.8985 23.1487 31.5485C24.2821 33.1985 25.7154 34.2985 27.4487 34.8485V34.8485M27.4487 26.9485V26.9485V26.9485V26.9485V26.9485V26.9485V26.9485V26.9485V26.9485V26.9485"
                            fill="#094C80" />
                    </svg>



                    <h4 class="mf_card_h4"><?php echo get_field('feature_3_heading'); ?></h4>
                    <p class="mf_card_p"><?php echo get_field('feature_3_description'); ?></p>
                </div>
                <div class="mf_card mt-4">

                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="54.8971" height="54.8971" rx="13.7243" fill="white" />
                        <path
                            d="M27.4487 37.4484C25.1321 36.865 23.2196 35.5359 21.7112 33.4609C20.2029 31.3859 19.4487 29.0817 19.4487 26.5484V20.4484L27.4487 17.4484L35.4487 20.4484V26.5484C35.4487 29.0817 34.6946 31.3859 33.1862 33.4609C31.6779 35.5359 29.7654 36.865 27.4487 37.4484V37.4484M27.4487 35.3484C29.0654 34.8484 30.4154 33.8609 31.4987 32.3859C32.5821 30.9109 33.2154 29.265 33.3987 27.4484H27.4487V19.5734L21.4487 21.8234V26.5484C21.4487 26.7317 21.4487 26.8817 21.4487 26.9984C21.4487 27.115 21.4654 27.265 21.4987 27.4484H27.4487V35.3484V35.3484"
                            fill="#094C80" />
                    </svg>




                    <h4 class="mf_card_h4"><?php echo get_field('feature_4_heading'); ?></h4>
                    <p class="mf_card_p"><?php echo get_field('feature_4_description'); ?></p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- BENEFITS -->
<section class="mf_benefit_wrap">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- LEFT -->
            <div class="col-lg-6">

                <img src="<?php echo get_field('benefits_section_image'); ?>" width="100%" />

            </div>

            <!-- RIGHT -->
            <div class="col-lg-6">

                <div class="bg-label d-inline-block">BENEFITS</div>

                <h2 class="x9f2_main_title">
                    <?php echo get_field('benefits_main_heading_part_1'); ?><span><?php echo get_field('benefits_main_heading_part_2'); ?></span>

                    <section class="q2w_benefit_section">
                        <div class="container">

                            <div class="q2w_item">
                                <div class="q2w_number">01</div>
                                <div class="q2w_content">
                                    <h4><?php echo get_field('benefit_1_heading'); ?></h4>
                                    <p>
                                        <?php echo get_field('benefit_1_description'); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="q2w_item">
                                <div class="q2w_number">02</div>
                                <div class="q2w_content">
                                    <h4><?php echo get_field('benefit_2_heading'); ?></h4>
                                    <p>
                                        <?php echo get_field('benefit_2_description'); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="q2w_item">
                                <div class="q2w_number">03</div>
                                <div class="q2w_content">
                                    <h4><?php echo get_field('benefit_3_heading'); ?></h4>
                                    <p>
                                        <?php echo get_field('benefit_3_description'); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="q2w_item">
                                <div class="q2w_number">04</div>
                                <div class="q2w_content">
                                    <h4><?php echo get_field('benefit_4_heading'); ?></h4>
                                    <p>
                                        <?php echo get_field('benefit_4_description'); ?>
                                    </p>
                                </div>
                            </div>



                        </div>
                    </section>

            </div>

        </div>
    </div>
</section>







<?php get_footer(); ?>
<script>
document.querySelectorAll(".explore-more").forEach(function(btn) {
    btn.addEventListener("click", function() {
        document.getElementById("features").scrollIntoView({
            behavior: "smooth"
        });
    });
});
</script>