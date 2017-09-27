<?php
$about_title = get_field("about_title");
$about_desc = get_field("about_desc");
$about_img = get_field("about_img");
$about_img_default = get_field("about_img_default");
$about_img_hello =  get_field("about_img_hello");




?>



<div id="about-me" class="page-section page-section__top-alignment-header">
			<div class="wrapper"> 

				
				<div class="row row--gutters">
					<div class="row__medium-5 row__sm-5--block about__center">
						<?php if($about_img_default) : ?>
							<picture>
								<source sizes="468px" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me-about--large.png 468w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me-about--large--hi-dpi.png 936w" media="(min-width: 800px)">
								<source sizes="537px" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me-about--medium.png 537w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me-about--medium--hi-dpi.png 1074w" media="(min-width: 530px)">
								<img class="lazyload" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me-about--small.png 325w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me-about--small--hi-dpi.png 649w" alt="woman sitting">
							</picture>

						<?php else :?>		
							<?php if(!empty($about_img)) : ?>
								<?php

									$url = $about_img['url'];							
									$id = pippin_get_image_id($url);
									$alt = $about_img['alt'];
									$src = wp_get_attachment_image_src( $id, 'large' );	
									$srcset = wp_get_attachment_image_srcset( $id, 'large' );
									$sizes = wp_get_attachment_image_sizes( $id, 'large' );
									

								?>

								<img class="lazyload" src="<?php echo esc_attr( $src );?>"
						  		data-srcset="<?php echo esc_attr( $srcset ); ?>"
								sizes="<?php echo esc_attr( $sizes );?>"
								alt="<?php echo esc_attr( $alt ); ?>" 
								/>
							<?php endif ?>

						<?php endif ?>
					</div>
					<div class="row__medium-7 row__sm-7--block" >
						<div class="generic-content-container">
							<?php if($about_img_hello) : ?>
							<div class="about--no-padding-until-small">
								<span class="about__hello icon icon--hello about__hello--center "></span>
							</div>		
							<?php endif ?>					
							<div class="about__text-content about__text-content--smaller">	
								<?php echo $about_desc ?>
							
								
							</div>
						</div>
							
					</div>
				</div>
				
			</div>
		</div>