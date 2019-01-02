jQuery(function(){

    jQuery('#clean_btn').click(function(e){

        e.preventDefault();

        jQuery('.wpcf7-form').trigger("reset");
    });

    jQuery('.to_top_btn').click(function(e){

        e.preventDefault();

        jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
    });

    var get_time = function() {

        var timeInNY = moment().tz('America/New_York').format('H:mm');

        jQuery('#current_time').html(timeInNY);

        setTimeout(get_time, 5000);
    };

    jQuery('#mobile_menu_btn').click(function(e){

        e.preventDefault();
        e.stopPropagation();

        if (!jQuery(this).hasClass('open')) {
            jQuery(this).addClass('open');
            jQuery('#head_menu').show();
        } else {
            jQuery(this).removeClass('open');
            jQuery('#head_menu').hide();
        }

    });

    get_time();

    if (jQuery("#slider").length > 0) {



        jQuery("#slider").responsiveSlides({
            auto: true,
            //pager: true,
            nav: true,
            speed: 3000,
            maxwidth: 5000,
            timeout: 4000,
            namespace: "centered-btns"
        });

    }

});