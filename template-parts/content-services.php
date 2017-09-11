	
<?php
$services_title = get_field("services_title");
$services_subtitle = get_field("services_subtitle");
$services_bg_title = get_field("services_bg_title");
$ctr = 0;


?>


<!-- services -->
	<div id="services" class="page-section">
		<div class="wrapper wrapper--none">	
			<h1 class="headline headline__bg headline--center headline__absolute">
				<?php if(!empty($services_bg_title)) echo $services_bg_title; ?>
			</h1>
			<h2 class="headline headline--center headline--italic headline--big headline--no-t-margin headline__top headline--t-margin"><?php echo $services_title; ?> </h2>
			<h3 class="headline headline__sub headline--center headline--darkrose headline--no-t-margin"><?php echo $services_subtitle;?></h3>
			
			
			<div class="row row--gutters-small row__top-padding">
				<?php $loop = new WP_Query(array('post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="row__medium-6 
					<?php if($ctr>0) echo 'row__top-padding--single';?>
					">
						<div class="services services--center">
							<div class="services__border">			
								<span class="services__icon <?php the_field('service_icon'); ?>">					
								</span>				
					
								<p><?php the_title(); ?></p>
								<a class="services__link" href=""><?php esc_html_e(the_field('services_link_text')); ?></a>
							</div>
						</div>

					</div>
					<?php $ctr += 1; ?>
				<?php endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
	</div>