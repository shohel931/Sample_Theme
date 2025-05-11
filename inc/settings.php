<?php 

function sample_api(){
    add_settings_field('coppy', 'Coppyright Text', 'coppy_func', 'general');
    add_settings_field('description', 'Description', 'description_func', 'general');
    add_settings_field('select', 'Select Color', 'select_func', 'general');


    register_setting('general', 'coppy');
    register_setting('general', 'description');
    register_setting('general', 'select');


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