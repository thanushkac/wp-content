<?php
get_header(); ?>


 <div class="container"> 
 <div class="row">
 <div class="topborder"></div>
 </div>
 </div>  
     
 <div class="container commoncontenttop"> 
 <div class="row">
 <div class="col-md-8 commonpapagecontent">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1 class="singlepostheaderh2"><?php the_title(); ?></h1>	
  

	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
 </div><!-- end col8-->
 
 
 
 
 <div class="col-md-4 visible-lg visible-md">
 
 <div class="row">
 <?php include(TEMPLATEPATH . "/side_random_profile.php");?>
 </div><!--end parentprofile -->
 
 <div class="row"><h3 class="sideRandomProfileSeparator"><hr/></h3></div>
 
 
 <div class="row  sidebarrelatedcontent"><!--related pages-->
             
<?php
	$orig_post = $post;
	global $post;
	the_post();
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) {
		$tag_ids[] = $individual_tag->term_id;
	}
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
		<h5 class="sidebarheading"><a rel="external" href="<? the_permalink()?>"><?php the_title(); ?> </a></h5>
        <div><?php the_subtitle(); ?></div>
		</p>
        <div class="clearfix"></div>	
	<? }
	}
	$post = $orig_post;
	wp_reset_query();
	?>      </div> <!--end related pages-->
    
    <div class="row sidebarrelatedcontent"><!--facebook-->
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
    </div><!--end facebook-->
 
 
 <div class="row sidebarrelatedcontent">
           <a class="twitter-timeline" href="https://twitter.com/AmericaAdopts" data-widget-id="433711515980406785">Tweets by @AmericaAdopts</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<a data-pin-do="embedUser" href="http://www.pinterest.com/americaadopts/" data-pin-scale-height="200" data-pin-board-width="300">Visit America Adopts!'s profile on Pinterest.</a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>


 </div> <!--end twitter-->
 
 </div><!-- end col4-->
 
 </div> <!-- end main row-->
 </div>  <!-- end maincontainer-->
     <?php
get_footer();
?>