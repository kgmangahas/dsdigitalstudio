<?php
/*
	Template Name: Home Page

 */



get_header(); ?>


<?php get_template_part('template-parts/content', 'hero'); ?>
<?php get_template_part('template-parts/content', 'about'); ?>
<?php get_template_part('template-parts/content', 'services'); ?>
<?php get_template_part('template-parts/content', 'knowmore'); ?>	
		
		
		
		
		
		
		
		
		
		
		<?php echo do_shortcode("[mc4wp_form]"); ?>

		
		

	

<?php

get_footer();
