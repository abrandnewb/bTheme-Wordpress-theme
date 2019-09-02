<?php

function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function load_jquery() {
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);
    wp_enqueue_script('jquery');

    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');

//load bootstrap from cdn
function load_bootstrap_cdn() {
    wp_deregister_script('jquery');

    wp_register_script('jquery_cdn', 'https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous', '', 1, true);
    wp_register_script('proper_js_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" crossorigin="anonymous', '', 1, true);
    wp_register_style('bootstrap_js_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous', '', 1, true);
    wp_enqueue_script('jquery_cdn');
    wp_enqueue_script('proper_js_cdn');
    wp_enqueue_style('bootstrap_js_cdn');
}
//add_action( 'wp_footer', 'load_bootstrap_cdn' );
add_action('wp_enqueue_scripts', 'load_bootstrap_cdn');

function load_js() {
    wp_register_script('custom_js', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('custom_js');
}
add_action('wp_enqueue_scripts', 'load_js');

/* enable featured post image */
add_theme_support('post-thumbnails');

/* enabling menues */
add_theme_support('menus');

/* register menu locations */
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

/* enable image cropping */
add_image_size('smallest', 300, 300);
add_image_size('largest', 800, 800);

/* Register Custom Navigation Walker */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
