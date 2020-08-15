<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_js(){
    wp_register_script('customjs',get_template_directory_uri().'/scripts/script.js','',false,true);
    wp_enqueue_script('customjs');

    wp_register_script('icons','https://kit.fontawesome.com/a076d05399.js','',false,false);
    wp_enqueue_script('icons');
}
add_action('wp_enqueue_scripts','load_js');

add_theme_support('menus');
add_theme_support('custom-background');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


register_nav_menus(
    array(
        'top-menu' =>__('Top Menu','theme'),
    )
);

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 400,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_image_size('smallest',300,300,true);
add_image_size('largest',800,800,true);