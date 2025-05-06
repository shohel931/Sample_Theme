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


// Page Nav 
function sample_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current_page = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] =$max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '<pre>
    <div class="pagination">';
    if ($total == 1 && $max > 1) $pages = '<p class="page">Page ' . $current . '<span> of </span>'
    . $max . '</p>';
    echo $pages . paginate_links($arge);
    if ($max > 1) echo '</div> </pre>';
    
    
}