<?php
/*
	Template Name: Contact Page

 */

get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>
		
		
		
		<div id="contact" class="page-section ">
			<div class="wrapper wrapper--none ">	
				<?php get_template_part('template-parts/content', 'section-header'); ?>
				

				<div class="page-section__bg">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/flower-bg.png" alt="peony vector">
				</div>

				<?php echo do_shortcode('[contact-form-7 id="59" title="Primary Contact Form"]'); ?> 
				

			</div>
		</div>

	
<?php

get_footer();