<?php
/*
Template Name: home special events
*/

get_header(); ?>

<div class="container pagetop"><!-- top container -->
  <div class="row  homebannerbg">
    <div class="col-lg-7 col-md-6 welcometxt">
      <div class="row">
        <div class="col-md-3 visible-lg"> <img class="img-responsive highway" src="<?php bloginfo('template_url'); ?>/images/made-in-usa.png" width="144" height="362" alt="made in usa"> </div>
        <div class="col-md-9 col-sm-12">
          <div class="welcomemassage BigBoldHeading"> <strong>Olympia Steel Buildings</strong> </div>
          <div class="TextOnBlack">Made of steel. Built on ServiceTM. 100% American</div>
          <div class="welcomemassage"> We love to design and build. The project size and scope of your building doesn't matter. Call Now and lets get started. <br/>
            <p class="h2 top-padding"><strong>1-888-449-7756</strong></p>
          </div>
        </div>
      </div>
    </div>
    <!--col6 end -->
    <div class="col-lg-5 col-md-6">
      <div class="form-bg">form comes here</div>
    </div>
    <!--col5 end --> 
    
  </div>
  <!--row end --> 
</div>
<!-- top container end-->

<div class="container">
  <div class="row">
    <div class="col-md-12">
    
    <?php //remove unwanted automatic <p> tags from wordpress
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
	 ?>
     
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     
      <?php the_content(); ?>
      <?php endwhile; else: ?>
      <p>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
      </p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php include ('footer-home.php'); ?>