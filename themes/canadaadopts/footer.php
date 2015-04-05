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
            

			<div class="footer text-center">
            <a href="http://www.canadaadopts.com/adoption-profiles/">ADOPTION PROFILES</a> | 
            <a href="http://www.canadaadopts.com/adoption-myths-expectant-parents/">UNPLANNED PREGNANCY</a> | <a href="http://www.canadaadopts.com/hoping-adopt/adoption-myths/">HOPING TO ADOPT </a> | <a
        href="http://www.canadaadopts.com/services/adoption-profile-packages/">SERVICES</a> | <a href="http://www.canadaadopts.com/resources/open-adoption/">ADOPTING IN CANADA </a> </br>
    <small><a href="http://www.canadaadopts.com/terms-use-disclaimer/" class="orangetxt">Terms of Use </a></small>
    </br>
    <small>Copyright © 2014. All rights reserved. Canada Adopts</small>
    <div class="visible-xs">
           <a href="https://twitter.com/canadaadopts"><img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/twitter.png" /></a>
          <a href="https://www.facebook.com/CanadaAdopts"><img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/facebook.png" /></a>
          <a href="http://www.pinterest.com/canadaadopts/"><img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/Pinterest-icon.png" /></a>
          
          </div>
  </div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>