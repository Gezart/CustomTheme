<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Koprer
 */

?>

	<footer id="colophon" class="site-footer">
		<img src="<?php the_field('footer_logo', 'option');?>" alt="">
		<div class="social-media">
			<?php 
				if( have_rows('social_media', 'option') ):
					while( have_rows('social_media', 'option') ) : the_row(); ?>
						<div class="sm-item">
							<a href="<?php the_sub_field('social_media_link');?>" target="_blank"><img src="<?php the_sub_field('icon');?>" alt=""></a>
						</div>
					<?php 
					endwhile;
				endif;
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
