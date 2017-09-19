<?php
/*
	Template Name: Contact Page

 */

get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>
<!-- 
<div class="hero hero__top-padding">
			<div class="wrapper">
				

				<picture>
					<source sizes="1164px" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-large.png 1164w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-large--hi-dpi.png 2328w" media="(min-width: 800px)">
					<source sizes="769px" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-medium.png 769w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-medium--hi-dpi.png 1538w" media="(min-width: 530px)">

					<img class="lazyload" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-small.png 188w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-small--hi-dpi.png 376w" alt="peonies with laptop" class="hero__img">	
				</picture>
				
			
			</div>
		</div> -->
		
		
		
		
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