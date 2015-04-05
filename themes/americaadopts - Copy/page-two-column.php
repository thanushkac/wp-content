<?php
/*
Template Name: Two Column
*/

get_header(); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="container">
      <div class="row">
      <div class="col-md-12"><hr /></div></div>
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
            
 

        
<?php
include_once('wp-load.php');
include_once('wp-includes/wp-db.php');

$randomSideBarQuery = "
select
distinct p.ID

from
wp_posts p join wp_postmeta pm on p.ID = pm.post_id and pm.meta_key = 'isSearchable'

where
pm.meta_key = 'isSearchable'
and pm.meta_value = 'True'";

// Randomize and pick one result
$postBlurbIds = $wpdb->get_results($randomSideBarQuery);
shuffle($postBlurbIds);
$postBlurbId = array_rand($postBlurbIds, 1);
$postBlurb = get_post($postBlurbIds[$postBlurbId]->ID);

$randomPageLink = get_page_link($postBlurb->ID);
$isSingleParent = get_post_meta($postBlurb->ID, 'isSingleParent', true);
$partner1FirstName = get_post_meta($postBlurb->ID, 'partner1FirstName', true);
$partner2FirstName = get_post_meta($postBlurb->ID, 'partner2FirstName', true);
$familyState = get_post_meta($postBlurb->ID, 'state', true);
$randomBlurbDesc = get_post_meta($postBlurb->ID, 'randomBlurbDesc', true);
$familyRandomListImage = get_post_meta($postBlurb->ID, 'familySideBarImage', true);
?>

<div style="width:280px;">
	<a href="<?php echo $randomPageLink; ?>"><img class="sideRandomProfileImage" width="280" height="135" src="<?php echo $familyRandomListImage; ?>"/></a>
	<div class="sideRandomProfileTitle"><a href="<?php echo $randomPageLink; ?>">Featured Hopeful Parent<?php if(!$isSingleParent) echo "s";?></a></div>
	<div class="sideRandomProfileName"><?php echo 'Meet ' . $partner1FirstName; if(!$isSingleParent) {echo ' and ' . $partner2FirstName; } echo ' from ' . $familyState . '.'; ?></div>
	
</div>
</div>
           
            
            
            
             <div class="row">
             
<h3><hr /></h3>
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
	
	<div class="relatedthumb">
		<a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail(array(150,100)); ?><br />
		<?php the_title(); ?>
		</a>
	</div>
	
	<? }
	}
	$post = $orig_post;
	wp_reset_query();
	?>      </div> 
    
     <div class="row">
           <a class="twitter-timeline" href="https://twitter.com/UiBlissful" data-widget-id="433711515980406785">Tweets by @UiBlissful</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



            </div>
             <div class="row">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
    </div>
            
        </div>       
        </div>
      </div>      

    </div> <!-- /container -->   
   

<?php
get_footer();
?>