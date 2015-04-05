<?php
/*
Template Name: Blog
*/
?>
<?php
get_header(); ?>

 <div class="container pagetop"> 
 <div class="row">
 <div class="col-md-8 blog">

<?php $wp_query = new WP_Query(array( 'posts_per_page' => 4, 'order'=> 'DEC', 'cat=12', 'orderby' => 'post_date', 'paged'=>$paged)); ?>
			<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php global $more; $more = 0; ?>
<div><span class="blogpostdate small"><?php the_date('j M. Y'); ?></span></div>
<div class="hrblogpost"></div>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                <div class="postauthor">
            		<p><?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?> &middot; <a href="<?php the_permalink(); ?>#comments"><?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?></a>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>
                </div>

            <?php the_content("Read More"); ?><div class="clearfix spacer40"></div>

			

			<?php endwhile; ?>

			<div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
            <br />
			<div id="nextLink"><p><?php next_posts_link(); ?></p></div>

            <?php else : // do not delete ?>

            <h3><?php _e("Page not Found"); ?></h3>
            <p><?php _e("We're sorry, but the page you're looking for isn't here."); ?></p>
            <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar"); ?></p>

			<?php endif; // do not delete ?>

 </div><!-- end col8-->
 
 
 <div class="col-md-1">
 </div>
 
 <div class="col-md-3 visible-lg visible-md">
 
 <div>
<?php if ( is_active_sidebar( 'blogsidebar' ) ) : ?>
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'blogsidebar' ); ?>
	</div>
	<?php endif; ?>

 </div> 
 </div> <!-- end main row-->
 </div>  <!-- end maincontainer-->
<?php include ('footer-blog.php'); ?>