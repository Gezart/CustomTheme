<div class="services">
    <div class="container">
        <?php 
            if( have_rows('services') ):
                while( have_rows('services') ) : the_row(); ?>
                    <div class="service-item">
                        <img src="<?php the_sub_field('icon');?>" alt="">
                        <h3 class="title"><?php the_sub_field('title');?></h3>
                    </div>          
                <?php 
                endwhile;
            endif;
        ?>
    </div>
</div>
