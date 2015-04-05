<?php
/*
Template Name: Parent Profile
*/?>
<!DOCTYPE html>
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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Static navbar -->
<div class="container"> 

                <h2 class="parentsprofileheaer hidden-xs"><?php the_title(); ?>     </h2>               
 
            </div>
<nav class="navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
<div>
      <div class="navbar-header">

            <button type="button" class="navbar-toggle navbar-toggle-parents" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>               
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <h2 class="visible-xs parentsprofileheaerxs"><?php the_title(); ?> </h2>
        </div>

<div class="row">
<div class="navbar-right visible-lg visible-md parentsright">
             <div id="bannerrighttop">
    <a class="orangetxt" href="http://www.canadaadopts.com/adoption-profiles/">BACK TO ADOPTION PROFILES</a>
  </div>
          </div>
          
          
     <div class="collapse navbar-collapse navbar-ex1-collapse">
     
     <ul id="menu-primary" class="nav navbar-nav parentsnav">    
<li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>"> LETTER</a> </li>
              <li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>?page=profile"> PERSONAL PROFILE</a></li>
               <li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>?page=album"> PHOTO ALBUM</a></li>
              <li><a class="orangenav" href="<?php echo get_permalink($post->ID); ?>?page=contact">CONTACT </a></li> 
              <li class="visible-sm visible-xs"><a class="orangenav" href="http://www.canadaadopts.com/adoption-profiles/">BACK TO ADOPTION PROFILES</a></li> 
</ul>

</div>
               
    </div>   
</div>
    </div>
</nav>

<div class="container">

<?php if ($_GET["page"] == "") : ?>
		<?php include(TEMPLATEPATH . "/page_parentprofile_letter.php"); ?>
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
     


<?php wp_footer(); ?>
</body>
</html>