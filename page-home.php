<?php
/*
	Template Name: Home Page

 */



get_header(); ?>


<?php get_template_part('template-parts/content', 'hero'); ?>
<?php get_template_part('template-parts/content', 'about'); ?>
<?php get_template_part('template-parts/content', 'services'); ?>
	
		
		
		
		
		
		
		
		
		<div id="go-to-next" class="page-section">
			<div class="wrapper">
				<div class="go-to-next">
					<div class="go-to-next--center go-to-next--t-b-border row__bottom-padding">
						<h2 class="go-to-next__title">WANT TO KNOW MORE?</h2>
						<div class="go-to-next__content">
							<ul>
								<li><a href="">Testimonials</a></li>
								<li><a href="">Portfolio</a></li>
							</ul>

						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="opt-ins" class="page-section page-section__last">
			<div class="wrapper">
				<div class="opt-ins opt-ins__img">					
					<!-- <img class="opt-ins__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/sign-up-bg.png" alt="mug with coffee"> -->
					<h3 class="opt-ins__title">get free images sent to you monthly </h3>
					<div class="opt-ins__content">
						<p>Enter your email below to get FREE photos and resources for your business delivered to your inbox every month. </p>
						<form  role="form">
							<input type="text"  id="subscribe-email" placeholder="" class="opt-ins__email">						
							
							<input type="submit" class="opt-ins__submit" value="sign up">
						</form>		
					</div>
					
				</div>
			</div>	
		</div>
		

	

<?php

get_footer();
