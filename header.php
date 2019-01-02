<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <meta http-equiv="description" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri() ?>/assets/fonts/fonts.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri() ?>/assets/css/responsiveslides.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri() ?>/assets/css/slider_theme.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic" rel="stylesheet">-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone-with-data.min.js"></script>

    <title><?php wp_title(); ?></title>
    <meta charset="utf-8"/>
    <base href="<?php echo get_home_url()?>"/>

    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/responsive.css"/>

</head>
<body class="index option_com_content view_com_content layout_">
<div id="wrapper">
    <div id="header">
        <div class="menu-container">
        <?php wp_nav_menu( array(
            'menu'            => 'main-menu',
            'container'       => null,
            'menu_id'         => 'head_menu',
        ) );?>
        </div>
    </div>