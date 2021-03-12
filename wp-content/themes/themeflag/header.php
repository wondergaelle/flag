<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UFT-8">
    <meta name="description" content="<?php bloginfo('flag') ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<div class="header-content d-flex flex-column align-items-start justify-content-around h-100">
    <a href="<?= get_site_url() ?>"><img src="<?= get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="logo sauvages"></a>
    <div class="nav d-flex flex-column">
        <a href="<?= get_site_url() ?>/agence/" class="text-sv-blue nav-link sv-link p-0 my-2">Agence</a>
        <a href="<?= get_site_url() ?>/skills/" class="text-sv-blue nav-link sv-link p-0 my-2">Skills</a>
        <a href="<?= get_site_url() ?>/works/" class="text-sv-blue nav-link sv-link p-0 my-2">Works</a>
        <a href="<?= get_site_url() ?>/contact/" class="text-sv-blue nav-link sv-link p-0 my-2">Contact</a>
    </div>

</div>
