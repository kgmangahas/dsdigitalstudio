<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DSDigitalStudio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dsdigitalstudio' ); ?></a>


	<!-- header -->
	<header class="site-header" role=banner>
			<div class="site-header__wrapper ">
				<div class="site-header__logo ">
					<a class="site-header__brand" href="/"><img src="assets/images/ds-logo.png"></a>					
				</div>
				
				
				<!--navbar-->
				<div class="site-header__menu-icon">           
					<div class="site-header__menu-icon__middle"></div>      
				</div>
				
				<div class="site-header__menu-content">

						
					<div class="site-header__name">
						donna&nbsp;salvanera
					</div>


					<nav class="primary-nav primary-nav--top">
						<ul class="navbar">
							<li><a href="#">HOME</a></li>
							<li><a href="#about">ABOUT</a></li>
							<li><a href="#services">WORK WITH US</a></li>
							<li><a href="#">CONTACT</a></li>
							<li><a href="#">BLOG</a></li>
						</ul>
					</nav>

					<!-- if the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu_menu_class-usage-bug?replies=4 -->
						
						<?php
								wp_nav_menu( array(
									'theme_location' 	=> 'menu-1',
									'container' 		 	=> 'nav',
									'container_class'	=> 'primary-nav primary-nav--top',
									'menu_class'			=> 'navbar'							
								
								));
						
						?>

					
					<div class="social-icons social-icons--b-padding social-icons__menu ">
						<a href="#" class="social-icons__icon"><span class="icon icon--fb"></span></a>
				          <a href="#" class="social-icons__icon"><span class="icon icon--twitter"></span></a>
				          <a href="#" class="social-icons__icon"><span class="icon icon--instagram"></span></a>
				          <a href="#" class="social-icons__icon"><span class="icon icon--tumbler"></span></a>
									
					</div>
				
					


				</div>

				
			</div>

			
			
		</header>

	<div id="content" class="site-content">
