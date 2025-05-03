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
        'transport' => 'refresh',
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
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sample_coppy_setting', array(
        'label' =>__('Coppyright', 'sample_theme'),
        'setting' => 'sample_coppy_setting',
        'section' => 'sample_coppyright_area',
    )));
    // Coppyright BG color Section
    $wp_customize->add_setting('sample_coppyright', array(
        'default' => '#000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_coppyright', array(
        'label' => __('Background Color', 'sample_theme'),
        'setting' => 'sample_coppyright',
        'section' => 'sample_coppyright_area',
    )));
    // Coppyright Text color Section
    $wp_customize->add_setting('sample_coppyright_text', array(
        'default' => '#fff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_coppyright_text', array(
        'label' => __('Text Color', 'sample_theme'),
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
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_color_menu', array(
        'label' => __('Menu Color', 'sample_theme'),
        'setting' => 'sample_color_menu',
        'section' => 'sample_menu_area',
    )));
    // Menu Hover Color
    $wp_customize->add_setting('sample_hover_menu', array(
        'default' => 'blue',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_hover_menu', array(
        'label' => __('Menu Hover', 'sample_theme'),
        'setting' => 'sample_hover_menu',
        'section' => 'sample_menu_area',
    )));

    // Dropdown Menu  Color
    $wp_customize->add_setting('sample_drop_menu', array(
        'default' => 'blue',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_drop_menu', array(
        'label' => __('Dropdown Color', 'sample_theme'),
        'setting' => 'sample_drop_menu',
        'section' => 'sample_menu_area',
    )));

    
    // Widget Section
    $wp_customize-> add_section('sample_widget_color', array(
        'title' => __('Widget Color', 'sample_theme'),
        'priority' => 40,
        'panel' => 'sample_theme_global',
    ));
    // Widget BG Color
    $wp_customize->add_setting('sample_widget_bg', array(
        'default' => '#00FFFF',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_widget_bg', array(
        'label' => __('Background Color', 'sample_theme'),
        'setting' => 'sample_widget_bg',
        'section' => 'sample_widget_color',
    )));
    // Widget Text Color
    $wp_customize->add_setting('sample_widget_text', array(
        'default' => '#000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_widget_text', array(
        'label' => __('Text Color', 'sample_theme'),
        'setting' => 'sample_widget_text',
        'section' => 'sample_widget_color',
    )));

    // Color Area
    $wp_customize-> add_section('sample_color_area', array(
        'title' =>__('Color', 'sample_theme'),
        'priority' => 50,
        'panel' => 'sample_theme_global',
    ));
    // Background Color
    $wp_customize->add_setting('sample_theme_color_picker', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_theme_color_picker', array(
        'label' => __('Background Color', 'sample_theme'),
        'setting' => 'sample_theme_color_picker',
        'section' => 'sample_color_area',
    )));
    // Header Color Section
    $wp_customize->add_setting('sample_headercolor', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_headercolor', array(
        'label' => __('Header Color', 'sample_theme'),
        'setting' => 'sample_headercolor',
        'section' => 'sample_color_area',
    )));


    // Button Area
    $wp_customize-> add_section('sample_buttons_area', array(
        'title' =>__('Buttons', 'sample_theme'),
        'priority' => 60,
        'panel' => 'sample_theme_global',
    ));
    // Text Color
   $wp_customize->add_setting('sample_btn_text', array(
       'default' => '#ffffff',
       'transport' => 'refresh',
   ));
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_btn_text', array(
       'label' => __('Text Color', 'sample_theme'),
       'setting' => 'sample_btn_text',
       'section' => 'sample_buttons_area',
   )));
   // Text Hover
  $wp_customize->add_setting('sample_btn_text_hover', array(
      'default' => '#000',
      'transport' => 'refresh',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_btn_text_hover', array(
      'label' => __('Text Hover', 'sample_theme'),
      'setting' => 'sample_btn_text_hover',
      'section' => 'sample_buttons_area',
  )));
    // Background Color
    $wp_customize->add_setting('sample_btn_back', array(
        'default' => '#045CB4',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_btn_back', array(
        'label' => __('Background Color', 'sample_theme'),
        'setting' => 'sample_btn_back',
        'section' => 'sample_buttons_area',
    )));
    // Background Hover Color
    $wp_customize->add_setting('sample_btn_bg_hover', array(
        'default' => '#0B5ED7',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_btn_bg_hover', array(
        'label' => __('Background Hover', 'sample_theme'),
        'setting' => 'sample_btn_bg_hover',
        'section' => 'sample_buttons_area',
    )));

    // Border Color
    $wp_customize->add_setting('sample_btn_border', array(
        'default' => '#262626',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sample_btn_border', array(
        'label' => __('Border Color', 'sample_theme'),
        'setting' => 'sample_btn_border',
        'section' => 'sample_buttons_area',
    )));
    // Button Padding
    $wp_customize->add_setting( 'mytheme_btn_padding', array(
        'default'   => '10px 16px',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_btn_padding', array(
        'label'    => __( 'Button Padding', 'mytheme' ),
        'section'  => 'sample_buttons_area',
        'type'     => 'text',
    ) );
    // Button Border Redius
    $wp_customize->add_setting( 'mytheme_border_redius', array(
        'default'   => '5px',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_border_redius', array(
        'label'    => __( 'Border Redius', 'mytheme' ),
        'section'  => 'sample_buttons_area',
        'type'     => 'text',
    ) );


    // Font Area
    $wp_customize-> add_section('sample_fonts_area', array(
        'title' =>__('Fonts', 'sample_theme'),
        'priority' => 70,
        'panel' => 'sample_theme_global',
    ));

    
    // H1 Font
    $wp_customize->add_setting( 'mytheme_h1_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_h1_font', array(
        'label'    => __( 'H1 Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );

    
    // H2 Font
    $wp_customize->add_setting( 'mytheme_h2_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_h2_font', array(
        'label'    => __( 'H2 Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );

    
    // H3 Font
    $wp_customize->add_setting( 'mytheme_h3_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_h3_font', array(
        'label'    => __( 'H3 Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );

    
    // H4 Font
    $wp_customize->add_setting( 'mytheme_h4_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_h4_font', array(
        'label'    => __( 'H4 Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );  

    // H5 Font
    $wp_customize->add_setting( 'mytheme_h5_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_h5_font', array(
        'label'    => __( 'H5 Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );   

    // H6 Font
    $wp_customize->add_setting( 'mytheme_h6_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_h6_font', array(
        'label'    => __( 'H6 Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );

    // P Font
    $wp_customize->add_setting( 'mytheme_p_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_p_font', array(
        'label'    => __( 'P Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );

    // A Font
    $wp_customize->add_setting( 'mytheme_a_font', array(
        'default'   => '"PT Serif", serif',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'mytheme_a_font', array(
        'label'    => __( 'A Font', 'mytheme' ),
        'section'  => 'sample_fonts_area',
        'type'     => 'text',
    ) );










}
add_action('customize_register', 'sample_global_customize');




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
        .btn_primary{
            background-color: <?php echo get_theme_mod('sample_btn_back', '#045CB4'); ?>;
            color: <?php echo get_theme_mod('sample_btn_text', '#ffffff'); ?>;
            border:1px solid <?php echo get_theme_mod('sample_btn_border', '#262626'); ?>;
            padding: <?php echo get_theme_mod('mytheme_btn_padding', '10px 16px'); ?>;
            border-radius: <?php echo get_theme_mod('mytheme_border_redius', '5px'); ?>;
            display: inline-block;
            font-weight: 400;
            text-decoration: none;
        }
        .btn_primary:hover{
            background-color: <?php echo get_theme_mod('sample_btn_bg_hover', '#0B5ED7'); ?>;
            color: <?php echo get_theme_mod('sample_btn_text_hover', '#000'); ?>;
        }
        h1{
            font-family: <?php echo get_theme_mod('mytheme_h1_font', '"PT Serif", serif'); ?>;
        }
        h2{
            font-family: <?php echo get_theme_mod('mytheme_h2_font', '"PT Serif", serif'); ?>;
        }
        h3{
            font-family: <?php echo get_theme_mod('mytheme_h3_font', '"PT Serif", serif'); ?>;
        }
        h4{
            font-family: <?php echo get_theme_mod('mytheme_h4_font', '"PT Serif", serif'); ?>;
        }
        h5{
            font-family: <?php echo get_theme_mod('mytheme_h5_font', '"PT Serif", serif'); ?>;
        }
        h6{
            font-family: <?php echo get_theme_mod('mytheme_h6_font', '"PT Serif", serif'); ?>;
        }
        p{
            font-family: <?php echo get_theme_mod('mytheme_p_font', '"PT Serif", serif'); ?>;
        }
        a{
            font-family: <?php echo get_theme_mod('mytheme_a_font', '"PT Serif", serif'); ?>;
        }
        .footer_widgets .col-md-4{
            color: <?php echo get_theme_mod('sample_widget_text', '#000'); ?>;
        }
        


        
    </style>

    <?php
}
add_action('wp_head', 'sample_theme_customizer_css');




