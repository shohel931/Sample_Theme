<?php get_header(); ?>
   


<h1>This is archive page</h1>

<section id="contant_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if ( have_posts()) :
                    while (have_posts()) : the_post(); 
               ?>
                <div class="blog_area">
                    <div class="post_thumb">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                <?php  the_content(); ?>
                </div>
                <?php  
                 endwhile ;
                 else :
                    _e('No Post Found');
                 endif ;
                 
                 ?>
               
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>

    
