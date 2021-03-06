<?php

$about_title = get_field("about_title");
$about_desc = get_field("about_desc");
$about_link_text = get_field("about_link_text");
$about_link_text_url = get_field("about_link_text_url");
$about_img = get_field("about_img");
$about_img_default = get_field("about_img_default");

?>


<!-- about -->
<div id="about" class="page-section">
			<div class="wrapper">
				<div class="row row--gutters">
					<div class="row__medium-5 row__sm-5 about__t-l-padding-on-small">
						<?php if($about_img_default) : ?>
							<picture>

								<source sizes="456px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me--large.png 456w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me--large--hi-dpi.png 911w" media="(min-width: 1000px)">
								<source sizes="229px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me--medium.png 229w, assets/images/me--medium--hi-dpi.png 458w" media="(min-width: 530px)">
								<img srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me--small.png 333w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me--small--hi-dpi.png 665w" alt="woman sitting">
							</picture>
						<?php else : ?>
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
						  		srcset="<?php echo esc_attr( $srcset ); ?>"
								sizes="<?php echo esc_attr( $sizes );?>"
								alt="<?php echo esc_attr( $alt );?>" 
								/>
							<?php endif ?>

						<?php endif ?>


					</div>
					<div class="row__medium-7 row__sm-7" >
						<div class="generic-content-container">
							<h2 class="headline headline--darkrose headline--no-t-margin"><?php echo $about_title; ?></h2>
							<div class="about__text-content">	
								<p><?php echo $about_desc; ?></p>
							
								<a class="about--right about__link" href="<?php $abtLink = site_url() . $about_link_text_url; echo $abtLink; ?>"><?php echo $about_link_text; ?></a>
							</div>
						</div>
							
					</div>
								
				</div>				
				
			</div>
			
		</div>