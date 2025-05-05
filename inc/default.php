<?php 

// Theme Title
add_theme_support('title-tag');

// Feture Image
add_theme_support('post-thumbnails', array('post', 'page'));
add_image_size('post-thumbnails', 370, 300, true);


// Excerpt More
function sample_excerpt($more){
    return '<br> <br> <a class="btn_primary" href="' .get_permalink() . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'sample_excerpt');

function sample_excerpt_length($length){
    return 40;
}
add_filter('excerpt_length', 'sample_excerpt_length', 999);