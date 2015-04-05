<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="footer text-center"><a href="<?php bloginfo('template_url'); ?>/pregnant/">PREGNANT?</a> | <a href="<?php bloginfo('template_url'); ?>/hoping-to-adopt/">HOPING TO ADOPT </a> | <a href="<?php bloginfo('template_url'); ?>/find-a-family/">FIND A FAMILY</a> | <a href="<?php bloginfo('template_url'); ?>/services/">SERVICES</a> | <a href="<?php bloginfo('template_url'); ?>/resources/">RESOURCES</a> | <a href="<?php bloginfo('template_url'); ?>/about-us/">ABOUT US</a></br>
<small><a href="<?php bloginfo('template_url'); ?>/terms-of-use-and-disclaimer/" class="orangetxt">Terms of Use </a>| <a class="orangetxt" href="<?php bloginfo('template_url'); ?>/privacy-policy/">Privacy</a></small></br>
<small>Copyright © 2014. All rights reserved. America Adopts </small></div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>