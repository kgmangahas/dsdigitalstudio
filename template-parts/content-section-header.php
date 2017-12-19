<?php
$services_title = get_field("services_title");
$services_subtitle = get_field("services_subtitle");
$services_bg_title = get_field("services_bg_title");
$services_text = get_field("services_text")
?>


<h1 class="headline headline__bg headline--center headline__absolute">
	<?php if(!empty($services_bg_title)) echo $services_bg_title; ?>
</h1>
<h2 class="headline headline--center headline--big headline--no-t-margin headline__top headline--t-margin"><?php echo $services_title; ?> </h2>
<h3 class="headline headline__sub headline--center headline--darkrose headline--no-t-margin"><?php echo $services_subtitle;?></h3>

<?php if(!empty($services_text)) : ?>

<div class="generic-content-container"> 							
							<div class="contact__text-content contact__text-content--center">	
								<p><?php echo $services_text?></p>
							
								
							</div>
				</div>

<?php endif ?>



