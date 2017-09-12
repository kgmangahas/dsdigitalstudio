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
					<div class="go-to-next--center go-to-next--t-b-border row__bottom-padding">
						<h2 class="go-to-next__title"><?php echo $know_more_title; ?></h2>
						<div class="go-to-next__content">
							<ul>
								<li><a href="<?php echo $link1_reference_page;?>"><?php echo $link1_text; ?></a></li>
								<?php if(!empty($link2_text)) :  ?>
								<li><a href="<?php echo $link2_reference_page;?>"><?php echo $link2_text; ?></a></li>
								<?php endif ?>
								<?php if(!empty($link3_text)) : ?>
								<li><a href="<?php echo $link3_reference_page;?>"><?php echo $link3_text; ?></a></li>
								<?php endif ?>

							</ul>

						</div>
						
					</div>
				</div>
			</div>
		</div>;