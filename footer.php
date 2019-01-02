
<div id="footer">
    <div class="info">
        <div class="contacts">
            <ul>
                <li>
                    <a href="/en/contacts"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/location.png"
                                alt=""/></a>
                    <p><span>626 Sheepshead Bay Rd<br>
                        suite #510<br>
                        Brooklyn, NY 11224</span></p>
                </li>
                <li>
                    <a href="mailto:info@valorcleanings.com">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/mail.png" alt=""/></a>
                    <p><span>info@valorcleanings.com</span></p>
                </li>
                <li>
                    <a href="tel:+17184848122"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/tel.png"
                                alt=""/></a>
                    <p><span>+1 (646) 966-8223 </span></p>
                </li>
            </ul>
        </div>
        <div class="add_info">
            <div class="question_caption">Have a question?<br>Ask a specialist</div>
            <div class="tel_caption">+1 (718) 484-8122<br>+1 (646) 966-8223</div>
            <div class="time_caption">24 hours<br>7 days a week</div>
        </div>
    </div>
    <div id="footer_bottom">
<!--        <ul class="social">-->
<!--            <li><a class="in" target="_blank" href="https://www.linkedin.com/in/valor-consulting/"></a></li>-->
<!--            <li><a class="fb" target="_blank" href="https://www.facebook.com/nycvalor/ "></a></li>-->
<!--            <li><a class="tw" target="_blank" href="https://twitter.com/ValorSecInv"></a></li>-->
<!--            <li><a class="inst" target="_blank" href="https://www.instagram.com/valorservice/"></a></li>-->
<!--            <li><a class="yt" target="_blank" href="https://www.youtube.com/channel/UCl4P7PjRvnXDLjeqlE6YAsA"></a>-->
<!--            </li>-->
<!--        </ul>-->
        <div class="copyrights">© <?php echo date("Y");?>  valor cleanings inc.<br>
            626 Sheapshead bay road brooklyn, new york 11224<br>
            SIGN UP and RECEIVE free promo offers
        </div>
    </div>
    <a class="to_top_btn" href="/"></a>
</div>
</div>

<script type="text/javascript">
    function initMap() {

        var uluru = {lat: 40.578999, lng: -73.975379};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaW3OlBEWcT35fItrkphXlm-6RxwwLkNg&callback=initMap" async
        defer></script>

<?php wp_footer(); ?>

</body>
