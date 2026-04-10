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
                    <img src="<?php echo get_field('footer_logo', '6'); ?>">
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
" class="newsletter-box">

                            <input type="text" style="
    width: 100%;
    height: 54px;
    border-radius: 12.189px;
    padding-left: 20px;
" placeholder="Enter your email address" class="newsletter-email">
                            <button class="button-sub"><img src="<?php echo get_site_url(); ?>/wp-content/themes/synergy-theme/assets/img/plane.svg"></button>
                            <span class="newsletter-msg" style="position: absolute;
    width: auto;
    left: 5px;
    bottom: -15px;"></span>
                        </div>
                    </div>




                </div>

                <div class="row quick-link">
                    <div class="col">
                        <h5><?php echo get_field('footer_menu_title', '6'); ?></h5>
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
            <p>© 2026 Synergy. All Rights Reserved</p>
            <p>Privacy Policy | Terms & Conditions</p>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>
<script>
   document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll(".ajax-contact-form").forEach((form) => {

        const firstName = form.querySelector("[name='first_name']");
        const lastName = form.querySelector("[name='last_name']");
        const email = form.querySelector("[name='email']");
        const phone = form.querySelector("[name='phone']");

        const firstNameError = form.querySelector(".error-first-name");
        const lastNameError = form.querySelector(".error-last-name");
        const emailError = form.querySelector(".error-email");
        const phoneError = form.querySelector(".error-phone");

        const statusEl = form.querySelector(".formStatus");

        const namePattern = /^[A-Za-z][A-Za-z\s'-]*$/;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        const phonePattern = /^\d{8,12}$/;

        /* ================= LIVE VALIDATION ================= */

        // First Name
        firstName?.addEventListener("input", function () {
            firstNameError.textContent = "";
            firstName.classList.remove("is-invalid");

            if (firstName.value && !namePattern.test(firstName.value.trim())) {
                firstNameError.textContent = "Must contain only letters";
                firstName.classList.add("is-invalid");
            }
        });

        // Last Name
        lastName?.addEventListener("input", function () {
            lastNameError.textContent = "";
            lastName.classList.remove("is-invalid");

            if (lastName.value && !namePattern.test(lastName.value.trim())) {
                lastNameError.textContent = "Must contain only letters";
                lastName.classList.add("is-invalid");
            }
        });

        // Email
        email?.addEventListener("input", function () {
            emailError.textContent = "";
            email.classList.remove("is-invalid");

            if (email.value && !emailPattern.test(email.value.trim())) {
                emailError.textContent = "Invalid email format";
                email.classList.add("is-invalid");
            }
        });

        // Phone
        phone?.addEventListener("input", function () {
            phone.value = phone.value.replace(/\D/g, '').slice(0, 12);

            phoneError.textContent = "";
            phone.classList.remove("is-invalid");

            if (phone.value.length > 0 && phone.value.length < 8) {
                phoneError.textContent = "Phone must be at least 8 digits";
                phone.classList.add("is-invalid");
            }
        });

        /* ================= SUBMIT HANDLER ================= */

        form.addEventListener("submit", async (e) => {
            e.preventDefault();

            let isValid = true;

            // Reset status
            if (statusEl) statusEl.innerText = "";

            /* -------- FIRST NAME -------- */
            if (firstName) {
                firstNameError.textContent = "";
                firstName.classList.remove("is-invalid");

                if (!namePattern.test(firstName.value.trim())) {
                    firstNameError.textContent = "Name should start with a letter";
                    firstName.classList.add("is-invalid");
                    isValid = false;
                }
            }

            /* -------- LAST NAME -------- */
            if (lastName) {
                lastNameError.textContent = "";
                lastName.classList.remove("is-invalid");

                if (!namePattern.test(lastName.value.trim())) {
                    lastNameError.textContent = "Name should start with a letter";
                    lastName.classList.add("is-invalid");
                    isValid = false;
                }
            }

            /* -------- EMAIL -------- */
            if (email) {
                emailError.textContent = "";
                email.classList.remove("is-invalid");

                if (!emailPattern.test(email.value.trim())) {
                    emailError.textContent = "Enter a valid email address";
                    email.classList.add("is-invalid");
                    isValid = false;
                }
            }

            /* -------- PHONE -------- */
            if (phone) {
                phone.value = phone.value.replace(/\D/g, '').slice(0, 12);

                phoneError.textContent = "";
                phone.classList.remove("is-invalid");

                if (!phonePattern.test(phone.value)) {
                    phoneError.textContent = "Phone must be 8–12 digits";
                    phone.classList.add("is-invalid");
                    isValid = false;
                }
            }

            /* -------- STOP IF INVALID -------- */
            if (!isValid) {
                if (statusEl) statusEl.innerText = "Please fix errors before submitting";
                return;
            }

            /* -------- AJAX SUBMIT -------- */
            const formData = new FormData(form);
            formData.append('action', 'synergy_contact_form_ajax');

            if (statusEl) statusEl.innerText = "Sending...";

            try {
                const response = await fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
                    method: "POST",
                    body: formData,
                });

                const result = await response.json();

                if (result.success) {
                    if (statusEl) statusEl.innerText = "Message sent successfully!";
                    form.reset();
                } else {
                    if (statusEl) statusEl.innerText = "Error: " + result.data;
                }

            } catch (err) {
                if (statusEl) statusEl.innerText = "Something went wrong.";
            }
        });

    });

});

    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll(".k8x_tab_item");
        const items = document.querySelectorAll(".service-item");

        tabs.forEach(tab => {
            tab.addEventListener("click", function() {

                // Active tab switch
                tabs.forEach(t => t.classList.remove("k8x_active_tab"));
                this.classList.add("k8x_active_tab");

                const category = this.getAttribute("data-category");

                items.forEach(item => {
                    const itemCategory = item.getAttribute("data-category");

                    if (category === "all" || itemCategory === category) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });

            });
        });
    });
</script>


</body>

</html>