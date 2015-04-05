<!-- begin footer -->

<div class="clear"></div>



<div id="footertopbg">

	<div id="footertop">

		<div class="footerwidget01">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1')) : ?>
			<?php endif; ?>
		</div>

		<div class="footerwidget02">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2')) : ?>
			<?php endif; ?>
		</div>

		<div class="footerwidget03">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3')) : ?>
			<?php endif; ?>
		</div>

		<div class="footerwidget04">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 4')) : ?>
			<?php endif; ?>
		</div>
		<div class="clear"></div>

	</div>

</div>

<div id="footerbg" style="margin-top: 15px;">

	<div id="footer">

		<div class="footerleft"><a href="/pregnant">PREGNANT</a> |	<a href="/hoping-to-adopt">HOPING TO ADOPT</a> |	<a href="/find-a-family">FIND A FAMILY</a> |	<a href="/services">SERVICES</a> |	<a href="/about-us">ABOUT US</a> |	<a href="/resources">RESOURCES</a></div>

		<div class="footerright">
			<div style="float: right;"><a href="/terms-of-use-and-disclaimer">Terms of Use</a> | <a href="/privacy-policy">Privacy</a></div>
			<div style="float: right;margin-top: 3px;"><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></div>

		</div>

	</div>

</div>

</div>

<?php do_action('wp_footer'); ?>

<?php echo ot_option('tracking'); // tracking code ?>

<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-26707757-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();

</script>
<style type='text/css'>@import url('http://getbarometer.s3.amazonaws.com/assets/barometer/css/barometer.css');</style>
<script src='http://getbarometer.s3.amazonaws.com/assets/barometer/javascripts/barometer.js' type='text/javascript'></script>
<script type="text/javascript" charset="utf-8">
	BAROMETER.load('8Fg2wybB5yjfXQwMeGDHg');
</script>

</body>
</html>