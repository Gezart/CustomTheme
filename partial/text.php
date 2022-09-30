<?php 
    if( have_rows('text') ):
        while( have_rows('text') ) : the_row(); ?>
            <div class="text">
                <h1><?php the_sub_field('title');?></h1>
                <p><?php the_sub_field('content');?></p>
            </div>
        <?php 
        endwhile;
    endif;
?>


  