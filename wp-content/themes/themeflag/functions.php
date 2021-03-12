<?php

function addThemeFiles() {
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

    function register_my_menu() {
        register_nav_menu('menu-flag',__( 'flag' ));
    }
    add_action( 'init', 'register_my_menu' );



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


