<?php
/*
	Template Name: Portfolio Page

 */

get_header(); 

get_template_part('template-parts/content', 'hero');

?>
<div id="favorites" class="page-section page-section__t-margin">
			<div class="wrapper wrapper--none">	
				<?php get_template_part('template-parts/content', 'section-header'); ?>


				<div class="row row--gutters-xs row__top-padding">	

					
					<?php $loop = new WP_Query(array('post_type' => 'images','orderby' => 'post_id', 'order' => 'ASC')); ?>
					<?php while ($loop->have_posts()) :$loop->the_post(); ?>
					
					<div class="row__medium-4 row__sm-6">
						<?php 	if (get_field('is_portfolio')) : ?>
						<?php $gal_img = get_field('gallery_image'); ?>

						<?php
									$url = $gal_img['url'];							
							
							$alt = $gal_img['alt'];
							
						?>		

									<div class="gallery ">
										
										<img src="<?php echo $url?>" alt="<?php echo $alt?>">
										<div class="gallery__overlay gallery__overlay--white">
											<div class="gallery__portfolio">
												<a href="<?php 	echo site_url() . get_field(gallery_image_text);?>"><?php the_title(); ?></a>
											</div>
										</div>
									</div>

								
						<?php 	endif ?>
						
					</div>

				<?php endwhile; wp_reset_query();	 ?>

					


				</div>
			</div>
			


		</div>
		

<?php

get_footer();

?>