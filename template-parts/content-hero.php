<?php

$hero_title = get_field("site_description");
$hero_subtitle = get_field("site_sub_description");

$hero_image = get_field("hero_image");
$default_hero_image = get_field("default_hero_image");
// retrieves the attachment ID from the file URL

function pippin_get_image_id($image_url) {
	global $wpdb;
	
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}

?>

<!-- hero -->
<div class="hero hero__top-padding">
			<div class="wrapper">
				
				<?php if($default_hero_image) : ?>
				
				<picture>
					<source sizes="1164px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--large.png 1164w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--large-hi-dpi.png 2328w" media="(min-width: 800px)">
					<source sizes="769px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--medium.png 769w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--medium-hi-dpi.png 1538w" media="(min-width: 530px)">

					<img data-srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--small.png 188w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--small-hi-dpi.png 376w" alt="peonies with laptop" class="hero__img lazyload">	
				</picture>
				<?php else : ?>

					<?php 

						if (!empty($hero_image)) {
							$url = $hero_image['url'];							
							$id = pippin_get_image_id($url);
							$alt = $hero_image['alt'];
						/* get the width of the largest cropped image to 
							   calculate the breakpoint */
							$hero_cropped_info = 
								wp_get_attachment_image_src( $id, 'mytheme-hero-cropped-smaller' );
							$breakpoint = absint( $hero_cropped_info[1] ) + 1;


							/*get large cropped image*/
							$hero_cropped_large_srcset = wp_get_attachment_image_src($id, 'dsdigitalstudio-hero-cropped-large');
							$hero_cropped_large_sizes = wp_get_attachment_image_sizes($id, 'dsdigitalstudio-hero-cropped-large');

							$hero_cropped_medium_srcset = wp_get_attachment_image_src($id, 'dsdigitalstudio-hero-cropped-medium');
							$hero_cropped_medium_sizes = wp_get_attachment_image_sizes($id, 'dsdigitalstudio-hero-cropped-medium');

							$hero_cropped_small_srcset = wp_get_attachment_image_src($id, 'dsdigitalstudio-hero-cropped-small');
							$hero_cropped_small_sizes = wp_get_attachment_image_sizes($id, 'dsdigitalstudio-hero-cropped-small');
							
											

						}

					?>
					<picture>					  	
					<source media="(min-width:800px)" srcset="<?php echo $hero_cropped_large_srcset[0] . ' ' . $hero_cropped_large_srcset[1] . 'w' ?>" sizes="<?php echo $hero_cropped_large_sizes ?>">
					<source media="(min-width:530px)" srcset="<?php echo $hero_cropped_medium_srcset[0] . ' ' . $hero_cropped_medium_srcset[1] . 'w' ?>"sizes="<?php echo $hero_cropped_medium_sizes ?>">

				  	<img data-srcset="<?php echo $hero_cropped_small_srcset[0] . ' ' . $hero_cropped_small_srcset[1] . 'w' ?>" alt="<?php echo esc_attr( $alt );?>"	sizes="<?php echo esc_attr( $hero_cropped_small_sizes );?>" class="hero__img lazyload" />
				  </picture>

				
				<?php endif ?>



			
				

				<?php if(!empty($hero_title)) : ?>
				<div class="hero__text-content">
						
						<h2 class="hero__title"><?php echo $hero_title ?></h2>
						<?php if(!empty($hero_title)) : ?>
						<h1 class="hero__subtitle"><?php echo $hero_subtitle ?></h1>
						<?php endif ?>
				</div>

			<?php endif ?>
			
			</div>
	</div>