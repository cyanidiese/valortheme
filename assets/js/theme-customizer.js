( function( $ ) {
    wp.customize( 'footer_bg_color', function( value ) {
        value.bind( function( newval ) {
            $('#footer .info').css('background-color', newval );
        } );
    } );

    wp.customize( 'footer_bg_image', function( value ) {
        value.bind( function( to ) {
            console.log(to);
            var elem = $( '#footer .contacts' );
            0 === $.trim( to ).length ?
                elem.css( 'background-image', 'url(/wp-content/themes/valor/assets/images/footer_bg.jpg)' ) :
                elem.css( 'background-image', 'url( ' + to + ')' );

        });
    });

} )( jQuery );