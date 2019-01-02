<?php get_header(); ?>
    <div id="content">

        <div id="content_wrap">

            <?php get_template_part("partials/head")?>

            <div id="content_inner">
                <?php
                $image_url = get_the_post_thumbnail_url(get_the_ID());
                if ($image_url) {
                    ?>
                    <img class="thumb-image"
                         src="<?php echo $image_url; ?>"
                         alt="<?php echo esc_attr(get_the_title()); ?>"/>
                <?php } ?>
                <div class="text-content">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

    </div>
<?php get_footer(); ?>