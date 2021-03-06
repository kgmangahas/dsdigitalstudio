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
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	
	<!--GOOGLE FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Lato:300i,300,400,400i,700"  rel="stylesheet">
			

	<?php wp_head(); ?>

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dsdigitalstudio' ); ?></a>
<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
//echo $image[0];

$spriteUrl = get_theme_file_uri('assets/images/sprites/sprite-da968e00.svg');
$spriteUrlBG = 'background-image: url(' . get_theme_file_uri('assets/images/sprites/sprite-da968e00.svg') . ');';
 ?>
	<!-- header -->
	<header class="site-header" role=banner>
			<div class="site-header__wrapper ">
				<div class="site-header__logo ">
					<a class="site-header__brand" href="<?php echo site_url(); ?> "><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ds-logo.png"></a>					
				</div>
				
				
				<!--navbar-->
				<div class="site-header__menu-icon">           
					<div class="site-header__menu-icon__middle"></div>      
				</div>
				
				<div class="site-header__menu-content">

						
					<div class="site-header__name">
						donna&nbsp;salvanera
					</div>


					

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
						<a href="https://m.facebook.com/donnasalvaneradesignco/" class="social-icons__icon"><span class="icon icon--fb" style="<?php echo $spriteUrlBG;?>"></span></a>
				          <a href="#" class="social-icons__icon"><span class="icon icon--twitter" style="<?php echo $spriteUrlBG;?>"></span></a>
				          <a href="https://www.instagram.com/bespokebrands/" class="social-icons__icon"><span class="icon icon--instagram" style="<?php echo $spriteUrlBG;?>"></span></a>
				          <a href="#" class="social-icons__icon"><span class="icon icon--tumbler" style="<?php echo $spriteUrlBG;?>"></span></a>
									
					</div>
				
					


				</div>

				
			</div>

			
			
		</header>
	

	<div id="content" class="site-content">
