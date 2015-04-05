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
<div class="container solid-light-gray-bg"> <!--home above footer start-->

	<div class="row">
    	<div class="col-md-6">
                
        <?php
$args = array( 'posts_per_page' => 3, 'order'=> 'DEC', 'orderby' => 'post_date', 'category' => 1, );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		
        
		<div class="blogitems"><p class="blogheading"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></p>
<?php the_excerpt(); ?>
        </div>
        <br />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>


        </div>
        <div class="col-md-6 top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                    <img src="<?php bloginfo('template_url'); ?>/images/BBBlogo.jpg" width="171" height="95" alt="BBB" />
                    </div>
                    <div class="col-xs-3">
                    <img src="<?php bloginfo('template_url'); ?>/images/USGBClogo.jpg" width="158" height="95" alt="Contractor" />
                    </div>
                    <div class="col-xs-6">
                    <img src="<?php bloginfo('template_url'); ?>/images/GSA-contract.jpg" width="214" height="95" alt="GSA" />
                    </div>
                </div>
                
                
         <div class="row social">
                     <div class="col-md-6">
                     <p class="h4 bold"><strong>Phone: 1-888-449-7756</strong></p>
                     </div>
                     <div class="col-md-6">
                     	<div class="container">
                        	<div class="row">
                            </div>
                        </div>
                     <p><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" width="38" height="37" alt="fb" /><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" width="38" height="37" alt="fb" /><img src="<?php bloginfo('template_url'); ?>/images/googleplus.png" width="38" height="37" alt="fb" /></p>
       </div>
                 </div>
                 
                 
            </div>
        </div>
    </div>
<!--?php get_sidebar( 'footer' ); ?-->
</div> <!--home above footer end-->


	<div class="footer text-center">
<p class="h6">Copyright (c) Olympia Buildings All Rights Reserved | CALL TO SAVE NOW! 1-888-449-7756</p>
</div>

		<!--footer class="site-footer" role="contentinfo"-->

			
		<!--/footer><!-- #colophon -->
	

	<?php wp_footer(); ?>
    </div><!-- #main -->
    
    <script>
	jQuery(function($){
	$(document).ready(function(){
	    function openFirstPanel(){
		$('.accordian-formblock > dt:first-child').next().addClass('active').slideDown();
	}
	var allPanels = $('.accordian-formblock > dd').hide();
  
	openFirstPanel();

	function enableClickPanel() {
		$('.accordian-formblock > dt > h2').click(function() {
		  $this = $(this);
		  $target =  $this.parent().next();
		  

		  if($target.hasClass('active')){
		    //$target.removeClass('active').slideUp();
		  }else{
		    allPanels.removeClass('active').slideUp();
		    $target.addClass('active').slideDown();
		  }
		  
		return false;
		});
	}

	//Check class for validate
	var allinputHaveClass = $('.form-sblock input').length == $('.form-sblock input.wpcf7-not-valid').length;
	var allselectHaveClass = $('.form-sblock select').length == $('.form-sblock select.wpcf7-not-valid').length;
    
    $("input.wpcf7-form-control").submit(function() {
    	if ($('.form-sblock input').hasClass('wpcf7-not-valid')){
    	  	$('.wpcf7-not-valid-tip').show();
    	}else{
    	  
    	}
    	$('.accordian-formblock > dd').show();
    });
    
    // Open up right block for validating iputs on submission
    $(".wpcf7-form").submit(function(){
		var $ifinputErr = $('.form-sblock.first input');
		var $ifselectErr = $('.form-sblock.first select');
		var $ifinputErr2 = $('.form-sblock.second input');
		var $ifselectErr2 = $('.form-sblock.second select');

		if($ifinputErr.hasClass('wpcf7-not-valid') || $ifselectErr.hasClass('wpcf7-not-valid'))  {
		  	enableClickPanel();
	    	$('.form-sblock.first').slideDown();
	    	$('.form-sblock.second').slideUp();
		}
		else if($ifinputErr2.hasClass('wpcf7-not-valid') || $ifselectErr2.hasClass('wpcf7-not-valid'))  {
		  	enableClickPanel();
	    	$('.form-sblock.second').slideDown();
	    	$('.form-sblock.first').slideUp();
		}
	});

    // here check all the feilds are OK.
	var filledFields = [];

	function swapSections(sectionSelector, object)
	{
    	filledFields.push(object);

	  	fieldsThatNeedToBeFilled = $(sectionSelector + ' input, ' + sectionSelector + ' select').length;
	    //var allPanels = $('.accordian-formblock > dd').hide();
	  	if (filledFields.length == fieldsThatNeedToBeFilled) {
	    	enableClickPanel();
	    	$('.form-sblock.first').slideUp();
	    	$('.form-sblock.second').slideDown();
	  	} else { 
  	   		$('.form-sblock.first').slideDown();
  	   		enableClickPanel();
  		}
	}

	$(document).on('change', '.form-sblock.first select', function() {
		    swapSections('.form-sblock.first', $(this));
	});

	$(document).on('focusout', '.form-sblock.first input', function() {
  	  	if ($(this).val() !== '') {
    	    swapSections('.form-sblock.first', $(this));    
	    }
	});

	});
});
	</script>
</body>
</html>