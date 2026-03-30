<?php
/* Template Name: Blog */
get_header();

?>


<section class="b9l_blog_section m-5">
    <div class="container">

        <!-- HEADER -->
        <div class="bg-label d-inline-block">SYNERGY BLOG
        </div>

        <h1 class="b9l_title">
            Dive into articles that spark <br>
            <span>Creativity and drive Innovation.</span>
        </h1>

        <!-- FEATURED -->
        <div class="row g-4 mt-4">

            <!-- BIG -->
            <div class="col-lg-8">
                <div class="b9l_feature_big">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475">
                    <div class="b9l_overlay">
                        <span class="b9l_tag">Technology</span>
                        <h3>The Impact of Technology on the Workplace</h3>
                        <div class="u1a_meta_wrap">

                            <div class="u1a_avatar">
                                <!-- User Icon -->
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                </svg>
                            </div>

                            <span class="u1a_name">Tracey Wilson</span>

                            <span class="u1a_date">August 20, 2022</span>

                        </div>
                    </div>
                </div>
            </div>

            <!-- SIDE -->
            <div class="col-lg-4">
                <div class="b9l_feature_small">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab">
                    <div class="b9l_overlay">
                        <span class="b9l_tag">Technology</span>
                        <h4>How Technology is Changing</h4>
                        <div class="u1a_meta_wrap">

                            <div class="u1a_avatar">
                                <!-- User Icon -->
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                </svg>
                            </div>

                            <span class="u1a_name">Tracey Wilson</span>

                            <span class="u1a_date">August 20, 2022</span>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- GRID -->
        <div class="row mt-5 g-4" style="margin-bottom: 6em;">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <!-- CARD -->
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php the_permalink(); ?>" class="b9l_card">
                            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e">
                            <div class="b9l_card_body">
                                <span class="b9l_tag light">Technology</span>
                                <h5>The Impact of Technology on Workplace</h5>
                                <div class="u1a_meta_wrap">

                                    <div class="u1a_avatar">
                                        <!-- User Icon -->
                                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                        </svg>
                                    </div>

                                    <span class="u1a_name">Tracey Wilson</span>

                                    <span class="u1a_date">August 20, 2022</span>

                                </div>
                            </div>
                        </a>
                    </div>

            <?php endwhile;
            endif; ?>

        </div>

    </div>
</section>


<?php get_footer(); ?>