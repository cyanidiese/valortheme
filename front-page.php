<?php get_header(); ?>

    <div id="header_bg">
        <div class="rslides_container">
            <ul class="rslides" id="slider">
                <li></li>
                <li></li>
            </ul>
        </div>
        <div id="current_time_wrap">
            <div id="time_caption">Current Time in New York</div>
            <div id="current_time"></div>
        </div>
    </div>

    <div id="content">


        <div class="links_section top">
            <ul>
                <?php
                $pages = [
                        57 => "Offices",
                        54 => "Commercial",
                        41 => "Post-construction"
                ];
                foreach ($pages as $page_id => $title){
                    $image_url = get_the_post_thumbnail_url($page_id);
                ?>
                <li>
                    <a href="<?php echo get_permalink($page_id);?>">
                        <?php if($image_url){?>
                        <img class="thumb-image"
                                src="<?php echo $image_url; ?>"
                                alt="<?php echo esc_attr($title);?>"/>
                        <?php }?>
                    </a>
                    <div class="text_caption"><span><?php echo esc_html($title);?></span></div>
                    <a class="more_btn" href="<?php echo get_permalink($page_id);?>">more</a>
                </li>
                    <?php }?>

            </ul>

        </div>


    </div>

    <div class="main-blocks-info">
        <?php while(have_posts()):the_post();?>
        <?php the_content();?>
        <?php endwhile;?>
    </div>

<?php get_footer(); ?>