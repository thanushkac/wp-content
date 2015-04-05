<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>



<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>



<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />



<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/screen.css" />



<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>



<?php wp_head(); ?>

</head>



<body>



<!-- wrap starts here -->

<div id="wrap">



<!--header -->
<div id="header">			
				
		<div  id="logo"><img src="http://www.brodenmickelsen.com/images/BrodenMickelsen_logo.jpg" alt="Dallas Criminal Defense Attorneys" width="340" height="70" vspace="10" border="0" id="BrodenMickelsen_logo" /></div>
		<div id="certified">Certified by the<br />
		  Texas Board of <br />
	    Legal Specialization as</div>
        <div id="certified">Criminal Law Specialists<br />
          &amp;<br />
        Criminal Appellate Law Specialists</div>
        <div id="phone">(214)720-9552</div>

	<!--header ends-->					
  </div>
	
	<div  id="nav">

				<ul>
				<li ><a href="http://www.brodenmickelsen.com/">Home</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/about.html">About Us</a> <span class="seperator"> | </span></li> 
				<li ><a href="<?php echo get_option('home'); ?>/">Blog</a><span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/results.html">Results</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/news.html">In the News</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/practice.html">Practice</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/faq.html">FAQ</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/appellate.html">Appellate Cases</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/motions.html">Motions &amp; Briefs</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/legal_resources.html">Legal Resources</a> <span class="seperator"> | </span></li> 
				<li ><a href="http://www.brodenmickelsen.com/contact.html">Contact Us</a></li> 
				
			</ul>		

		</div>	