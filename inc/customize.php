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

    // Coppyright Area
    $wp_customize-> add_section('sample_coppyright_area', array(
        'title' =>__('CoppyRight', 'sample_theme'),
        'priority' => 20,
        'panel' => 'sample_theme_global',
    ));

    // Coppyright Text
    $wp_customize->add_setting('sample_coppy_setting', array(
        'default' => '&COPY; Coppyright All Reversed',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sample_coppy_setting', array(
        'label' =>__('Coppyright', 'sample_theme'),
        'description' => __('If you interested to chenge coppyright text', 'sample_theme'),
        'setting' => 'sample_coppy_setting',
        'section' => 'sample_coppyright_area',
    )));
    // Coppyright BG color Section
    $wp_customize->add_setting('sample_coppyright', array(
        'default' => '#000',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_coppyright', array(
        'label' => __('Background Color', 'sample_theme'),
        'description' => __('If you interested to update your coppyright bg color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_coppyright',
        'section' => 'sample_coppyright_area',
    )));
    // Coppyright Text color Section
    $wp_customize->add_setting('sample_coppyright_text', array(
        'default' => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_coppyright_text', array(
        'label' => __('Text Color', 'sample_theme'),
        'description' => __('If you interested to update your coppyright text color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_coppyright_text',
        'section' => 'sample_coppyright_area',
    )));


    // Menu Area
    $wp_customize-> add_section('sample_menu_area', array(
        'title' =>__('Menu Color', 'sample_theme'),
        'priority' => 30,
        'panel' => 'sample_theme_global',
    ));

    // menu color
    $wp_customize->add_setting('sample_color_menu', array(
        'default' => '#000',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_color_menu', array(
        'label' => __('Menu Color', 'sample_theme'),
        'description' => __('If you interested to update your menu color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_color_menu',
        'section' => 'sample_menu_area',
    )));
    // Menu Hover Color
    $wp_customize->add_setting('sample_hover_menu', array(
        'default' => 'blue',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_hover_menu', array(
        'label' => __('Menu Hover', 'sample_theme'),
        'description' => __('If you interested to update your menu color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_hover_menu',
        'section' => 'sample_menu_area',
    )));

    // Dropdown Menu  Color
    $wp_customize->add_setting('sample_drop_menu', array(
        'default' => 'blue',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_drop_menu', array(
        'label' => __('Dropdown Color', 'sample_theme'),
        'description' => __('If you interested to update your dropdown menu color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_drop_menu',
        'section' => 'sample_menu_area',
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
        'priority' => 50,
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
        'priority' => 40,
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

   


    

    
  
    

    
    
    

    // Widget BG Color
    $wp_customize-> add_section('sample_widget', array(
        'title' => __('Widget Color', 'sample_theme'),
        'priority' => 70,
        'panel' => 'sample_theme_allcolor',
    ));
    $wp_customize->add_setting('sample_widget_bg', array(
        'default' => '#00FFFF',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_widget_bg', array(
        'label' => __('Color Picker', 'sample_theme'),
        'description' => __('If you interested to update your widget bg color, you can do it here.', 'sample_theme'),
        'setting' => 'sample_widget_bg',
        'section' => 'sample_widget',
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
            color: <?php echo get_theme_mod('sample_color_menu', '#000'); ?>;
        }
        .menu_area ul li a:hover{
            color: <?php echo get_theme_mod('sample_hover_menu', 'blue'); ?>;
        }
        .menu_area ul li ul li a:hover{
            background-color: <?php echo get_theme_mod('sample_drop_menu', 'blue'); ?>;
            color: <?php echo get_theme_mod('sample_hover_menu', 'blue'); ?>;
        }
        .footer_widgets{
            background-color: <?php echo get_theme_mod('sample_widget_bg', '#00FFFF'); ?>;
        }


        
    </style>

    <?php
}
add_action('wp_head', 'sample_theme_customizer_css');

