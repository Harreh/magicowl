<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="home">
 *
 * @subpackage Best
 * @since Best 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-65044265-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">
            <div id="best_header">
                <div class="best-head">
                    <?php $header_image = get_header_image();
                    if (!empty($header_image)): ?>
                        <img src="<?php echo esc_url( $header_image ); ?>" class="best-custom-img-header" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                    <?php endif; ?>
                    <header class="best-logo">
                        <h1 class='best-site-title'><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                        <p class='best-site-title'><?php bloginfo( 'description' ); ?></p>
                    </header>
                    <h1 id="best-menu-button" class="best-menu-toggle"><i class="fa fa-bars fa-lg">&nbsp;</i><?php _e( 'Menu', 'best' ); ?></h1>
                    <div class="best-clear"></div>
                </div>
            </div>
            <nav class="best-nav best-main-navigation">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </nav>
            <div id="home">
