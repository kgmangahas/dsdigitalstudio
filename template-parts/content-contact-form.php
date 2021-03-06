<?php 
$services_text = get_field("services_text_2");
$services_image = get_field("services_image_2");
$services_default_image = get_field("services_default_image_2");
?>


<div class="row row--gutters-small row__top-padding">

	<div class="row__medium-5  page-section__full ">
		<?php if($services_default_image) : ?>
			<picture>
				<source sizes="483px" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-form.png 483w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-form--hi-dpi.png 966w" media="(min-width: 800px)">		

					<img class="lazyload" data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-form--small.png 375w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/contact-form--small--hi-dpi.png 750w" alt="flower and note">		


				</picture>





		<?php else : ?>
			<?php if(!empty($services_image)) : ?>
				<?php

				$url = $services_image['url'];							
				$id = pippin_get_image_id($url);
				$alt = $services_image['alt'];
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


		<div class="row__medium-7 row__top-padding--small">
			<div class="generic-content-container ">
				<?php echo $services_text; ?>

			</div>

			<div class="contact contact--side">

				<?php echo do_shortcode('[contact-form-7 id="59" title="Primary Contact Form"]'); ?> 

			</div>
			


		</div>
	</div>