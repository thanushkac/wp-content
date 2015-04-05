
<?php
get_header(); ?>


 <div class="container"> 
 <div class="row">
 <div class="topborder"></div>
 </div>
 </div> 


<div class="container commoncontenttop"> 
 <div class="row">
 <div class="col-md-8 blog">

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
    </div><!-- col-8 -->
    
    <div class="col-md-4">
     <div class="row blogsidebar">
    <!-- begin sidebar -->
<div id="secondary">

<?php get_sidebar( 'content' ); ?>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
</div><!-- #secondary -->
    </div>
    </div>
    
    </div>
    </div>
    
    
     <?php
get_footer();
?>