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
            
            <div class="container"> <!--PAGE CONTENT CONTAINER START-->
            
            
            	<div class="row row-top-padding"><!--start row-->
                
                    <div class="col-md-6 image-gallery"> <!--start column porlet-->
                    image gallery goes here
                    </div> <!--end column porlet-->
                    
                    
                    <div class="col-md-6"> <!--start column porlet-->
                    <p class="h4">Olympia's garages are perfect for…</p>

                        <p>
                      <ul>
                        <li>Garages</li>
                        <li>Storage Buildings</li>
                        <li>Car Storage</li>
                        <li>Boat Storage</li>
                        <li>RV or Camper Storage</li>
                        <li>Backyard Workshop</li>
                        <li>Tool Storage</li>
                        <li>Lawn Care Equipment Storage</li>
                        <li>Building Additions</li>
                        <li>&amp; More, Tell Us About Your Needs Here!</li>
                        </ul></p>
                    </div><!--end column porlet-->

                </div><!--end row-->
                
                <hr/>
                
                
                	<div class="row row-top-padding"><!--start row-->
                
                    <div class="col-md-6 image-gallery"> <!--start column porlet-->
                    <p class="h3">About this Building </p>
                    <p>Olympia Steel Buildings offers garages, garage kits and storage sheds that provide a home for your valuable investments keeping them safe and secure in a convenient, easily accessible space of their own. A steel building can be constructed in less time than it takes to erect a conventional building at a much lower cost. Warranties on the building's roof, paint and fasteners will increase your peace of mind and virtually no maintenance will increase the time you have to spend with the items housed in your new Olympia building.</p>
                    </div> <!--end column porlet-->
                    
                    <div class="col-md-6 image-gallery"> <!--start column porlet-->
                    <p class="h3">Let's Get Started!</p>
                    <p>To inquire about a new garage and save up to 50% over conventional construction, get a free online quote on the building of your choice or call toll-free at 1-888-449-7756 for information and pricing.</p>
                    <p class="text-center"><a href="#" class="btn btn-info btn-lg img-responsive full-width-btn" role="button">Get a Price Estimate</a></p>
                    </div> <!--end column porlet-->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- badges start-->
                    <div class="row top-macro-spacing"></div>
                    <div class="row top-macro-spacing"></div>
                    
<div class="container dark-bg-pattern">
<div>
<p class="h2 text-center white-text">All Olympia steel buildings comes with</p>

</div>
<div class="row">
<div class="col-xs-4 badges text-center">

<img class="img-responsive aligncenter" src="http://localhost:8888/wordpress/wp-content/uploads/2015/03/enginered.png" alt="enginered" />
<p class="h3">Engineered</p>
<p class="h6">to last a lifetime</p>

</div>
<div class="col-xs-4 badges text-center">

<img class="img-responsive aligncenter" src="http://localhost:8888/wordpress/wp-content/uploads/2015/03/35.png" alt="35" />
<p class="h3">35 Year</p>
<p class="h6">Rust through perferation warrenty</p>

</div>
<div class="col-xs-4 badges text-center">

<img class="img-responsive aligncenter" src="http://localhost:8888/wordpress/wp-content/uploads/2015/03/40.png" alt="40" />
<p class="h3">40 Year</p>
<p class="h6">Warrenty on paint</p>

</div>
</div>
</div>
<!-- badges end-->
                    

                </div><!--end row-->
                
                
                
                <div class="row top-macro-spacing"></div>
                    <div class="row top-macro-spacing"></div>
                    
                    
                    
                    
                    
            <div class="container"> <!--CONTAINER START-->
            
            
            <div class="row">
            <div class="col-md-12 text-center">
            <p class="h2">Why People Choose Olympia</p>
            </div>
            </div>
            
              <div class="row">
              <div class="col-sm-6">
              <p class="h5">Years of metal storage building design experience</p>
              <p>
              providing quality products at savings of up to 50% over conventional construction.
              </p>
              </div>
              <div class="col-sm-6">
              </div>
              
              </div> 
            </div>    <!--CONTAINER END--> 
                    
                
                
                
                
                
                
            </div><!--PAGE CONTENT CONTAINER END-->
         
     
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
