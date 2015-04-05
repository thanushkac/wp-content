
<?php
get_header(); ?>

<div class="container pagetop"> 
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
 <div class="row">
 
 <div class="col-md-8">



		
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
		
    </div><!-- col-8 -->
    <div class="col-md-1">
    </div>
    <div class="col-md-3">
   
    <!-- begin sidebar -->
<?php if ( is_active_sidebar( 'blogsidebar' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'blogsidebar' ); ?>
	</div>
	<?php endif; ?>
    
    </div>
    
    </div>
    </div>
    
    
<?php include ('footer-blog.php'); ?>