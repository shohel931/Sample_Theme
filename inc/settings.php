<?php 
/*
function sample_settings_page(){
    add_menu_page('Sample Settings', 'Sample Settings', 'manage_options', 'sample-settings', 'sample_settings_page_html', 'dashicons-admin-generic', 100);
    add_submenu_page('sample-settings', 'Sample Settings', 'Sample Settings', 'manage_options', 'sample-settings', 'sample_settings_page_html');
}
add_action('admin_menu', 'sample_settings_page');



function sample_settings_page_html(){
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1>Sample Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('general');
            do_settings_sections('general');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}


*/



























function sample_api(){
    add_settings_field('coppy', 'Coppyright Text', 'coppy_func', 'general');
    add_settings_field('description', 'Description', 'description_func', 'general');
    add_settings_field('select', 'Select Color', 'select_func', 'general');
    add_settings_field('checkbox', 'Checkbox', 'checkbox_func', 'general');
    add_settings_field('radio', 'Radio', 'radio_func', 'general');


    register_setting('general', 'coppy');
    register_setting('general', 'description');
    register_setting('general', 'select');
    register_setting('general', 'checkbox');
    register_setting('general', 'radio');


}
add_action('admin_init', 'sample_api');

function coppy_func(){
    ?>
    <input type="text" name="coppy" value="<?php echo get_option('coppy') ?>" class="regular-text" placeholder="Coppyright Text">

   <?php
}
function description_func(){
    ?>
    <textarea name="description" <?php echo get_option('description'); ?> rows="5" cols="50"  placeholder="Description"></textarea>

   <?php
}
function select_func(){
    ?>
    <select name="select" >
        <option value="red" <?php selected(get_option('select'), 'red') ?>>Red</option>
        <option value="blue" <?php selected(get_option('select'), 'blue') ?>>Blue</option>
        <option value="green" <?php selected(get_option('select'), 'green') ?>>Green</option>
        <option value="black" <?php selected(get_option('select'), 'black') ?>>Black</option>
        <option value="orange" <?php selected(get_option('select'), 'orange') ?>>Orange</option>
        <option value="white" <?php selected(get_option('select'), 'white') ?>>White</option>
    </select>

   <?php
}

function checkbox_func(){
    ?>
     <input type="checkbox" name="checkbox"  value="1" <?php checked(1,get_option('checkbox'), true); ?>>

    <?php
}
function radio_func(){
    ?>
     <input type="radio" name="radio"  value="yes" <?php checked('yes', get_option('radio'), true); ?>> Yes
     <input type="radio" name="radio"  value="no" <?php checked('no', get_option('radio'), true); ?>> No

    <?php
}