<?php

	$know_more_title = get_field("know_more_title");
	$link1_text = get_field("link1_text");
	$link1_reference_page = get_field("link1_reference_page");
	$link2_text = get_field("link2_text");
	$link2_reference_page = get_field("link2_reference_page");
	$link3_text = get_field("link3_text");
	$link3_reference_page = get_field("link3_reference_page");


?>


	<div id="go-to-next" class="page-section">
			<div class="wrapper">
				<div class="go-to-next">
					<div class="go-to-next--center  row__bottom-padding">
						<h2 class="go-to-next__title"><?php echo $know_more_title; ?></h2>

						<div class="row row--gutters go-to-next__content go-to-next--realign-padding">	

								<div class="row__medium-6 ">	<a class="go-to-next__link" href="<?php echo site_url(); echo $link1_reference_page;?>"><?php echo $link1_text; ?></a></div>
								<div class="row__medium-6">	<a class="go-to-next__link" href="<?php echo site_url(); echo $link2_reference_page;?>"><?php echo $link2_text; ?></a></div>
						</div>
						
				</div>
			</div>
		</div>
	</div>
