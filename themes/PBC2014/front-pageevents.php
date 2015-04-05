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
        <?php
$my_postid = 766;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>
    

    
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
<div class="h1large">GOT QUESTIONS? <button class="btn btndefault vcenter askbhantebtn" data-toggle="modal" data-target="#myModal">
  ASK BHANTE
</button>
<span class="vcenter askbhantetxt">Ask Bhante your questions about Buddhist philosophy, teachings and instruction</span></div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ask Bhante</h4>
      </div>
      <div class="modal-body">
      
      <?php echo do_shortcode("[dwqa-submit-question-form]"); ?>
     
<p>You will recieve an email when your question is answered by a Bhante</p>
      </div>
      
      <div class="modal-footer">
        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
</div>



</div>
</div><!--ask bhante end-->
<div class="spacer40"></div>

<div class="container">
	<div class="row">
    	<div class="col-md-4">
        <h4>Welcome</h4> 
    	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
     
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
        
        </div>
        <div class="col-md-4">
        <h4>Upcomming Events</h4>
   <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="events-home widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
	<?php endif; ?>
        <?php global $wp_embed;
$post_embed = $wp_embed->run_shortcode('[sign_up_sheets]'); ?> 
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
            Please call (724-295-2525) Bhante Punna to sign up for remote meditation sessions.
        	</div>
        </div>
    </div>
</div>

<?php include ('footer-home.php'); ?>