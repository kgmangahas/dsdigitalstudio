<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DSDigitalStudio
 */

?>



<?php wp_footer(); ?>

<div class="wrapper--none footer footer--pink">
		<div class="wrapper">
			<div class="footer">				
				<?php $spriteUrl = get_theme_file_uri('assets/images/sprites/sprite-da968e00.svg'); ?>
				
				<span class="icon icon--ds footer__sign" style="background-image: url(<?php echo $spriteUrl ?>);">					
				</span>						

				<div class="footer__copy">&copy;  <?php echo date('Y') ?> <?php echo bloginfo('name'); ?> </div>

				<div class="footer__social-media">
					<a href="https://m.facebook.com/donnasalvaneradesignco/" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--fb" style="background-image: url(<?php echo $spriteUrl; ?>);"></span></a>
				          <a href="#" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--twitter" style="background-image: url(<?php echo $spriteUrl; ?>);"></span></a>
				          <a href="https://www.instagram.com/bespokebrands/" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--instagram" style="background-image: url(<?php echo $spriteUrl; ?>);"></span></a>
				          <a href="#" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--tumbler" style="background-image: url(<?php echo $spriteUrl; ?>);"></span></a>
							
					
				</div>
			
				
			</div>
		</div>
</div>


		<script src="<?php bloginfo('template_directory');?>/assets/scripts/App-42eaa20683.js"></script>
		<script src="<?php bloginfo('template_directory');?>/assets/scripts/Vendor-73d66e3e45.js"></script>
		

</body>
</html>
