<?php get_header(); ?>
   




<section id="contant_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
          <h2 style="color: <?php echo get_option('select'); ?>">Hello World This is Me</h2>

          <?php 
          if (get_option('checkbox') == 1) {
            ?> <h2>Hello World</h2>  <?php
          } else {
            ?> <h2>Gello World</h2> <?php
          }
          
          ?>

            </div>
        </div>
    </div>
</section>




<div class="container">
    <div class="row">
        <div class="col-md-12">
      <h2><?php echo get_option('coppy'); ?></h2> 
        </div>
</div>




<?php get_footer(); ?>

    
