<?php
/*
Template Name: Footer
*/
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-sec-1">
                    <img src="<?php echo get_field('footer_logo','6'); ?>">
                    <p><?php echo get_field('footer_description', '6'); ?></p>

                    <h5><?php echo get_field('social_links_title', '6'); ?></h5>

                    <ul>
                        <li><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/x.png"></li>
                        <li><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/yt.png"></li>
                        <li><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/insta.png"></li>
                        <li><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/web.png"></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-8 offset-md-1">
                <div class="footer-sec-2">
                    <div class="d-flex">
                        <h4 style="
    color: #fff;
"><?php echo get_field('newsletter_title'); ?></h4>
                        <div style="
    width: 500px;
    margin-left: auto;
    position: relative;
">

                            <input type="text" style="
    width: 100%;
    height: 54px;
    border-radius: 12.189px;
    padding-left: 20px;
" placeholder="Enter your email address">
                            <button class="button-sub"><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/plane.svg"></button>
                        </div>
                    </div>




                </div>

                <div class="row quick-link">
                    <div class="col">
                        <h5><?php echo get_field('footer_menu_title', '6'); ?></h5>
                        <ul>

                            <?php

                            $menu_name = 'footer_menu';
                            $locations = get_nav_menu_locations();

                            if (isset($locations[$menu_name])) {
                                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                                $menu_items = wp_get_nav_menu_items($menu->term_id);
                            }
                            foreach ($menu_items as $item) {
                            ?>
                                <li><a href="<?php echo esc_url($item->url); ?>"><?php echo $item->title; ?></a></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <div class="col">
                        <h5>About</h5>
                        <ul>
                            <li>Our Story</li>
                            <li>Our Team</li>
                            <li>Portfolio</li>
                            <li>Career</li>
                            <li>Client Testimonials</li>
                            <li>Security Promise</li>

                        </ul>
                    </div>
                    <div class="col">
                        <h5>Quick Links</h5>
                        <ul>
                            <li>About</li>
                            <li>Live Chat</li>
                            <li>Trading Guide</li>
                            <li>Terms & Conditions</li>
                            <li>Privacy Policy</li>
                            <li>Risk Disclosure</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 senergy. All Rights Reserved</p>
            <p>Privacy Policy | Terms & Condition</p>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>
<script>
    document.getElementById("contactForm").addEventListener("submit", async (e) => {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);
        formData.append('action', 'synergy_contact_form_ajax');

        document.getElementById("formStatus").innerText = "Sending...";

        try {
            const response = await fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
                method: "POST",
                body: formData,
            });

            const result = await response.json();
            if (result.success) {
                document.getElementById("formStatus").innerText = "Message sent successfully!";
                form.reset();
            } else {
                document.getElementById("formStatus").innerText = "Error: " + result.data;
            }
        } catch (err) {
            document.getElementById("formStatus").innerText = "Something went wrong.";
        }
    });
</script>
</body>

</html>