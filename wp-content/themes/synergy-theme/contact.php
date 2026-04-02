<?php
/* Template Name: Contact */
get_header();

?>

<!-- SECTION -->
<section class="cx7_contact_wrap">
    <div class="contact-bg">
        <svg width="1920" height="1230" viewBox="0 0 1920 1230" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H1920V1230H0V0Z" fill="url(#paint0_radial_444_5247)" fill-opacity="0.3" />
            <defs>
                <radialGradient id="paint0_radial_444_5247" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                    gradientTransform="translate(1920) scale(2380.35 2080.9)">
                    <stop stop-color="#094C80" />
                    <stop offset="0.5" stop-color="#094C80" stop-opacity="0" />
                    <stop offset="1" stop-color="#094C80" stop-opacity="0" />
                </radialGradient>
            </defs>
        </svg>
    </div>


    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT -->
            <div class="col-lg-6">

                <div class="bg-label d-inline-block">Get in Touch</div>

                <h2 class="x9f2_main_title">
                    <?php echo get_field('contact_heading_1'); ?><br>
                    <span><?php echo get_field('contact_heading_2'); ?></span>
                </h2>

                <p class="cx7_desc mt-3">
                    <?php echo get_field('contact_page_description'); ?>
                </p>

                <div class="cx7_contact_info">
                    <div class="cx7_info_item">
                        <div class="cx7_icon"><svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H18C18.55 0 19.0208 0.195833 19.4125 0.5875C19.8042 0.979167 20 1.45 20 2V14C20 14.55 19.8042 15.0208 19.4125 15.4125C19.0208 15.8042 18.55 16 18 16H2V16M10 9L2 4V14V14V14H18V14V14V4L10 9V9M10 7L18 2H2L10 7V7M2 4V2V2V4V14V14V14V14V14V14V4V4"
                                    fill="#086BB5" />
                            </svg>
                        </div>
                        <div>
                            <strong><?php echo get_field('email_heading'); ?></strong>
                            <p><a href="mailto:<?php echo get_field('contact_form_email', '6'); ?>"><?php echo get_field('contact_form_email', '6'); ?></a></p>
                        </div>
                    </div>

                    <div class="cx7_info_item">
                        <div class="cx7_icon"><svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.95 18C14.8667 18 12.8083 17.5458 10.775 16.6375C8.74167 15.7292 6.89167 14.4417 5.225 12.775C3.55833 11.1083 2.27083 9.25833 1.3625 7.225C0.454167 5.19167 0 3.13333 0 1.05C0 0.75 0.1 0.5 0.3 0.3C0.5 0.1 0.75 0 1.05 0H5.1C5.33333 0 5.54167 0.0791667 5.725 0.2375C5.90833 0.395833 6.01667 0.583333 6.05 0.8L6.7 4.3C6.73333 4.56667 6.725 4.79167 6.675 4.975C6.625 5.15833 6.53333 5.31667 6.4 5.45L3.975 7.9C4.30833 8.51667 4.70417 9.1125 5.1625 9.6875C5.62083 10.2625 6.125 10.8167 6.675 11.35C7.19167 11.8667 7.73333 12.3458 8.3 12.7875C8.86667 13.2292 9.46667 13.6333 10.1 14L12.45 11.65C12.6 11.5 12.7958 11.3875 13.0375 11.3125C13.2792 11.2375 13.5167 11.2167 13.75 11.25L17.2 11.95C17.4333 12.0167 17.625 12.1375 17.775 12.3125C17.925 12.4875 18 12.6833 18 12.9V16.95C18 17.25 17.9 17.5 17.7 17.7C17.5 17.9 17.25 18 16.95 18V18M3.025 6L4.675 4.35V4.35V4.35L4.25 2V2V2H2.025V2V2C2.10833 2.68333 2.225 3.35833 2.375 4.025C2.525 4.69167 2.74167 5.35 3.025 6V6M11.975 14.95C12.625 15.2333 13.2875 15.4583 13.9625 15.625C14.6375 15.7917 15.3167 15.9 16 15.95V15.95V15.95V13.75V13.75V13.75L13.65 13.275V13.275V13.275L11.975 14.95V14.95M3.025 6V6V6V6V6V6V6V6V6V6V6V6V6M11.975 14.95V14.95V14.95V14.95V14.95V14.95V14.95V14.95V14.95V14.95V14.95V14.95V14.95"
                                    fill="#086BB5" />
                            </svg>
                        </div>
                        <div>
                            <strong><?php echo get_field('phone_heading'); ?></strong>
                            <p><a href="tel:<?php echo get_field('contact_phone_number', '6'); ?>"><?php echo get_field('contact_phone_number', '6'); ?></a></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-6">
                <div class="cx7_form_box">

                    <h3 class="mb-4">Inquiry Form</h3>

                    <form class="ajax-contact-form">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Full Name*</label>
                                <input type="text" placeholder="John Doe" class="cx7_input" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Last Name*</label>
                                <input type="text" placeholder="John Doe" class="cx7_input" name="last_name" required>
                            </div>

                            <div class="col-md-6">
                                <label>Email Address*</label>
                                <input type="email" placeholder="john@example.com" class="cx7_input" name="email" required>
                                <small class="error error-email"></small>
                            </div>

                            <div class="col-md-6">
                                <label>Phone Number*</label>
                                <input type="text" placeholder="+1 (555) 000-0000" class="cx7_input" name="phone" required>
                                <small class="error error-phone"></small>
                            </div>

                            <div class="col-md-6">
                                <label>Company*</label>
                                <input type="text" placeholder="Company" class="cx7_input" name="company" required>
                            </div>

                            <div class="col-md-6">
                                <label>Service Interest</label>
                                <select name="service" class="cx7_input" required>
                                    <option>Select a service</option>
                                    
                                    <option value="Mutual Funds">Mutual Funds</option>
                                    <option value="Portfolio Management Services">Portfolio Management Services</option>
                                    <option value="Alternative Investment Funds">Alternative Investment Funds</option>
                                    <option value="Financial Planning">Financial Planning</option>
                                    <option value="Retirement Solutions">Retirement Solutions</option>
                                    <option value="Insurance Advisory">Insurance Advisory</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label>Message*</label>
                                <textarea name="message" placeholder="How can we help you?"
                                    class="cx7_input cx7_textarea" required></textarea>
                            </div>

                            <div class="col-12">
                                <button class="cx7_submit_btn">Submit Inquiry</button>
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