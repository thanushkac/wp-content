<?php
/*
Template Name: Buildings page
*/

get_header(); ?>

<div class="container pagetop"><!-- GET INFO BANNER START -->
  <div class="row getinfobanner">
          <div class="col-md-8 getinfotext">
          <p class="getinfotext">What can we design for you today? Talk to a building specialist to learn more. 1-888-449-7756</p>
          </div>
          <div class="col-md-4">
          <p class="text-center"><a href="#" class="btn btn-primary btn-lg img-responsive full-width-btn" role="button">Get a Price Estimate</a></p>
          </div>

  </div>
</div><!-- GET INFO BANNER END -->



<div class="container pagetop">
<div class="row" >

<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	
		

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="building-page-titles text-center"><h1 class="common-page-title"><?php the_title(); ?></h1>
            <h5><?php the_subtitle(); ?></h5>
            </div>
            
          
         
     
      <?php the_content(); ?>
      <?php endwhile; else: ?>
      <p>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
      </p>
      <?php endif; ?>
		
	</div><!-- row -->
	
</div><!-- #main-content -->

<?php

get_footer();
