<?php get_header(); ?>

<?php the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<?php if(!tk_is_wpsc_page() && !is_tax()){ ?>
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php } ?>
			
			<?php if(!is_page() && !tk_is_wpsc_page() && !is_tax() ){ ?>
				<p><time datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time> <span class="author">by <?php the_author() ?></span>. <?php if ( comments_open() ) : ?><a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a><?php endif; ?></p>
			<?php } ?>
		</header>
		
		<?php the_content(__('More', 'tokokoo')); ?>

	</article>
	
	<?php  if(!tk_is_wpsc_page()) comments_template(); ?>

<?php get_footer(); ?>