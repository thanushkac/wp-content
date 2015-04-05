<link rel="stylesheet" type="text/css" href="http://www.americaadopts.com/wp-content/themes/americaadopts/css/jquery.ad-gallery.css">
<script type="text/javascript" src="http://www.americaadopts.com/wp-content/themes/americaadopts/js/jquery.ad-gallery.pack.js"></script>

<div style="margin: 0px 0 0 115px;">
	<div id="gallery" class="ad-gallery">
		<div class="ad-image-wrapper"></div>
		<!--		<div class="ad-controls"></div>-->
		<div class="ad-nav">
			<div class="ad-thumbs">
				<ul class="ad-thumb-list">
					<?php

					global $wpdb;
					$ngg_options = get_option('ngg_options');
					$galleryID = get_post_meta($post->ID, 'galleryId', true);

					// query database for gallery
					$act_gallery = $wpdb->get_row("SELECT * FROM $wpdb->nggallery WHERE gid = '$galleryID' ");
					$thepictures = $wpdb->get_results("SELECT * FROM $wpdb->nggpictures WHERE galleryid = '$galleryID' AND exclude != 1 ORDER BY '$ngg_options[galSort]' ASC");

					// set gallery url
					$folder_url = get_option('siteurl') . "/" . $act_gallery->path . "/";

					foreach ($thepictures as $picture) {
						$imageUrl = $folder_url . $picture->filename;
						$thumbImageUrl = $folder_url . "thumbs/thumbs_" . $picture->filename;
						$imageDescription = $picture->description;
						echo '<li><a href="' . $imageUrl . '"><img alt="' . str_replace("\\'" , "'", $imageDescription) . '" src="' . $thumbImageUrl . '" ></a></li>';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery('.ad-gallery').adGallery();
</script>

