
<?php
/*
Template Name: events
*/
get_header(); ?>

<div class="container pagetop"> 

 <div class="col-md-9 leftcolumn">

<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
		
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
			?>
		
	
    </div><!-- col-8 -->
    
    <div class="col-md-3">
     <div>
    <!-- begin sidebar -->
<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
	<?php endif; ?>
    </div>
    </div>
    
   
    </div>
    
    
     <?php
get_footer();
?>