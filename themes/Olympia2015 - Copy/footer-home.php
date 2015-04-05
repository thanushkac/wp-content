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
        <div class="col-md-6">
        </div>
    </div>
<?php get_sidebar( 'footer' ); ?>
</div> <!--home above footer end-->


	<div class="footer text-center">
<p class="h6">Copyright (c) Olympia Buildings All Rights Reserved | CALL TO SAVE NOW! 1-888-449-7756</p>
</div>

		<!--footer class="site-footer" role="contentinfo"-->

			
		<!--/footer><!-- #colophon -->
	

	<?php wp_footer(); ?>
    </div><!-- #main -->
</body>
</html>