<?php 
    if( have_rows('plain_text') ):
        while( have_rows('plain_text') ) : the_row(); ?>
           <div class="plain-text">
                <div class="plain-text-image">
                    <img src="<?php the_sub_field('image');?>" alt="">
                </div>
                <div class="plain-text-content">
                    <h1><?php the_sub_field('title');?></h1>
                    <p><?php the_sub_field('content');?></p>
                    <?php if(get_sub_field('button') != ''){?>
                        <a href="<?php the_sub_field('button_link');?>"><button><?php the_sub_field('button');?></button></a>
                    <?php }?>
                </div>
           </div>
        <?php 
        endwhile;
    endif;
?>


  