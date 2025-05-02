<?php 




// Global
function sample_global_customize($wp_customize){
    $wp_customize-> add_panel('sample_theme_global', array(
        'title' => __('Global', 'sample_theme'),
        'priority' => 10,
    ));


      // Logo Section
      $wp_customize-> add_section('sample_theme_logo', array(
        'title' =>__('Logo Upload', 'sample_theme'),
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

    // Coppyright Text
    $wp_customize-> add_section('sample_coppyright', array(
      'title' =>__('Coppyright', 'sample_theme'),
      'description' => __('If you interested to chenge coppyright text', 'sample_theme'),
      'priority' => 20,
      'panel' => 'sample_theme_global',
  ));
  $wp_customize->add_setting('sample_coppy_setting', array(
      'default' => '&COPY; Coppyright All Reversed',
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sample_coppy_setting', array(
      'label' =>__('Coppyright', 'sample_theme'),
      'description' => __('If you interested to chenge coppyright text', 'sample_theme'),
      'setting' => 'sample_coppy_setting',
      'section' => 'sample_coppyright',
  )));







}
add_action('customize_register', 'sample_global_customize');






// All Color
function sample_theme_customize($wp_customize){
    $wp_customize-> add_panel('sample_theme_allcolor', array(
        'title' => __('All Color', 'sample_theme'),
        'priority' => 20,
    ));


    // Background Color Section
    $wp_customize-> add_section('sample_theme_color', array(
        'title' => __('Background Color', 'sample_theme'),
        'description' => __('If you interested to update your background color, you can do it here.', 'sample_theme'),
        'priority' => 10,
        'panel' => 'sample_theme_allcolor',
    ));
    $wp_customize->add_setting('sample_theme_color_picker', array(
        'default' => '#ffffff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_theme_color_picker', array(
        'label' => __('Color Picker', 'sample_theme'),
        'description' => __('If you interested to update your background color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_theme_color_picker',
        'section' => 'sample_theme_color',
    )));

    // Header Color Section
    $wp_customize-> add_section('sample_header_color', array(
        'title' => __('Header Background Color', 'sample_theme'),
        'description' => __('If you interested to update your headervbg color, you can do it here.', 'sample_theme'),
        'priority' => 20,
        'panel' => 'sample_theme_allcolor',
    ));
    $wp_customize->add_setting('sample_headercolor', array(
        'default' => '#ffffff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_headercolor', array(
        'label' => __('Color Picker', 'sample_theme'),
        'description' => __('If you interested to update your header bg color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_headercolor',
        'section' => 'sample_header_color',
    )));

    // Coppyright color Section
    $wp_customize-> add_section('sample_coppy_color', array(
        'title' => __('Coppyright Background Color', 'sample_theme'),
        'description' => __('If you interested to update your coppyright bg color, you can do it here.', 'sample_theme'),
        'priority' => 30,
        'panel' => 'sample_theme_allcolor',
    ));
    $wp_customize->add_setting('sample_coppyright', array(
        'default' => '#000',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_coppyright', array(
        'label' => __('Color Picker', 'sample_theme'),
        'description' => __('If you interested to update your coppyright bg color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_coppyright',
        'section' => 'sample_coppy_color',
    )));

    // Coppyright Text color Section
    $wp_customize-> add_section('sample_coppy_color_text', array(
        'title' => __('Coppyright Text Color', 'sample_theme'),
        'description' => __('If you interested to update your coppyright text color, you can do it here.', 'sample_theme'),
        'priority' => 40,
        'panel' => 'sample_theme_allcolor',
    ));
    $wp_customize->add_setting('sample_coppyright_text', array(
        'default' => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_coppyright_text', array(
        'label' => __('Color Picker', 'sample_theme'),
        'description' => __('If you interested to update your coppyright text color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_coppyright_text',
        'section' => 'sample_coppy_color_text',
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
        #header_area{
            background-color: <?php echo get_theme_mod('sample_headercolor', '#ffffff'); ?>;
        }
        .coppyright_area{
            background-color: <?php echo get_theme_mod('sample_coppyright', '#000'); ?>;
        }
        .coppyright_area p{
            color: <?php echo get_theme_mod('sample_coppyright_text', '#fff'); ?>;
        }
        .menu_area ul li a{
            color: <?php echo get_theme_mod('', '#000'); ?>;
        }
        .menu_area ul li a:hover{
            color: <?php echo get_theme_mod('', 'blue'); ?>;
        }

        
    </style>

    <?php
}
add_action('wp_head', 'sample_theme_customizer_css');

