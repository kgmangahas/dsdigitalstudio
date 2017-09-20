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

					
					<?php $loop = new WP_Query(array('post_type' => 'images','orderby' => 'post_id', 'order' => 'ASC')); ?>
					<?php while ($loop->have_posts()) :$loop->the_post(); ?>
					
					<div class="row__medium-3 row__sm-2">
						<?php $gal_img = get_field('gallery_image'); ?>

						<?php
									$url = $gal_img['url'];							
							
							$alt = $gal_img['alt'];
							
						?>		

									<div class="gallery ">
										
										<img src="<?php echo $url?>" alt="<?php echo $alt?>">
										<div class="gallery__overlay">
											<div class="gallery__text">
												<?php the_title(); ?>
											</div>
										</div>
									</div>

								
						
						
					</div>

				<?php endwhile; wp_reset_query();	 ?>

					


				</div>
			</div>
			


		</div>
		


<?php get_template_part('template-parts/content', 'knowmore'); ?>			
<?php echo do_shortcode("[mc4wp_form]"); ?>

<?php

get_footer();