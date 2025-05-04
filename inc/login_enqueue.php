<?php 
// css file call
function login_enqueue_register() {
    wp_enqueue_style('login_enqueue', get_stylesheet_directory_uri(). '/css/login_enqueue.css', array(), '1.0.0', 'all');

}
add_action('login_enqueue_scripts', 'login_enqueue_register');

// login logo chenge
function login_logo_change() {
   ?>
   <style>
   #login h1 a , .login h1 a{
    background-image: url(<?php echo get_stylesheet_directory_uri().'/img/logo.jpg' ?>);
   }
   </style>
<?php

}
add_action('login_enqueue_scripts', 'login_logo_change');


function login_logo_url() {
    return home_url();
 
 }
 add_filter('login_headerurl', 'login_logo_url');
 
 