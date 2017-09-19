<?php

$hero_title = get_field("site_description");
$hero_subtitle = get_field("site_sub_description");


?>

<!-- hero -->
<div class="hero hero__top-padding">
			<div class="wrapper">
				

				<picture>
					<source sizes="1164px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--large.png 1164w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--large-hi-dpi.png 2328w" media="(min-width: 800px)">
					<source sizes="769px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--medium.png 769w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--medium-hi-dpi.png 1538w" media="(min-width: 530px)">

					<img srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--small.png 188w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--small-hi-dpi.png 376w" alt="peonies with laptop" class="hero__img">	
				</picture>
				

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