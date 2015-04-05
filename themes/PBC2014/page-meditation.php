
<?php
/*
Template Name: pbcmeditation
*/
get_header(); ?>

<div class="container pagetop"> 
<div class="row">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
	</div>
<div class="row">

<div class="col-md-9">
 
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>

<br/>

	
    </div> <!--end videocol-->
     <div class="col-md-3">

	    <!-- begin sidebar -->

    <?php if ( is_active_sidebar( 'meditation2' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'meditation2' ); ?>
	</div>
	<?php endif; ?>
    </div><!-- col-6 -->
    

    
  </div> 
    </div>
    
    
     <?php
get_footer();
?>