<?php 

function sample_api(){
    add_settings_field('coppy', 'Coppyright Text', 'coppy_func', 'general');
    add_settings_field('description', 'Description', 'description_func', 'general');


    register_setting('general', 'coppy');
    register_setting('general', 'description');


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