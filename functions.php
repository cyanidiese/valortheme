<?php


function valor_setup() {

    load_theme_textdomain( 'valor' );


    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );


    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'top'    => __( 'Top Menu', 'valor' ),
        'social' => __( 'Social Links Menu', 'valor' ),
    ) );

    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'valor_setup' );

function valor_scripts() {

    // Theme stylesheet.
    wp_enqueue_style( 'valor-style', get_stylesheet_uri() );


    wp_enqueue_script( 'valor-respsliders', get_theme_file_uri( '/assets/js/responsiveslides.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'valor-scripts', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'valor-customizer', get_theme_file_uri( '/assets/js/theme-customizer.js' ), array( 'jquery','customize-preview' ), '1.0', true );
    wp_enqueue_script( 'valor-main', get_theme_file_uri( '/assets/js/main.js' ), array( 'jquery'), '1.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'valor_scripts' );


class Valor_Customize {
    /**
     * This hooks into 'customize_register' (available as of WP 3.4) and allows
     * you to add new sections and controls to the Theme Customize screen.
     *
     * Note: To enable instant preview, we have to actually write a bit of custom
     * javascript. See live_preview() for more.
     *
     * @see add_action('customize_register',$func)
     * @param \WP_Customize_Manager $wp_customize
     * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
     * @since Valor 1.0
     */
    public static function register ( $wp_customize ) {
        //1. Define a new section (if desired) to the Theme Customizer

        $section_name = "valor_options";

        $wp_customize->add_section( 'valor_options',
            array(
                'title'       => __( 'Valor Options', 'valor' ),
                'priority'    => 35,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize settings for Valor Theme.', 'valor'),
            )
        );

        //Footer BG Color

        $wp_customize->add_setting( 'footer_bg_color',
            array(
                'default'    => '#da2533',
                'type'       => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
            )
        );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'valor_footer_bg_color',
            array(
                'label'      => __( 'Footer Background Color', 'valor' ),
                'settings'   => 'footer_bg_color',
                'priority'   => 10,
                'section'    => $section_name,
            )
        ) );
        $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    }

    public static function header_output() {
        ?>
        <!--Customizer CSS-->
        <style type="text/css">
            <?php self::generate_css('#footer .info', 'background-color', 'footer_bg_color', ''); ?>
        </style>
        <!--/Customizer CSS-->
        <?php
    }

    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
        $return = '';
        $mod = get_theme_mod($mod_name);
        if ( ! empty( $mod ) ) {
            $return = sprintf('%s { %s:%s; }',
                $selector,
                $style,
                $prefix.$mod.$postfix
            );
            if ( $echo ) {
                echo $return;
            }
        }
        return $return;
    }
}

add_action( 'customize_register' , array( 'Valor_Customize' , 'register' ) );
add_action( 'wp_head' , array( 'Valor_Customize' , 'header_output' ) );