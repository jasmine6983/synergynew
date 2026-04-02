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
            Dive into articles that spark<br>
            <span>Creativity and drive Innovation.</span>
        </h1>

        <!-- FEATURED -->
        <div class="row g-4 mt-4">

            <!-- BIG -->
            <?php
            $featured_post = new WP_Query([
                'post_type'      => 'post',   // blog posts
                'posts_per_page' => 1         // only first/latest post
            ]);

            if ($featured_post->have_posts()) :
                while ($featured_post->have_posts()) : $featured_post->the_post();
            ?>

                    <div class="col-lg-8">
                        <div class="b9l_feature_big">

                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" class="img-fluid">
                            <?php endif; ?>

                            <div class="b9l_overlay">
                                <span class="b9l_tag">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo esc_html($categories[0]->name);
                                    }
                                    ?>
                                </span>

                                <h3><?php the_title(); ?></h3>

                                <div class="u1a_meta_wrap">
                                    <div class="u1a_avatar">
                                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                        </svg>
                                    </div>

                                    <!-- <span class="u1a_name"><?php the_author(); ?></span> -->
                                    <span class="u1a_date"><?php echo get_the_date(); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata(); // IMPORTANT
            endif;
            ?>

            <!-- SIDE -->
            <?php
            $second_post = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 1,
                'offset'         => 1 // skip first post, get second
            ]);

            if ($second_post->have_posts()) :
                while ($second_post->have_posts()) : $second_post->the_post();
            ?>

                    <div class="col-lg-4">
                        <div class="b9l_feature_small">

                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" class="img-fluid">
                            <?php endif; ?>

                            <div class="b9l_overlay">
                                <span class="b9l_tag">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo esc_html($categories[0]->name);
                                    }
                                    ?>
                                </span>

                                <h4><?php the_title(); ?></h4>

                                <div class="u1a_meta_wrap">
                                    <div class="u1a_avatar">
                                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                        </svg>
                                    </div>

                                    <!-- <span class="u1a_name"><?php the_author(); ?></span> -->
                                    <span class="u1a_date"><?php echo get_the_date(); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

        <!-- GRID -->
        <div class="row mt-5 g-4" style="margin-bottom: 6em;">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <!-- CARD -->
                    <div class="col-lg-3 col-md-6 b9l_card">

                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" class="img-fluid">
                            <?php endif; ?>
                        </a>
                        <div class="b9l_card_body">
                            <span class="b9l_tag light"><?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) {
                                                            echo esc_html($categories[0]->name);
                                                        }
                                                        ?></span>
                            <h5> <?php echo get_the_title(); ?></h5>
                            <div class="u1a_meta_wrap">

                                <div class="u1a_avatar">
                                    <!-- User Icon -->
                                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                    </svg>
                                </div>

                                <!-- <span class="u1a_name"><?php the_author(); ?></span> -->

                                <span class="u1a_date"><?php echo get_the_date(); ?></span>

                            </div>
                        </div>

                    </div>

            <?php endwhile;
            endif; ?>

        </div>

    </div>
</section>


<?php get_footer(); ?>