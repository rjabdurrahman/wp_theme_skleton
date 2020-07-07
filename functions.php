<?php
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);
