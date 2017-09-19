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

<div class="wrapper ">

			<div class="footer">				

				
				<span class="icon icon--ds footer__sign">					
				</span>						

				<p class="footer__copy">&copy;  <?php echo date('Y') ?> <?php echo bloginfo('name'); ?> </p>

				<div class="footer__social-media">
					<a href="#" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--fb"></span></a>
				          <a href="#" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--twitter"></span></a>
				          <a href="#" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--instagram"></span></a>
				          <a href="#" class="social-icons__icon social-icons__icon--footer"><span class="icon icon--tumbler"></span></a>
							
					
				</div>
			
				
			</div>
		</div>


		<script src="<?php bloginfo('template_directory');?>/assets/scripts/App-42eaa20683.js"></script>
		<script src="<?php bloginfo('template_directory');?>/assets/scripts/Vendor-73d66e3e45.js"></script>
		

</body>
</html>
