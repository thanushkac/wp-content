<?php
$isSingleParent = get_post_meta($post->ID, 'isSingleParent', true);
$yearsTogether = get_post_meta($post->ID, 'yearsTogether', true);
$city = get_post_meta($post->ID, 'city', true);
$state = get_post_meta($post->ID, 'state', true);
$neighborhood = get_post_meta($post->ID, 'neighborhood', true);
$otherChildren = get_post_meta($post->ID, 'otherChildren', true);
$pets = get_post_meta($post->ID, 'pets', true);
$youTubeVideoKey1 = get_post_meta($post->ID, 'youTubeVideoKey1', true);
$page_data = get_page($post->ID);
$content = apply_filters('the_content', $page_data->post_content);
?>
<img src="<?php echo get_post_meta($post->ID, 'ourLetterImage', true); ?>" width="980" height="350" alt="Our Letter Image" title="Our Letter Image"/>
<div style="margin:30px 0 0 0;">

	<!-- Our letter -->
	<div style="border-style:solid;border-width:0 1px 0 0;border-color:#000;width:635px;float:left;padding-right:15px;" id="ourLetterFormat">
		<?php	echo $content; ?>
		<div style="clear:both;"></div>
	</div>

	<!-- Right Column -->
	<div style="float:left;width:290px;margin-left:30px">
		<?php if (!empty($youTubeVideoKey1)) { ?>
		<iframe title="YouTube video player" width="300" height="255" src="http://www.youtube.com/embed/<?php echo $youTubeVideoKey1; ?>" frameborder="0" allowfullscreen></iframe>
		<?php } ?>

		<div style="width:300px;height:180px;background:#F5F5F5;border-width:0px 2px 2px 0px;border-color:#CCCCCC;border-style:solid;margin-top:20px;margin-bottom: 20px;">
			<div style="font-size:14px;color:#3874A4;padding:15px 0 5px 15px;">QUICK FACTS</div>
      <?php if (!$isSingleParent) : ?>
			<div class="innerBoxQuickFact"><strong>Years together:</strong> <?php echo $yearsTogether; ?></div>
      <?php endif; ?>
			<div class="innerBoxQuickFact"><strong>Where <?php if($isSingleParent) echo "I";  else echo "we"; ?> live:</strong>	<?php echo $city; ?>, <?php echo $state; ?></div>
			<div class="innerBoxQuickFact"><strong><?php if($isSingleParent) echo "My";  else echo "Our"; ?> neighborhood:</strong> <?php echo $neighborhood; ?></div>
			<div class="innerBoxQuickFact"><strong>Other children:</strong> <?php echo $otherChildren; ?></div>
			<div class="innerBoxQuickFact"><strong>Pets:</strong> <?php echo $pets; ?></div>
		</div>

    <div class="quoteRightSide"><?php echo get_post_meta($post->ID, 'quoteProfilePage', true); ?></div>

	</div>
</div>
