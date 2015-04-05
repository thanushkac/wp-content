<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	
		<div class="container pagetop" role="main">
        <div class="col-md-8 blogtext">


			<?php if ( have_posts() ) : ?>

			
				<h5 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h5>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			

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
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
            </div> <!--col8-->
               <div class="col-md-1">
    </div>
    <div class="col-md-3">
     <div class="row blogsidebar pagetop">
    <!-- begin sidebar -->
<?php if ( is_active_sidebar( 'blogsidebar' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'blogsidebar' ); ?>
	</div>
	<?php endif; ?>
    </div>
    </div>
            
		</div><!-- #content -->
	

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
