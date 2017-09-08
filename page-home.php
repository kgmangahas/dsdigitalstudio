<?php
/*
	Template Name: Home Page

 */

get_header(); ?>

<div class="hero hero__top-padding">
			<div class="wrapper">
				

				<picture>
					<source sizes="1164px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--large.png 1164w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--large-hi-dpi.png 2328w" media="(min-width: 800px)">
					<source sizes="769px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--medium.png 769w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--medium-hi-dpi.png 1538w" media="(min-width: 530px)">

					<img srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--small.png 188w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/hero--small-hi-dpi.png 376w" alt="peonies with laptop" class="hero__img">	
				</picture>

				<div class="hero__text-content">
						
						<h2 class="hero__title">A design studio for and creative resource for</h2>
						<h1 class="hero__subtitle">passion-driven female hustlepreneurs</h1>
						
				</div>
			
			</div>
		</div>
		
		
		<div id="about" class="page-section">
			<div class="wrapper">
				<div class="row row--gutters">
					<div class="row__medium-5 row__sm-5 about__t-l-padding-on-small">
						<picture>
							<source sizes="456px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me--large.png 456w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me--large-hi-dpi.png 911w" media="(min-width: 1000px)">
							<source sizes="229px" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me--medium.png 229w, assets/images/me--medium-hi-dpi.png 458w" media="(min-width: 530px)">
							<img srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/images/me--small.png 333w, <?php bloginfo('stylesheet_directory'); ?>/assets/images/me--small-hi-dpi.png 665w" alt="woman sitting">
						</picture>
					</div>
					<div class="row__medium-7 row__sm-7" >
						<div class="generic-content-container">
							<h2 class="headline headline--italic headline--darkrose headline--no-t-margin">Here at DS Digital Studio, we are passionate about your success</h2>
							<div class="about__text-content">	
								<p>We strongly believe that you are the greatest asset of your own brand – so much more than just a logo or a colour palette. <br>
								 We hear your story and creatively interprets it that your brand resonates nothing but you and your unique values.</p>
							
								<a class="about--right about__link" href="#">LEARN MORE</a>
							</div>
						</div>
							
					</div>
								
				</div>				
				
			</div>
			
		</div>
		
		<div id="services" class="page-section">
			<div class="wrapper wrapper--none">	
				<h1 class="headline headline__bg headline--center headline__absolute">SERVICES</h1>
				<h2 class="headline headline--center headline--italic headline--big headline--no-t-margin headline__top headline--t-margin">let' s work together </h2>
				<h3 class="headline headline__sub headline--center headline--darkrose headline--no-t-margin">READY TO BUILT SOMETHING AWESOME?</h3>
			
			
				<div class="row row--gutters-small row__top-padding">	
					<div class="row__medium-6">
						<div class="services services--center">
							<div class="services__border">			
								<span class="icon icon--branding services__icon">					
								</span>				
								
								<p>Create your most compelling brand through brilliant and heartfelt designs.</p>
								<a class="services__link" href="">Learn more</a>
							</div>
						</div>
						
					</div>

					<div class="row__medium-6 row__top-padding--single">
						<div class="services services--center">
							<div class="services__border">
								<span class="icon icon--webdesign services__icon">					
									</span>	
								
								<p>Elevate your business to its peak through intentional website design</p>
								<a class="services__link" href="">Learn more</a>
							</div>
						</div>
						
					</div>
				
		
				</div>
			</div>
			


		</div>
		
		
		
		
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
