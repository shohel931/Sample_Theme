<?php 

function sample_api(){
    add_settings_field('coppy', 'Coppyright Text', 'coppy_func', 'general');
    register_setting('general', 'coppy');
}
add_action('admin_init', 'sample_api');

function coppy_func(){
    ?>
    <input type="text" name="coppy" value="<?php echo get_option('coppy') ?>" class="regular-text" placeholder="Coppyright Text">

   <?php
}