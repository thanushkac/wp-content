
<?php
$post = $wp_query->post;
if (in_category(12)) {
	include (TEMPLATEPATH.'/single-dhamma-blog.php');
	return;
}
if (in_category(8)) {
	include (TEMPLATEPATH.'/single.php');
	return;
}
if (in_category(11)) {
	include (TEMPLATEPATH.'/single.php');
	return;
}
get_header(); ?>


 <div class="container"> 
 <div class="row">
 <div class="topborder"></div>
 </div>
 </div> 


<div class="container pagetop"> 
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
 <div class="row">
 
 <div class="col-md-8">

<div>

		
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
		
	</div><!-- #primary -->
    </div><!-- col-8 -->
    <div class="col-md-1">
    </div>
    <div class="col-md-3">
     <div class="row blogsidebar pagetop">
    <!-- begin sidebar -->
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
	<?php endif; ?>
    </div>
    </div>
    
    </div>
    </div>
    
    
     <?php
get_footer();
?>