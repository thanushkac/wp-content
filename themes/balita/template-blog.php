<?php
/* 
 Template Name: Blog List
 */

get_header();
?>
<header class="clearfix">
	<h2 class="headPage"><?php the_title(); ?></h2>
</header>

<?php
    /**
     * For get looping of blog.
     */
    $paged    = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args     = array(
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
    );
    $temp     = $wp_query;  // assign orginal query to temp variable for later use
    $wp_query = null;
    $wp_query = new WP_Query($args);
?>
		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <header>
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta"><time datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time> <span class="author">by <?php the_author() ?></span>. <?php if ( comments_open() ) : ?><a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a><?php endif; ?></p>
                </header>

                <?php the_content(__('More', 'tokokoo')); ?>

        </article>

<?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'tokokoo'); ?></p>
<?php endif; ?>


<?php if (show_posts_nav()) : ?>
<nav class="paging">
        <?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); else : ?>
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts') ?></div>
                <div class="next"><?php previous_posts_link('Next Posts &raquo;') ?></div>
        <?php endif; ?>
</nav>
<?php endif; ?>

<?php $wp_query = $temp; wp_reset_postdata(); ?>


<?php get_footer(); ?>