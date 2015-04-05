<?php
/*
Template Name: Blog
*/
?>
<?php
get_header(); ?>


 <div class="container"> 
 <div class="row">
 <div class="topborder"></div>
 </div>
 </div>  
     <div class="spacer"></div>
 <div class="container commoncontenttop"> 
 <div class="row">
 <div class="col-md-8 blog">

<?php $wp_query = new WP_Query(array( 'posts_per_page' => 4, 'order'=> 'DEC', 'orderby' => 'post_date', 'category=6', 'paged'=>$paged)); ?>
			<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php global $more; $more = 0; ?>

			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                <div class="postauthor">
            		<p><?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?> <?php _e("on", 'organicthemes'); ?> <?php the_time('F j, Y'); ?> &middot; <a href="<?php the_permalink(); ?>#comments"><?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?></a>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>
                </div>

            <?php the_content("Read More"); ?><div style="clear:both;"></div>

			<div class="meta">
				<p><?php _e("Category:", 'organicthemes'); ?> <?php the_category(', ') ?> &middot; <?php _e("Tags:", 'organicthemes'); ?> <?php the_tags('') ?></p>
			</div>

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
 
 
 
 
 <div class="col-md-4 visible-lg visible-md">
 
 <div class="row blogsidebar">
<?php get_sidebar( 'content' ); ?>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
 </div> 
 </div> <!-- end main row-->
 </div>  <!-- end maincontainer-->
     <?php
get_footer();
?>