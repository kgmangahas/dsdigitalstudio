<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DSDigitalStudio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="wrapper">
			<section class="error-404 not-found">
				<div class="generic-content-container">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri(); echo '/assets/images/404--large.png'; ?>" alt="note with not found message"></a>
					
				</div>
				
			</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
