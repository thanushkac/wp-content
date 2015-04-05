<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="container">
<div class="footeritems">
<hr />
				<div class="row">
                <div class="col-md-2">
                <h4>Donations</h4>
                    <div class="donatenow">  
                    <p class="text-left">PBC is a non profit organization. We count on your donations to operate the center. Thank you. </p>
    <p class="text-left"><a href="<?php echo home_url(); ?>/donate-food-list‎">Nessesery Items &amp; Food list</a></p>
    <div class="hr"></div>
    <p class="text-left">Monetary donations : <br/> </p>
    <div class="spacer10"></div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="J9PLF7WS6JSSQ">
<input type="image" src="<?php echo home_url(); ?>/wp-content/uploads/2014/07/DONATE1.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="img-responsive donatebtn">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


    
   </div>     
                
                </div>
                <div class="col-md-3">  
                <h4>Past Events</h4> 
               <p>Captured memories of past events organized by the Pittsburgh Buddhist Center</p>
<a href="http://www.pittsburghbuddhistcenter.org/past-events/" title="Past event photo albums" ><img src="https://lh4.googleusercontent.com/-VecxWr9M5Ok/U8RY-xZojSI/AAAAAAAAEPg/Rq26djK6Fow/s144/DSC_1521.JPG"></img></a>

<p><a href="http://www.pittsburghbuddhistcenter.org/past-events/" title="Past event photo albums" >View all event albums</a></p>
                </div>
                <div class="col-md-4"> 
                <h4>Tweets<span class="small pull-right"><a href="https://twitter.com/PbcPitt" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-lang="en">Follow @PbcPitt</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></span></h4>
                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/PbcPitt" data-widget-id="487579552076398594" data-chrome="nofooter noborders noscrollbar noheader" data-tweet-limit="2">Tweets by @PbcPitt</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

           
                </div>
                <div class="col-md-3">    
                
    <h4>Login / Register</h4>
    
               <?php get_sidebar( 'footer' ); ?>
						
				</div>
			</div>
		<div class ="hr"></div>
        <p class="text-center small">Pittsburgh Buddhist center is a registered non profit organization. | 111, Route 908, Natrona Heights, PA 15065 </p>
        <div class ="hr"></div>
        <div class ="spacer40"></div>

		<!--footer class="site-footer" role="contentinfo"-->

			
		<!--/footer><!-- #colophon -->
	

	<?php wp_footer(); ?>
    </div><!-- #main -->
</body>
</html>