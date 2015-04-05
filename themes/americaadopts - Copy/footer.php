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

		</div><!-- #main container-->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			 <div class="footer text-center"><a href="http://www.americaadopts.com/adoption-profiles/">ADOPTION PROFILES</a> | <a href="http://www.americaadopts.com/pregnant/">PREGNANT?</a> | <a href="http://www.americaadopts.com/hoping-to-adopt/">HOPING TO ADOPT </a> | <a href="http://www.americaadopts.com/services/">SERVICES</a> | <a href="http://www.americaadopts.com/resources/">RESOURCES</a> | <a href="http://www.americaadopts.com/about-us/">ABOUT US</a></br>
<small><a href="http://www.americaadopts.com/terms-of-use-and-disclaimer/" class="orangetxt">Terms of Use </a>| <a class="orangetxt" href="http://www.americaadopts.com/privacy-policy/">Privacy</a></small></br>
<small>Copyright © 2014. All rights reserved. America Adopts </small>
<div class="visible-xs">
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/twitter.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/facebook.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/Pinterest-icon.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/googleplus.png" />
          </div>

</div>

		</footer><!-- #colophon -->
	
	<?php wp_footer(); ?>
</body>
</html>