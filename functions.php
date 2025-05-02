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

// Font Awesome
function sample_theme_fonts() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', false);
}
add_action('wp_enqueue_scripts', 'sample_theme_fonts');






// Panel and Section
// Global Panel
function sample_theme_customize($wp_customize){
    $wp_customize-> add_panel('sample_theme_global', array(
        'title' => __('Global', 'sample_theme'),
        'priority' => 10,
    ));

    // Logo Section
    $wp_customize-> add_section('sample_theme_logo', array(
        'title' =>__('Logo', 'sample_theme'),
        'description' => __('Upload your logo here', 'sample_theme'),
        'priority' => 10,
        'panel' => 'sample_theme_global',
    ));
    $wp_customize->add_setting('sample_settings', array(
        'default' => get_template_directory_uri(). '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sample_settings', array(
        'label' =>__('Logo', 'sample_theme'),
        'description' => __('Upload your logo here', 'sample_theme'),
        'setting' => 'sample_settings',
        'section' => 'sample_theme_logo',
    )));


    // Logo Name Color Section
    $wp_customize-> add_section('sample_theme_color', array(
        'title' => __('Background Color', 'sample_theme'),
        'description' => __('If you interested to update your Background color, you can do it here.', 'sample_theme'),
        'priority' => 20,
        'panel' => 'sample_theme_global',
    ));
    $wp_customize->add_setting('sample_theme_color_picker', array(
        'default' => '#000',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_theme_color_picker', array(
        'label' => __('Color Picker', 'sample_theme'),
        'description' => __('If you interested to update your Background color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_theme_color_picker',
        'section' => 'sample_theme_color',
    )));






}
add_action('customize_register', 'sample_theme_customize');





// Customizer CSS
function sample_theme_customizer_css(){
    ?>
    <style type="text/css">
        body{
            background-color: <?php echo get_theme_mod('sample_theme_color_picker', '#ffffff'); ?>;
        }

        
    </style>

    <?php
}
add_action('wp_head', 'sample_theme_customizer_css');