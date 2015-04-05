<?php
/**
 * The Header for homepage
 */
?><!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<!--[if lt IE 9]>
      <script src="http://dev.blissfulinterfaces.com/aa/wp-content/themes/americaadopts/js/html5shiv.js"></script>
      <script src="http://dev.blissfulinterfaces.com/aa/wp-content/themes/americaadopts/js/respond.min.js"></script>
    <![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<!-- Static navbar -->
<div class="container"> 
<a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img class="aalogo" src="<?php bloginfo('template_url'); ?>/americaadopts-logo.png" />                
            </a>
             <div class="pull-right hidden-xs headerright">
        <div class="nav navbar-nav navbar-right orangetxt">
         <a class="orangetxt" href="http://www.canadaadopts.com/cgi-bin/ultimatebb.cgi">Forums</a> &nbsp; | &nbsp;
            <a class="orangetxt" href="http://www.canadaadopts.com/adoption-blog/">Blog</a> &nbsp; | &nbsp;
           <a class="orangetxt" href="mailto:info@canadaadopts.com">Contact</a>      
          </div>
          <div>
          <a href="https://twitter.com/canadaadopts"><img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/twitter.png" /></a>
          <a href="https://www.facebook.com/CanadaAdopts"><img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/facebook.png" /></a>
          <a href="http://www.pinterest.com/canadaadopts/"><img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/Pinterest-icon.png" /></a>
          
          </div>
        </div>
            
            </div>
<nav class="navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
<div class="row">
      <div class="navbar-header">
<div class="pull-left visible-xs aamobileicons">
<a class="orangetxt" href="http://www.canadaadopts.com/cgi-bin/ultimatebb.cgi">Forums</a>  |
            <a class="orangetxt" href="http://www.canadaadopts.com/adoption-blog/">Blog</a>  |
            <a class="orangetxt" href="mailto:info@canadaadopts.com">Contact</a>
            
            <div class="clearfix"></div> 
                
          </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>               
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>

<div>
<div class="navbar-right searchbg visible-lg visible-md">
             <div id="bannerrighttop">
    <form id="searchformheader" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" value="SEARCH >>" name="s" class="input-medium searchboxHome" onfocus="if (this.value == 'SEARCH >>') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SEARCH >>';}"/>
      <input type="hidden" id="searchbutton" value="Go"/>
    </form>
  </div>
          </div>
      <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );			
        ?>
               
    </div>   
</div>
    </div>
</nav>