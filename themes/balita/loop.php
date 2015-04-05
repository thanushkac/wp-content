<header class="clearfix">
	<?php if ( is_category() ) : ?>
	<h2 class="headPage"><?php single_cat_title(); ?></h2>
	<?php elseif( is_tag() ) : ?>
	<h2 class="headPage"><?php _e('Posts Tagged &ldquo;', 'tokokoo'); ?><?php single_tag_title(); ?>&rdquo;</h2>
	<?php elseif (is_day()) : ?>
	<h2 class="headPage"><?php _e('Archive for', 'tokokoo'); ?> <?php the_time('F jS, Y'); ?></h2>
	<?php elseif (is_month()) : ?>
	<h2 class="headPage"><?php _e('Archive for', 'tokokoo'); ?> <?php the_time('F, Y'); ?></h2>
	<?php elseif (is_year()) : ?>
	<h2 class="headPage"><?php _e('Archive for', 'tokokoo'); ?> <?php the_time('Y'); ?></h2>
	<?php elseif (is_author()) : ?>
	<h2 class="headPage"><?php _e('Author Archive', 'tokokoo'); ?></h2>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
	<h2 class="headPage"><?php _e('Blog Archives', 'tokokoo'); ?></h2>
	<?php endif; ?>
	<?php if(!is_search()): ?>
	<div class="feed"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Subscribe this blog', 'tokokoo'); ?></a></div>
	<?php endif; ?>
</header>

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
                <div class="prev"><?php next_posts_link(__('&laquo; Previous Posts', 'tokokoo')); ?></div>
                <div class="next"><?php previous_posts_link(__('Next Posts &raquo;', 'tokokoo')); ?></div>
        <?php endif; ?>
</nav>
<?php endif; ?>
