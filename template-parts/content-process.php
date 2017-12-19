<?php
$process_title = get_field("process_title");
$process_set_1 = get_field("process_set_1");
$process_set_2 = get_field("process_set_2");


?>


<div id="process" class="page-section">
			<div class="wrapper wrapper--none">	
				<div class="row row__top-padding">	
					<div class="row__medium-12">
						<div class="services services--center">
							<div class="services__border">			
								<h2 class="head headline--center headline--thin">
									the <br> <span class="headline--regular">
									<?php echo $process_title; ?>
									</span> <br> process
								</h2>							
								
							</div>
						</div>
						<span class="icon icon--triangles services__icon services__icon--pull-top">					
						</span>	
					</div>
		
				</div>

				<div class="row row--gutters">
					
					<div class="row__medium-6">
						<div class="generic-content-container">
							<p>								
								<?php echo $process_set_1; ?>
							</p>

						</div>

					</div>

					<div class="row__medium-6">
						<div class="generic-content-container">
							<p>
								
								<?php echo $process_set_2; ?>
							</p>

						</div>
					</div>

				</div>

			</div>
		</div>