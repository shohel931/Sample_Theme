<?php 

// Widget Register
function sample_widgets(){
    register_sidebar(array(
        'name' => __('Footer 1', 'sample_theme'),
        'id' => 'footer-1',
        'description' =>__('This is widget', 'sample_theme'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'sample_theme'),
        'id' => 'footer-2',
        'description' =>__('This is widget', 'sample_theme'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'sample_theme'),
        'id' => 'footer-3',
        'description' =>__('This is widget', 'sample_theme'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'sample_widgets');