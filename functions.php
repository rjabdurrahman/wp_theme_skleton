<?php
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), false, 'all');
    wp_enqueue_style('responsive');
    wp_register_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array(), false, 'all');
    wp_enqueue_style('fa');
    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Exo+2:500,700|Montserrat:300|Roboto|Lato:400,700|Pacifico|Barlow+Condensed:400,500,700|Anton&display=swap', array(), false, 'all');
    wp_enqueue_style('googlefonts');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
    wp_register_script('fa', get_template_directory_uri() . '/js/font-awesome.js', null, false, false);
    wp_enqueue_script('fa');
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);
