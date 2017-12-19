<?php
$package_name = get_field("package_name");
$package_price_text = get_field("package_price_text");
$package_timeframe_text = get_field("package_timeframe_text");
$package_details = get_field("package_details");

$style_ctr = 0;


?>

<div id="services--branding-web" class="page-section">
	<div class="wrapper wrapper--none wrapper--pull-top">
		<?php $loop = new WP_Query(array('post_type' => 'packages', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
			

		<div class="<?php if($style_ctr == 0) echo 'page-section--pull-top-till-medium';  ?>  page-section--t-b-margin "> 
			<?php $style_ctr++; ?>

			<h3 class="headline--small headline--darkrose headline--center headline--t-margin" > <?php the_title(); ?>  <span class="headline--thin"><br><?php esc_html_e(the_field('package_price_text')); ?> <br>
				<?php esc_html_e(the_field('package_timeframe_text')); ?> </span>

			</h3>
			<h3 class="headline--small headline--darkrose headline--center">
			</h3>

		</div>

		<div class="row row--flex row--gutters ">
			<?php if($style_ctr % 2 == 0) : ?>
				
				<div class="row__medium-5 ">
					<div class="generic-content-container generic-content-container--l-r-margin">
						<h3 class="headline--small headline--regular headline--left-margin "><?php  esc_html_e(the_field('package_name')); ?></h3>
						<?php 
							the_field('package_details');


						?>
					</div>	
				</div>

				<div class="row__medium-7  ">
					<?php 
						if(has_post_thumbnail()) {
							the_post_thumbnail();							
						}				
					
					?>

				</div>
	

				
				

			<?php else: ?>
				<div class="row__medium-7  ">
					<?php 
						if(has_post_thumbnail()) {
							the_post_thumbnail();							
						}				
					
					?>

				</div>
				
				<div class="row__medium-5 ">
					<div class="generic-content-container generic-content-container--l-r-margin">
						<h3 class="headline--small headline--regular headline--left-margin "><?php  esc_html_e(the_field('package_name')); ?></h3>
						<?php 
							the_field('package_details');


						?>
					</div>	
				</div>

			<?php endif; ?>

			

		</div>

		<?php endwhile;
		wp_reset_query();
		?>
		



	</div>
</div>
