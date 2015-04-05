<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
         <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body>
<!-- Static navbar -->
<div class="container"> <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img class="aalogo" src="<?php bloginfo('template_url'); ?>/americaadopts-logo.png" />
                
            </a>
             <div class="pull-right hidden-xs headerright">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php bloginfo('template_url'); ?>/blog/">Blog</a></li> 
            <li><a href="mailto:info@americaadopts.com">Contact</a></li>      
          </ul>
          <div>
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/twitter.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/facebook.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/pinterest-icon.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/youtube.png" />
          </div>
        </div>
            
            </div>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">
<div class="pull-left visible-xs aamobileicons">
            <a href="<?php bloginfo('template_url'); ?>/blog/">Blog | </a> 
            <a href="mailto:info@americaadopts.com">Contact</a>
            <div class="clearfix"></div> 
            <div>
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/twitter.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/facebook.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/pinterest-icon.png" />
          <img class="aaicons" src="<?php bloginfo('template_url'); ?>/icons/youtube.png" />
          </div>     
          </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>               
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
       <ul class="nav navbar-nav navbar-right">
             <div id="bannerrighttop" class="searchbg">
    <form id="searchformheader" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" value="SEARCH >>" name="s" id="searchboxHome" onfocus="if (this.value == 'SEARCH >>') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SEARCH >>';}"/>
      <input type="hidden" id="searchbutton" value="Go"/>
    </form>
  </div>
          </ul>

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
</nav>