<?php
/*
Template Name: Two Column
*/
?>

<?php get_header(); ?>

<div id="content">

	<!--  main column -->
	<div style="width:644px;margin:10px 5px 20px 8px;float:left;">
		<div class="postarea">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(__('Read more')); ?>
			<div style="clear:both;"></div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</div>
	</div>

	<!--  right column -->
	<div class="twoColumnMainRightBox">

		<?php include(TEMPLATEPATH . "/side_random_profile.php");?>

		<?php include(TEMPLATEPATH . "/side_static_box.php");?>

		<div style="width:280px;margin-top: 25px;">
			<div class="sideRandomProfileSeparator"></div>
			<div style="margin-top: 25px;">
				<div class="sideRandomProfileTitle" style="margin-bottom: 12px; color: #FF4308;"><a href="http://www.youtube.com/watch?feature=player_embedded&v=HatQ-5-OspI" target="_blank">See How We Can Help You</a></div>
				<iframe title="YouTube video player" width="280" height="220" src="http://www.youtube.com/embed/HatQ-5-OspI" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

	</div>

</div>


<!-- The main column ends  -->

<?php get_footer(); ?>