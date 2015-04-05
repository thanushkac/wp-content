<?php
$isSingleParent = get_post_meta($post->ID, 'isSingleParent', true);
$yearsTogether = get_post_meta($post->ID, 'yearsTogether', true);
$city = get_post_meta($post->ID, 'city', true);
$state = get_post_meta($post->ID, 'state', true);
$neighborhood = get_post_meta($post->ID, 'neighborhood', true);
$familyType = get_post_meta($post->ID, 'familyType', true);
$pets = get_post_meta($post->ID, 'pets', true);
$coupleEmail = get_post_meta($post->ID, 'couplePrivateEmail', true);
$publicPhoneNumber = get_post_meta($post->ID, 'publicPhoneNumber', true);
$youTubeVideoKey1 = get_post_meta($post->ID, 'youTubeVideoKey1', true);
$page_data = get_page($post->ID);
$content = apply_filters('the_content', $page_data->post_content);
?>


<div class="container">
<div class="row image-resized">
<img src="<?php echo get_post_meta($post->ID, 'ourLetterImage', true); ?>" alt="Our Letter Image" title="Our Letter Image" />
</div>
</div>
<div class="row spacer"></div>
<div class="row spacer"></div>



<div class="container"> <!--page content container-->
<div class="row"><!--main row -->

<div class="col-md-8 parents">
<div class="quickfacts row visible-xs visible-sm"><!--quickfacts-->
  <h4 class="quickfactsh text-center">QUICK FACTS</h4>
  <div><strong>Phone:</strong> <?php echo $publicPhoneNumber; ?></div>
  <div><strong>Email: </strong><a href="mailto:<?php echo $coupleEmail; ?>?subject=Your%20Canada%20Adopts!%20Profile"><?php echo $coupleEmail; ?></a></div>
            
  <?php if ($isSingleParent == 'False') {?>
  <div><strong>Years together:</strong> <?php echo $yearsTogether; ?></div>
  <?php } ?>
  <div><strong><?php if($isSingleParent == 'True') echo "I";  else echo "we" ;?> live in:</strong>	<?php echo $city; ?>, <?php echo $state; ?></div>
			<div><strong><?php if($isSingleParent == 'True') echo "My";  else echo "Our"; ?>
		    neighbourhood:</strong> <?php echo $neighborhood; ?></div>			
		<div><strong>Pets:</strong> <?php echo $pets; ?></div>
            
 
  </div><!--quickfacts end-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
 </div><!-- end col8-->
  <div class="col-md-4"><!--sidebar -->
  <div class="sidebarparents">
  <div class="row"><!--video -->
  <?php if (!empty($youTubeVideoKey1)) { ?>
		<iframe title="YouTube video player" width="300" height="255" src="http://www.youtube.com/embed/<?php echo $youTubeVideoKey1; ?>" frameborder="0" allowfullscreen></iframe>
		<?php } ?>
  </div><!--video end-->
  <div class="quickfacts row hidden-xs hidden-sm"><!--quickfacts-->
  <h4 class="quickfactsh text-center">QUICK FACTS</h4>
  <div><strong>Email: </strong><a href="mailto:<?php echo $coupleEmail; ?>?subject=Your%20Canada%20Adopts!%20Profile"><?php echo $coupleEmail; ?></a></div>
  <div><strong>Phone: </strong> <?php echo $publicPhoneNumber; ?></div>
  
  <?php if ($isSingleParent == 'False') {?>
  <div><strong>Years together:</strong> <?php echo $yearsTogether; ?></div>
  <?php } ?>
  <div><strong><?php if($isSingleParent == 'True') echo "I";  else echo "We" ;?> live in:</strong>	<?php echo $city; ?>, <?php echo $state; ?></div>
			<div><strong><?php if($isSingleParent == 'True') echo "My";  else echo "Our"; ?>
		    neighbourhood:</strong> <?php echo $neighborhood; ?></div>
			
		  <div><strong>Pets:</strong> <?php echo $pets; ?></div>
  </div><!--quickfacts end-->
  <div class="row spacer"></div>
  <div class="quoteparents hidden-xs hidden-sm"><!--quoteparents-->
  <?php echo get_post_meta($post->ID, 'quoteProfilePage', true); ?>
  </div><!--quoteparents end-->
  </div><!--sidebarparents end-->
  
  </div><!--sidebar end -->
</div><!--main row end -->
</div><!--page content container end -->

