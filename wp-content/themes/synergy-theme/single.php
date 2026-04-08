<?php
/* Template Name: Blog Detail */
get_header();

?>



<section class="x7b_blog_detail">

    <div class="container">

        <!-- CATEGORY -->
        <span class="x7b_tag"><?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?></span>

        <!-- TITLE -->
        <h1 class="x7b_title">
            <?php echo get_the_title(); ?>
        </h1>

        <!-- META -->
        <div class="x7b_meta">
            <div class="x7b_avatar">👤</div>
            <!-- <span><?php the_author(); ?></span> -->
            <span class="x7b_date"><?php echo get_the_date(); ?></span>
        </div>

        <!-- IMAGE -->
        <div class="x7b_img_wrap">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" alt="">
            <?php endif; ?>
        </div>

        <!-- CONTENT -->
        <div class="x7b_content">
            <p>
                <?php the_content(); ?>
            </p>

        </div>

    </div>

</section>

<?php get_footer(); ?>