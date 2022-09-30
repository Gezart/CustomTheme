<?php 
    if( have_rows('banner') ):
        while( have_rows('banner') ) : the_row(); ?>
            <div class="banner" style="background-image:url(<?php the_sub_field('banner_image');?>)">
                <div class="container">
                    <h1><?php the_sub_field('banner_title');?></h1>
                </div>
            </div>       
        <?php 
        endwhile;
    endif;
?>


  