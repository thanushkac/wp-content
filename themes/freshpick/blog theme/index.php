<?php get_header(); ?>

	<!-- content -->

	<div id="content-outer" class="clear"><div id="content-wrap">
		<div id="content">
			<div id="left">


<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-info"> <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></p>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

<div class="page-navigation clear">

			<div class="float-left"><?php next_posts_link('&laquo; Older Entries') ?></div>

			<div class="float-right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

		</div>



	<?php else : ?>



<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>





<?php endif; ?>

				

			</div>

		

<?php get_sidebar(); ?>

<?php get_footer(); ?>