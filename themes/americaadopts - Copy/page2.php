<?php
get_header(); ?>


 <div class="container"> 
 <div class="row">
 <div class="col-md-12"><hr /></div>
 </div>
 </div>  
     
 <div class="container"> 
 <div class="row">
 <div class="col-md-8">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2 class="singlepostheaderh2"><?php the_title(); ?></h2>	
  
    
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
 </div><!-- end col8-->
 <div class="col-md-4">
 </div><!-- end col4-->
 
 </div> <!-- end main row-->
 </div>  <!-- end maincontainer-->
     