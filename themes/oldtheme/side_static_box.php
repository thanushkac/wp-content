<?php

$permaLink = get_permalink();

if (strpos($permaLink, "/about-us")) {
	$title1 = "Join The Conversation";
	$description1 = "Connect with us on Facebook. ";
	$link1 = "http://www.facebook.com/AmericaAdopts";
	$image1 = "AboutUs_Facebook.jpg";
	$title2 = "Get The Latest News";
	$description2 = "Follow us on Twitter.";
	$link2 = "http://twitter.com/#!/americaadopts";
	$image2 = "AboutUs_Twitter.jpg";
	$title3 = "Links, Blogs and Books";
	$description3 = "Check out other ways to learn about open adoption. ";
	$link3 = "/resources/links-blogs-and-books-about-open-adoption";
	$image3 = "AboutUs_Links.jpg";
} else if (strpos($permaLink, "/resources")) {
	$title1 = "Find a Family";
	$description1 = "Learn how we bring together expectant and adoptive parents.";
	$link1 = "/find-a-family";
	$image1 = "Resources_FindAFamily.jpg";
	$title2 = "Who We Are";
	$description2 = "The people behind America Adopts! and why they created it.";
	$link2 = "/about-us";
	$image2 = "Resources_WhoWeAre.jpg";
	$title3 = "Our Blog";
	$description3 = "Tips and news about open adoption.";
	$link3 = "/blog";
	$image3 = "Resources_Blog.jpg";
} else if (strpos($permaLink, "/hoping-to-adopt")) {
	$title1 = "Adoption Profile Service";
	$description1 = "Find success by posting your profile online.";
	$link1 = "/services/online-adoptive-parent-profiles";
	$image1 = "FindAFam_ProfileService.jpg";
	$title2 = "Adoption Networking Service";
	$description2 = "Learn how to reach out to prospective birth parents.";
	$link2 = "/services/adoption-profile-networking-services";
	$image2 = "FindAFam_NetworkService.jpg";
	$title3 = "Adoption Profile Writing Service";
	$description3 = "Discover how to put your best foot forward.";
	$link3 = "/services/adoption-profile-writing-service";
	$image3 = "FindAFam_WritingService.jpg";
} else if (strpos($permaLink, "/pregnant")) {
	$title1 = "What is Open Adoption?";
	$description1 = "Learn what open adoption means.";
	$link1 = "/resources/what-is-open-adoption";
	$image1 = "Preg_WhatsAnOpenAdoption.jpg";
	$title2 = "Adoptive Parent Myths and Facts";
	$description2 = "Separate the facts from the fiction.";
	$link2 = "/resources/adoptive-parent-myths-and-facts";
	$image2 = "Preg_MythsAdoptParents.jpg";
	$title3 = "Famous Adoptions";
	$description3 = "Check out which celebrities have an adoption connection.";
	$link3 = "/resources/famous-adoptions";
	$image3 = "Preg_Famous.jpg";
} //else if (strpos($permaLink, "/services") || strpos($permaLink, "/find-a-family")) {
else {
	$title1 = "What’s An Adoption Profile?";
	$description1 = "Find out how to kickstart your journey today.";
	$link1 = "/hoping-to-adopt/whats-an-adoption-profile";
	$image1 = "Serv_WhatsAnAdoptProfile.jpg";
	$title2 = "How To Write An Adoption Profile";
	$description2 = "Tips to put you on the road to success.";
	$link2 = "/hoping-to-adopt/how-to-write-an-adoption-profile";
	$image2 = "Serv_HowToWriteAdoptionProfile.jpg";
	$title3 = "How To Choose Photos For Your Profile";
	$description3 = "Check out other ways to stand out from the crowd.";
	$link3 = "/hoping-to-adopt/how-to-choose-photos-for-your-adoption-profile";
	$image3 = "Serv_HowToChoosePhotos.jpg";
}
?>

<div class="sideStaticBox">
	<a href="<?php echo $link1; ?>"><img class="sideStaticBoxImage" src="/wp-content/themes/americaadoptstwentyten/images/sidebar/<?php echo $image1; ?>" width="117" height="73"/></a>

	<div class="sideStaticBoxTitle"><a href="<?php echo $link1; ?>"><?php echo $title1; ?></a></div>
	<div class="sideStaticBoxText"><?php echo $description1; ?></div>
</div>
<div style="clear: both;"></div>
<div class="sideStaticBox">
	<a href="<?php echo $link1; ?>"><img class="sideStaticBoxImage" src="/wp-content/themes/americaadoptstwentyten/images/sidebar/<?php echo $image2; ?>" width="117" height="73"/></a>

	<div class="sideStaticBoxTitle"><a href="<?php echo $link2; ?>"><?php echo $title2; ?></a></div>
	<div class="sideStaticBoxText"><?php echo $description2; ?></div>
</div>
<div style="clear: both;"></div>
<div class="sideStaticBox">
	<a href="<?php echo $link1; ?>"><img class="sideStaticBoxImage" src="/wp-content/themes/americaadoptstwentyten/images/sidebar/<?php echo $image3; ?>" width="117" height="73"/></a>

	<div class="sideStaticBoxTitle"><a href="<?php echo $link3; ?>"><?php echo $title3; ?></a></div>
	<div class="sideStaticBoxText"><?php echo $description3; ?></div>
</div>
<div style="clear: both;"></div>

