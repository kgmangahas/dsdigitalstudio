<?php
/*
	Template Name: About Page

 */

get_header(); ?>

<?php get_template_part('template-parts/content', 'about-detail'); ?>
		
		
		
		
		
		
		<div id="favorites" class="page-section page-section__t-margin-small">
			<div class="wrapper wrapper--none">	
				<?php get_template_part('template-parts/content', 'section-header'); ?>


				<div class="row row--gutters-xs row__top-padding">	
					<div class="row__medium-3 row__sm-2">
						
						<div class="gallery ">			
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/photo.png" alt="camera">
							<div class="gallery__overlay">
								<div class="gallery__text">
									camera
								</div>
							</div>
						</div>
						
						
						
					</div>
					<div class="row__medium-3 row__sm-2">
						
						<div class="gallery">	
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/notes.png" alt="notes">
							<div class="gallery__overlay">
								
								<div class="gallery__text">
									notes
								</div>
							</div>		
							
						</div>
						
						
					</div>
					<div class="row__medium-3 row__sm-2">
						<div class="gallery">			
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/peonies.png" alt="peonies">
							<div class="gallery__overlay">
								<div class="gallery__text">
									peonies
								</div>
							</div>
						</div>
						
						
					</div>
					<div class="row__medium-3 row__sm-2">
						<div class="gallery">			
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/coffee.png" alt="coffee">
							<div class="gallery__overlay">
								<div class="gallery__text">
									coffee
								</div>
							</div>
						</div>
						
						
					</div>

					


				</div>
			</div>
			


		</div>
		


<?php get_template_part('template-parts/content', 'knowmore'); ?>			
<?php echo do_shortcode("[mc4wp_form]"); ?>

<?php

get_footer();