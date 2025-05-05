<?php 

// Theme Title
add_theme_support('title-tag');

// Feture Image
add_theme_support('post-thumbnails', array('post', 'page'));
add_image_size('post-thumbnails', 370, 300, true);