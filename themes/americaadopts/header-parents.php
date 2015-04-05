<?php
/**
 * The Header for parents
 */
?><!DOCTYPE html>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
<![endif]-->
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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Static navbar -->
<div class="container"> 

                <h2 class="parentsprofileheaer"><?php the_title(); ?>     </h2>               
            

            
            </div>
<nav class="navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
<div>
      <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>               
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>

<div class="row">
<div class="navbar-right commonsearch visible-lg visible-md">
             <div id="bannerrighttop">
    <a class="orangetxt" href="<?php bloginfo('url'); ?>/find-a-family">BACK TO FIND A FAMILY</a>
  </div>
          </div>
          
     <div class="collapse navbar-collapse navbar-ex1-collapse">
     <ul id="menu-primary" class="nav navbar-nav">
<li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>"><?php if($isSingleParent) echo "MY";  else echo "OUR"; ?> LETTER</a> </li>
              <li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>?page=profile"><?php if($isSingleParent) echo "MY";  else echo "OUR"; ?> PERSONAL PROFILE</a></li>
               <li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>?page=album"><?php if($isSingleParent) echo "MY";  else echo "OUR"; ?> PHOTO ALBUM</a></li>
              <li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>?page=contact">CONTACT <?php if($isSingleParent) echo "ME";  else echo "US"; ?></a></li>  
</ul>

</div>
               
    </div>   
</div>
    </div>
</nav>