<?php get_header(); ?>



	<!-- content -->

	<div id="content-outer" class="clear"><div id="content-wrap">

	

		<div id="content">

		

			<div id="left">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

			

				<div class="post no-bg">

				

					<h2><?php the_title(); ?></h2>


<div class="social"><?php get_ssb("twitter=3&fblike=2&googleplus=1");  ?></div>
<?php the_content(); ?>

<?php get_ssb("googleplus=3&fblike=2&twitter=1");  ?>

<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				</div>

<div class="social"><?php get_ssb("twitter=3&fblike=2&googleplus=1");  ?></div>

<?php comments_template(); ?>

				

		<?php endwhile; else : ?>



<p>Sorry, no pages matched your criteria.</p>



<?php endif; ?>

				

			</div>

		

<?php get_sidebar(); ?>

<?php get_footer(); ?>