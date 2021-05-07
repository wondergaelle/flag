<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UFT-8">
    <meta name="description" content="<?php bloginfo('flag') ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>

<!--<header class="site__header">

    <ul class="menu">
        <li><img src="<?php /*echo get_template_directory_uri(); */ ?>/img/logo.svg" alt="Logo"></li>
        <li><a href="<?php /*echo home_url( '/' ); */ ?>"></a></li>
        <li><a href="<?php /*echo home_url( '/' ); */ ?>"></a></li>
        <li class="page_item page-item-10"><a href="http://wp.local/blog/">Blog</a></li>
        <li class="page_item page-item-12"><a href="http://wp.local/contact/">Contact</a></li>

    </ul>
</header>-->

<header class="site__header d-flex flex-row align-items-center justify-content-between w-100 py-3 mb-5  bg-white sticky-top">
    <nav class="navbar  container d-flex flex-column flex-md-row navbar-expand-md navbar sticky-top main-navbar w-100">
        <div class="d-flex align-items-center justify-content-between">
            <div class="navbar-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
                   title="<?= esc_attr__('Back to home page', 'flag') ?>"
                   class="logo-link"><img
                            src="<?= get_template_directory_uri() . '/assets/images/logo-flag.png' ?>"
                            alt="<?php bloginfo('name'); ?>" class="navbar-brand-logo"></a>
            </div><!-- .navbar-brand -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
            </button>
        </div>
        <div class="nav-left d-flex justify-content-between flex-fill">
            <div class="collapse navbar-collapse menu flex-row align-items-center justify-content-center"
                 id="navbarNav">
                <ul class="menu navbar-nav justify-content-between">
                   <!-- <a href="<?php /*echo home_url('/'); */?>">
                        <img src="<?php /*echo get_template_directory_uri(); */?>/img/logo.svg" alt="Logo">
                    </a>-->

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main',
                                'container' => 'li flex-fill', // afin d'éviter d'avoir une div autour
                                'menu_class' => 'site__header__menu', // ma classe personnalisée
                                'container_class' => 'main-menu-wrapper mx-auto ml-md-auto mr-md-0',
                                'menu_class' => 'navbar-nav main-menu',
                                'link_class' => 'nav-link menu-item nav-active flex-fill',
                            )
                        );
                        ?>

                </ul>
            </div>
        </div>
    </nav>
</header>


