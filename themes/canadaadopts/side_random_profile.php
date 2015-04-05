<!-- Search Query -->


<?php
include_once('wp-load.php');
include_once('wp-includes/wp-db.php');
global $post;

global $blog_id;
$db_prefix = 'wp_';

if($blog_id > 1)
	$db_prefix .= $blog_id . '_';
	
$randomSideBarQuery = "
select
distinct p.ID

from
" . $db_prefix . "posts p join " . $db_prefix . "postmeta pm on p.ID = pm.post_id and pm.meta_key = 'isSearchable'

where
pm.meta_key = 'isSearchable'
and pm.meta_value = 'True'";

// Randomize and pick one result
$postBlurbIds = $wpdb->get_results($randomSideBarQuery);

shuffle($postBlurbIds);
$postBlurbId = array_rand($postBlurbIds, 1);
$postBlurb = get_post($postBlurbIds[$postBlurbId]->ID);

$randomPageLink = get_page_link($postBlurb->ID);
$isSingleParent = get_post_meta($postBlurb->ID, 'isSingleParent', true);
$partner1FirstName = get_post_meta($postBlurb->ID, 'partner1FirstName', true);
$partner2FirstName = get_post_meta($postBlurb->ID, 'partner2FirstName', true);
$familyState = get_post_meta($postBlurb->ID, 'state', true);
$randomBlurbDesc = get_post_meta($postBlurb->ID, 'randomBlurbDesc', true);
$familyRandomListImage = get_post_meta($postBlurb->ID, 'familySideBarImage', true);

?>



<div>
	<a href="<?php echo $randomPageLink; ?>" ><img class="sideRandomProfileImage" width="280" height="135" src="<?php echo $familyRandomListImage; ?>"/></a>
	<div class="sideRandomProfileTitle">Featured Waiting Parent<?php if($isSingleParent != 'True') echo "s";?></div>
	<div class="sideRandomProfileName text-center"><a href="<?php echo $randomPageLink; ?>"><?php echo 'Meet ' . $partner1FirstName; if($isSingleParent != 'True') {echo ' and ' . $partner2FirstName; } echo ' from ' . $familyState . '.'; ?></a></div>
	<div class="sideRandomProfileSeparator"></div>
</div>

