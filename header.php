<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
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
               <?php wp_nav_menu(array('theme_location', 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="login_area">
                    <?php if(is_user_logged_in()) : ?>
                    <a class="btn_primary" href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                    <?php else : ?>
                    <a class="btn_primary" href="<?php echo wp_login_url(); ?>">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>





</body>
</html>