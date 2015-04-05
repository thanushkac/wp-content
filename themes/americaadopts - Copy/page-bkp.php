<?php
get_header(); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="container">
      <div class="row">
      <div class="col-md-12"><hr /></div>
      </div>
      </div>
      <div class="container">
      
      <div class="row">
       <div class="col-sm-12 col-md-8 commonpapagecontent"> 
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2 class="singlepostheaderh2"><?php the_title(); ?></h2>	
  
    
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
            </div> 
            <div class="col-md-4">  
            
            <div class="row">                   
<?php include(TEMPLATEPATH . "/side_random_profile.php");?>
<h3><hr/></h3>
</div>
           
            
            
            
<div class="row  sidebarrelatedcontent">
             
<?php
	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);
	
	if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	$args=array(
	'tag__in' => $tag_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=>3, // Number of related posts to display.
	'caller_get_posts'=>1
	);
	
	$my_query = new wp_query( $args );

	while( $my_query->have_posts() ) {
	$my_query->the_post();
	?>
	
		<p><a rel="external" class="pull-left" href="<? the_permalink()?>"><?php the_post_thumbnail(array(117,75)); ?></a>
		<?php the_title(); ?>
        <?php the_subtitle(); ?>
		</p>	
	<? }
	}
	$post = $orig_post;
	wp_reset_query();
	?>      </div> 
    
    <div class="row">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
    </div>
    
     <div class="row">
           <a class="twitter-timeline" href="https://twitter.com/UiBlissful" data-widget-id="433711515980406785">Tweets by @UiBlissful</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

      </div>
            
        
        
        </div>       
        </div>
      </div>      

    </div> <!-- /container -->   
   

<?php
get_footer();
?>