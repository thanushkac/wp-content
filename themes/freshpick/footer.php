<?php

global $options;

foreach ($options as $value) {

    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }

}

?>

</div>

	<!-- content end -->	

	</div></div>

		

	<!-- footer starts here -->	

	<div id="footer-outer" class="clear"><div id="footer-wrap">

	

		<div class="col-a">
<h3></h3>
<div class="footercontact">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=363155993694944";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="http://www.facebook.com/pages/Broden-Mickelsen/158750924238893" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
</div>
<div class="footercontact"><a href="http://feeds.feedburner.com/BrodenMickelsenLawBlog"><img src="wp-content/themes/freshpick/images/rss_orange.jpg" width="21" height="21" class="rss" /></a><span class="rss">RSS Subscribe</span></a></div>

<br />

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Footer") ) : ?>

<?php if (function_exists('get_flickrrss')) { ?>

			<h3>Flickr Photostream</h3>					

				

			<p class="thumbs">

			<?php get_flickrrss(); ?> 				

			</p>

<?php } ?>

			

	<?php endif; ?>	
    



		</div>
        
<div class="col-a">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Middle Footer") ) : ?>	

<h3>Recent Posts</h3>

			

			

				<ul>				

					<?php wp_get_archives('type=postbypost&limit=7&'); ?>
                    				

  </ul>



		<?php endif; ?>		

		</div>		

	

		<div class="col-b">

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Footer") ) : ?>

			<h3><?php if ($fp_about_title) { echo $fp_about_title; } else { echo "About"; } ?></h3>			

			

			<p class="abouttext">

			<img src="<?php if ($fp_image_url) { echo $fp_image_url; } else { ?><?php bloginfo('template_url'); ?>/images/gravatar.jpg<?php } ?>" width="40" height="40" alt="about" class="float-left" />



<?php if ($fp_about_message) { echo $fp_about_message; } else { echo "The Broden and Mickelsen law firm is exclusively dedicated to providing aggressive and ethical representation to individuals charged with criminal offenses. Our law firm is committed to the belief that a person accused of a criminal offense deserves to be represented by an experienced team of lawyers who provide a vigorous defense for a reasonable fee."; } ?></p>

						

	<?php endif; ?>		

		</div>		

	

	<!-- footer ends -->		

	</div></div>

	

	

<!-- wrap ends here -->

</div>

<?php wp_footer(); ?>


 <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-12096829-1");
pageTracker._trackPageview();
} catch(err) {}
</script>


</body>

</html>