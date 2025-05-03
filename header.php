<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('title'); ?></title>
</head>
<body <?php body_class(); ?>>

<header id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('sample_settings'); ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <div class="menu_area">
                <ul id="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a>
            <ul>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
            </ul>
               </li>
                <li><a href="#">Service</a>
                <ul>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
            </ul>
               </li>
                <li><a href="#">News</a>
                <ul>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Dropdown</a></li>
            </ul>
               </li>
                <li><a href="#">Contact</a></li>
            </ul>
                </div>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</header>





</body>
</html>