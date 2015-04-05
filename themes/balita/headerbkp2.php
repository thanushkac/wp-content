<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<!--?php
        if(get_option(TK.'_seo_check') == 'true' ):
            tk_keywords_site();
            tk_description_site();
        endif;
        if((get_option(TK.'_seo_follow', '') == 'true') && is_tag() || is_tax()) tk_head_follow();
    ?-->
<title>
<?php wp_title(''); ?>
</title>
<!--?php tk_favicon(); ?-->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="http://yogavedic.co.uk/wp-content/themes/balita/style.css" />
<link href='http://fonts.googleapis.com/css?family=Overlock:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<meta name="google-site-verification" content="ZHlwvFkDddiIaJZboXw2e-nOxKbL8KTiaIht9AQuRkY" />
</head>
<?php $classbody  = (tk_is_product_page() || tk_is_wpsc_page() && is_home())? 'wpsc-product-page':''; ?>
<?php $body_classes = join( ' ', get_body_class($classbody) ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body class="<?php echo $body_classes; ?>">
<!--<![endif]-->

<div id="headBanner">
  <p>FREE shipping with All orders over £40 within UK</p>
</div>
<div id="container">
<header id="header" class="clearfix" role="banner">
    <h1 id="logo"><a href="http://yogavedic.co.uk/">
  <img src="http://yogavedic.co.uk/wp-content/uploads/2012/07/logo.jpg"/>  </a></h1>
  <div id="loginSearch">
    <p class="loginMenu">
      <?php if ( is_user_logged_in ()){ ?>
      <a href="<?php echo get_option('user_account_url'); ?>" title="My Account">
      <?php _e('My Account', 'tokokoo'); ?>
      </a> |
      <?php } ?>
      <?php if(!is_user_logged_in() && get_option('users_can_register') && get_option('require_register')) { wp_register('',' /');} ?>
      <?php wp_loginout(home_url('/')); ?>
    </p>
    <?php get_search_form(); ?>
  </div>
  <div class="clear"></div>
  <nav id="main-nav" class="clearfix" role="navigation">
    <?php 
				if(has_nav_menu('header'))
					wp_nav_menu( array( 'menu_class' => 'menu', 'menu_id' => 'header_menu', 'theme_location' => 'header', 'container' => '' ) );
				else
					echo '<ul id="header_menu" class="menu sf-js-enabled"><li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-70"><a href="http://localhost/wpec38/">Home</a></li></ul>';
			?>
    <div class="cartBox">
      <div class="cartInfo">
        <h3>
          <?php _e('Shopping Cart', 'tokokoo'); ?>
        </h3>
        <div class="totalItem totalitems"><?php printf( _n('%d item', '%d items', wpsc_cart_item_count(), 'tokokoo'), wpsc_cart_item_count() ); ?></div>
        <div class="totalCost totalprice"><?php echo wpsc_cart_total_widget(); ?></div>
      </div>
      <div class="cartDrop"><a href="<?php echo get_option('shopping_cart_url'); ?>">
        <?php _e('detail', 'tokokoo'); ?>
        </a></div>
      <div class="panel"><?php echo wpsc_shopping_cart(); ?></div>
    </div>
  </nav>
  <!-- /#main-nav --> 
  
</header>
<!-- /#header -->

<div class="clear"></div>
<div id="main" role="main">
<?php $idsection  = (!is_single() && !is_archive() && !is_category() && !is_tag() && !is_page() && !is_search() && !is_404() || tk_is_wpsc_page() || is_tax())? 'content':'blogPage'; ?>
<section id="main-content" class="<?php echo $idsection; ?>">
<?php if(!is_home() && !is_front_page() || is_home() && tk_is_wpsc_page()) { ?>
<div id="breadcrumbs">
  <?php tk_the_breadcrumb('&raquo;'); ?>
</div>
<?php } ?>
