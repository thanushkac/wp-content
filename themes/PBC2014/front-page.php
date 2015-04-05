<?php
/*
Template Name: home special events
*/

get_header(); ?>

<div class="container pagetop"><!-- top container -->
<div class="row">
    <div class="col-md-6">
     <?php echo do_shortcode('[ngg-nivoslider gallery="1" html_id="home-slider" center="1" caption="description" max_pictures="50" order="sortorder" shuffle="true" pauseTime="10000" pauseonhover="true" effect="fade" controlnav="true" captionopacity=".5" ]'); ?>
    </div><!--col6 end -->
    <div class="col-lg-4 col-md-6">
    
    
    	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h5><?php the_title(); ?></h5>	
     
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
    
    
    </div><!--col4 end -->
    <div class="col-md-2 visible-lg">
    <h5>FOLLOW PBC ON</h5>
    <div class="homesocialbtns">
    <a href="https://www.facebook.com/PittsburghBuddhistCenter" target="_new"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/07/facebook.png" width="29" height="29" alt="pittsburgh buddhist center on facebook" />  </a>
    
    <a href="https://twitter.com/PbcPitt" target="_new"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/07/twitter.png" width="29" height="29" alt="pittsburgh buddhist center on twitter" /></a>
   
    <a href="https://www.youtube.com/user/PittsburghBuddhist" target="_new"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/07/youtube.png" width="29" height="29" alt="pittsburgh buddhist center on facebook" /> </a>
    <div class="spacer10"></div>  
    <p class="text-left">PBC is a non profit organization. We count on your donations to operate the center. Thank you. </p>
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="J9PLF7WS6JSSQ">
<input type="image" src="<?php echo home_url(); ?>/wp-content/uploads/2014/07/DONATE1.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="img-responsive donatebtn">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
 
    <div>
    <?php if ( is_active_sidebar( 'signup' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'signup' ); ?>
	</div>
	<?php endif; ?>
    
    <div class="spacer10"></div>
    
    </div>
    </div><!--col2 end -->
</div><!--row end -->
</div><!-- top container end-->
<div class="spacer40"></div>

<div class="container"> <!--askbhante container -->
<div class="row">

<div class="askbhante">
<div class="h1large">GOT QUESTIONS? <a href="http://www.pittsburghbuddhistcenter.org/ask-bhante/" class="btn btn-default vcenter askbhantebtn">
  ASK BHANTE
</a>
<span class="vcenter askbhantetxt">Ask Bhante your questions about Buddhist philosophy, teachings and instruction</span></div>

<!-- Button trigger modal -->





</div>
</div><!--ask bhante end-->
<div class="spacer40"></div>

<div class="container">
	<div class="row">
    	<div class="col-md-4">
        <h4>Upcomming Events </h4> 
        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="events-home widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
	<?php endif; ?>
        <?php global $wp_embed;
$post_embed = $wp_embed->run_shortcode('[sign_up_sheets]'); ?> 
         
   
        
        </div>
        <div class="col-md-4">
        <h4>Dhamma Blog</h4>
        <?php
$args = array( 'posts_per_page' => 3, 'order'=> 'DEC', 'orderby' => 'post_date', 'category' => 12, );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<div><span class="blogpostdate small"><?php the_date('j M. Y'); ?></span></div>
        <div class="hrblogpost"></div>
		<div><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a>
        <br />
        <p><?php the_excerpt(); ?></p>
        </div>
        <br />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>

 <a href="<?php bloginfo('template_url'); ?>/blog/">See all.</a>

        </div>
        <div class="col-md-4">
        <h4>Weekly Meditation Sessions</h4>
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2014/07/meditation-pittsburgh.png" class="img-responsive themeimages" alt="meditation sessions pittsburgh" />
         <?php if ( is_active_sidebar( 'meditation' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'meditation' ); ?>
	</div>
	<?php endif; ?>
       <div class="roundboxes noticeboxes">
            <h5>Remote Meditation Sessions</h5>
            Please visit <a href="https://new.livestream.com/accounts/10695460">https://new.livestream.com/accounts/10695460</a> for remote meditation participation and to view past events. </div>
        </div>
    </div>
</div>

<?php include ('footer-home.php'); ?>