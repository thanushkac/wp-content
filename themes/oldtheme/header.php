<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?><?php if (is_home()) { echo " class=\"homehtmlbg\""; }?>>
<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="language" content="en" />

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/americaadoptstwentyten/css/child.style.css" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e("RSS Feed", 'organicthemes'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e("Atom Feed",'organicthemes'); ?>" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/superfish.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/hoverIntent.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/iepngfix_tilebg.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabber.js"></script>

    <!--IE6 Fix-->
    <style type="text/css">
        img, div, a, input, body, blockquote, li {
            behavior: url(<?php bloginfo('template_url'); ?>/images/iepngfix.htc);
        }
    </style>

    <script type="text/javascript">
     var $j = jQuery.noConflict();
        $j(document).ready(function() {
            $j('.menu').superfish();
        });
    </script>

</head>

<body <?php if (is_home()) { echo " class=\"homebodybg\""; }?>>

<div id="wrap">

    <div id="header">
			<div style="position: relative;">
				<a href="/" style="position: absolute;top: 30px;"><img src="/wp-content/themes/americaadoptstwentyten/images/logo_aa.gif"/></a>

				<div style="position: absolute; left: 842px; top: 56px; width: 135px;">
					<a href="http://twitter.com/americaadopts"><img width="30" height="25" src="/wp-content/themes/americaadoptstwentyten/images/menubar-soc_twit.gif"/></a>
					<a href="http://www.facebook.com/AmericaAdopts"><img width="27"  height="25" src="/wp-content/themes/americaadoptstwentyten/images/menubar-soc_face.gif"/></a>
					<a href="http://www.pinterest.com/americaadopts" style="margin-left: 5px;"><img width="25" height="25" src="/wp-content/themes/americaadoptstwentyten/images/pinterest.png"/></a>
					<a href="http://www.YouTube.com/AmericaAdopts"><img width="34" height="25" src="/wp-content/themes/americaadoptstwentyten/images/menubar-soc_utube.gif"/></a>
				</div>
				<div style="position: absolute; left: 884px; top: 30px; width: 205px;"><a href="/blog">Blog</a> | <a href="mailto:info@americaadopts.com">Contact</a></div>
			</div>

    </div>
    
    <div id="homepagetop">

        <div style="border-style: solid;border-color: #DDDDDD;border-width: 0 0 1px 0;position:absolute;margin-top:29px;width:980px;"></div>

            <div id="navbar">
                <?php if ( function_exists('wp_nav_menu') ) { // Check for 3.0+ menus
				wp_nav_menu( array( 'title_li' => '', 'depth' => 4, 'container_class' => 'menu' ) ); }
				else {?>
				<ul class="menu"><?php wp_list_pages('title_li=&depth=4'); ?></ul>
				<?php } ?>
            </div>

            <?php if (is_home())
				{
					echo '';
				} else { ?>
					<div class="navbarright">
                        <form id="searchformheader" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                          <input type="text" value="" name="s" id="searchbox"/>
                          <input type="submit" value="Search"/>
                        </form>
                    </div>

                </div> <?php ;
				}
			?>