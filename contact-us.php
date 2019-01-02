<?php
/*
  * Template Name: Contact Us
  */

get_header(); ?>
    <div id="content">

        <div id="content_wrap">

            <?php get_template_part("partials/head")?>

            <div id="contacts">

                <div id="contacts_right">
                    <?php echo do_shortcode("[contact-form-7 id='50']");?>
                </div>

                <div id="contacts_left">

                    <div class="contacts_info geo">
                        626 Sheepshead Bay Rd<br>
                        suite #510<br>
                        Brooklyn, NY 11224
                    </div>

                    <div class="contacts_info tel">
                        (718) 484-8122<br>
                        (646) 966-8223
                    </div>

                    <div id="map"></div>

                </div>



            </div>

        </div>

    </div>
<?php get_footer(); ?>