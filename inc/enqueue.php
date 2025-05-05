<?php 

// Enqueue styles and scripts
function sample_theme_enqueue() {
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');




    //js
    wp_enqueue_script( 'jquary');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}
add_action('wp_enqueue_scripts', 'sample_theme_enqueue');

// Font Awesome and google fornt
function sample_theme_fonts() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', false);
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com', array(), false);
}
add_action('wp_enqueue_scripts', 'sample_theme_fonts');


// Theme Title
add_theme_support('title-tag');