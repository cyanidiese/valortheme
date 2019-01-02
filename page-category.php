<?php
/*
  * Template Name: Services Category
  */
get_header(); ?>
    <div id="content">

        <div id="content_wrap">

            <?php get_template_part("partials/head") ?>

            <?php

            $args = array(
                'sort_order' => 'asc',
                'sort_column' => 'menu_order',
                'child_of' => get_the_ID(),
                'post_type' => 'page',
                'post_status' => 'publish'
            );
            $pages = get_pages($args);

            ?>
            <div id="content_inner" class="cat_content">
                <?php
                if (!empty($pages)) {
                    foreach (array_chunk($pages, 4) as $i => $chunk_item) {
                        ?>
                        <div class="subcats">
                            <ul class="links_section <?php echo ($i % 2) ? "cat_even_wrap" : ""; ?>">
                                <?php foreach ($chunk_item as $page_item) {
                                    $image_url = get_the_post_thumbnail_url($page_item->ID);
                                    ?>
                                    <li>
                                        <a href="<?php echo get_permalink($page_item->ID); ?>">
                                            <?php if ($image_url) { ?>
                                                <img class="thumb-image"
                                                     src="<?php echo $image_url; ?>"
                                                     alt="<?php echo esc_attr(get_the_title($page_item->ID)); ?>"/>
                                            <?php } ?>
                                        </a>
                                        <div class="text_caption">
                                            <span><?php echo esc_html(get_the_title($page_item->ID)); ?></span></div>
                                        <a class="more_btn" href="<?php echo get_permalink($page_item->ID); ?>">more</a>
                                    </li>
                                <?php } ?>
                            </ul>

                        </div>
                    <?php } ?>
                <?php } ?>

            </div>

        </div>

    </div>
<?php get_footer(); ?>