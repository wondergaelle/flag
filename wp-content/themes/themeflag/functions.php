<?php

function addThemeFiles()
{
    $css_directory = get_template_directory_uri() . '/assets/css/';
    wp_enqueue_style('style', $css_directory . 'style.css');

    $js_directory = get_template_directory_uri() . '/assets/js/';
    wp_enqueue_script('jquery', $js_directory . 'jquery-3.2.1.min.js');
    wp_enqueue_script('typewriter-js', 'https://unpkg.com/typewriter-effect@latest/dist/core.js', 'jquery');
    wp_enqueue_script('home-js', get_template_directory_uri() . '/assets/js/home.js', ['jquery', 'typewriter-js']);

    wp_enqueue_script('main', $js_directory . 'main.js', 'jquery');

}

add_action('wp_enqueue_scripts', 'addThemeFiles');

/**
 * Theme configuration
 */
add_action('init', function () {
    //add_action('wp_enqueue_scripts', 'load_my_files');

    // Document title
    add_theme_support('title-tag');

    // Post thumbnails
    add_theme_support('post-thumbnails');

    // Navigations
    register_nav_menus(array(
        'main' => 'Menu Principal',
        'footer' => 'Bas de page',
    ));

    // Custom Image sizes
    add_image_size('thumb-medium', 560, 580, true);
    add_image_size('thumb-large', 1020, 1080, false);
});


/**
 * Archive title
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
});


// Admin bar
function init_wp()
{
    show_admin_bar(true);
}

add_action('init', 'init_wp');


/**s
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title h3">',
        'after_title' => '</h3>'
    ];
    register_sidebar([
            'name' => __('Zone droite', 'flag') . ' ' . 1,
            'id' => 'sidebar-right'
        ] + $config);
    register_sidebar([
            'name' => __('Zone pied de page', 'flag') . ' ' . 1,
            'id' => 'footer-sidebar-1'
        ] + $config);
    register_sidebar([
            'name' => __('Zone pied de page', 'flag') . ' ' . 2,
            'id' => 'footer-sidebar-2'
        ] + $config);
    register_sidebar([
            'name' => __('Zone pied de page', 'flag') . ' ' . 3,
            'id' => 'footer-sidebar-3'
        ] + $config);
});
/**
 * Archive title
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
});

/* Désactive Gutenberg / utilisation de l'éditeur classique de WP */

add_filter('use_block_editor_for_post', '__return_false');


/*
Plugin Name: Link PDF Attachment
Plugin URI: http://premium.wpmudev.org
Description: Adds a link to the top of a WordPress post to the first PDF attachment
Author: Chris Knowles
Version: 1.0
Author URI: http://twitter.com/ChrisKnowles
*/

function pdf_add_link($content)
{

    global $post;
    if (!is_single()) return $content;

    $args = array(
        'numberposts' => 1,
        'order' => 'ASC',
        'post_mime_type' => 'application/pdf',
        'post_parent' => $post->ID,
        'post_status' => null,
        'post_type' => 'attachment',
    );

    $attachments = get_children($args);

    if ($attachments) {
        foreach ($attachments as $attachment) {
            $content = '<div class="pdf_download"><a href="' . wp_get_attachment_url($attachment->ID) . '" target="_blank" >Download article as PDF</a></div>' . $content;
        }
    }
    return $content;
}

add_filter('the_content', 'pdf_add_link');


