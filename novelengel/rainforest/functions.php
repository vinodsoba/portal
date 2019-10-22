<?php


function load_stylesheets(){

  wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css',
array(), false, 'all');
  wp_enqueue_style('stylesheet');

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
array(), false, 'all');
  wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjquery(){

  wp_register_script('customjquery', get_template_directory_uri() . '/js/jquery3.1.1.js',
'', 1, true);
  wp_enqueue_script('customjquery');


}

add_action('wp_enqueue_scripts', 'loadjquery');

function loadjs(){

  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js',
'', 1, true);
  wp_enqueue_script('customjs');


}

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);
