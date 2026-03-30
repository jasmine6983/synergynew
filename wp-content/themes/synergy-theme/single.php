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
            <span><?php the_author(); ?></span>
            <span class="x7b_date"><?php echo get_the_date(); ?></span>
        </div>

        <!-- IMAGE -->
        <div class="x7b_img_wrap">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475">
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