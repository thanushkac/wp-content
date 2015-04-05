<?php
/*
Template Name: Parent Profile
*/
?>
<?php
$isSingleParent = get_post_meta($post->ID, 'isSingleParent', true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?><?php if (is_home()) {
	echo " class=\"homehtmlbg\"";
}?>>
<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="language" content="en"/>

	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
		echo ' :';
	} ?> <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon"/>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/americaadoptstwentyten/css/child.style.css"/>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e("RSS Feed", 'organicthemes'); ?>" href="<?php bloginfo('rss2_url'); ?>"/>
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e("Atom Feed", 'organicthemes'); ?>" href="<?php bloginfo('atom_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<?php wp_head(); ?>

</head>
<body>

<style type="text/css">


		}

</style>

<div id="wrap">

	<div id="content" style="padding: 30px 0 30px 0;">

		<!--  main column -->
		<div style="font-size:36px;color:#3874A4;"><?php wp_title(''); ?></div>

		<!-- Navigation Bar -->
		<div style="width:980px;height:25px;margin-top:15px;">
			<div style="float:left;"><a href="<?php echo get_permalink($post->ID); ?>"><?php if($isSingleParent) echo "MY";  else echo "OUR"; ?> LETTER</a> &nbsp; / &nbsp; <a href="<?php echo get_permalink($post->ID); ?>?page=profile"><?php if($isSingleParent) echo "MY";  else echo "OUR"; ?> PERSONAL PROFILE</a> &nbsp; / &nbsp; <a href="<?php echo get_permalink($post->ID); ?>?page=album"><?php if($isSingleParent) echo "MY";  else echo "OUR"; ?> PHOTO ALBUM</a>
				&nbsp;
				/ &nbsp; <a href="<?php echo get_permalink($post->ID); ?>?page=contact">CONTACT <?php if($isSingleParent) echo "ME";  else echo "US"; ?></a></div>
			<div style="float:right;"><a href="/find-a-family">BACK TO FIND A FAMILY</a></div>
		</div>

		<?php if ($_GET["page"] == "") : ?>
		<?php include(TEMPLATEPATH . "<?php bloginfo('url'); ?>/page_parentprofile_letter.php"); ?>
		<?php endif; ?>
		<?php if ($_GET["page"] == "profile") : ?>
		<?php include(TEMPLATEPATH . "/page_parentprofile_profile.php"); ?>
		<?php endif; ?>
		<?php if ($_GET["page"] == "album") : ?>
		<?php include(TEMPLATEPATH . "/page_parentprofile_album.php"); ?>
		<?php endif; ?>
		<?php if ($_GET["page"] == "contact") : ?>
		<?php include(TEMPLATEPATH . "/page_parentprofile_contact.php"); ?>
		<?php endif; ?>

	</div>
</div>

<?php do_action('wp_footer'); ?>

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


</body>

</html>