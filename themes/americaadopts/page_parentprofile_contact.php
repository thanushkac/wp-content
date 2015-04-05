<?php if ($_SERVER['REQUEST_METHOD'] == "GET") : ?>


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
	$isSingleParent = get_post_meta($post->ID, 'isSingleParent', true);
	$contactUsImage = get_post_meta($post->ID, 'contactUsImage', true);
	$quoteContactPage = get_post_meta($post->ID, 'quoteContactPage', true);
	$publicPhoneNumber = get_post_meta($post->ID, 'publicPhoneNumber', true);
	$tollFreeNumber = get_post_meta($post->ID, 'tollFreeNumber', true);
	$agencyAttorneyInformation = get_post_meta($post->ID, 'agencyAttorneyInformation', true);

	$personalWebsite = get_post_meta($post->ID, 'personalWebsite', true);
	$facebookPage = get_post_meta($post->ID, 'facebookPage', true);
	$twitterPage = get_post_meta($post->ID, 'twitterPage', true);
	?>
    
    <div class="container">
<div class="row image-resized">
<img src="<?php echo $contactUsImage; ?>" alt="Contact Us Image" title="Contact Us Image"/>
</div>
</div>
<div class="row spacer"></div>
<div class="row spacer"></div>


<div class="container"> <!--page content container-->
<div class="row"><!--main row -->
<div class="col-md-8">

<div>
<h3>Contact <?php if($isSingleParent == 'True') echo "Me";  else echo "Us" ;?> </h3>
Please don't hesitate to call <?php if($isSingleParent == 'True') echo "me";  else echo "us" ;?>. You can reach us at the following:<br/>

<?php

			if (!empty($tollFreeNumber) || !empty($publicPhoneNumber)) {
				if (!empty($tollFreeNumber)) {
					echo "Toll free number: " . $tollFreeNumber . "<br/>";
				} else {
					echo "Phone number: " . $publicPhoneNumber . "<br/>";
				}
			}

			if (!empty($agencyAttorneyInformation)) {
				echo "Agency/Attorney contact information: " . $agencyAttorneyInformation . "<br/>";
			}

			if (!empty($personalWebsite)) {
				echo 'Personal website: <a href="' . $personalWebsite . '" >' . $personalWebsite . '</a><br/>';
			}

			if (!empty($facebookPage)) {
				echo 'Facebook page: <a href="' . $facebookPage . '" >' . $facebookPage . '</a><br/>';
			}

			if (!empty($twitterPage)) {
				echo 'Twitter page: <a href="' . $twitterPage . '" >' . $twitterPage . '</a><br/>';
			}

			?>
            <div class="spacer"></div>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Your Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="formName" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" name="formName">Your Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="formEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" name="formName">Message:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="4" name="formMessage"></textarea>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send Email</button>
    </div>
  </div>
</form>
<?php endif; ?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") : ?>
<?php

	$bcc = "BCC: lawrence@americaadopts.com";
	$headers = "MIME-Version: 1.0\n" . "From: " . get_settings('admin_email') . "\n" . $bcc . "\n" . "Content-Type: text/plain; charset=\"" . get_settings('blog_charset') . "\"\n";
	$couplePrivateEmail = get_post_meta($post->ID, 'couplePrivateEmail', true);
	$formName = $_REQUEST["formName"];
	$formEmail = $_REQUEST["formEmail"];
	$formMessage = $_REQUEST["formMessage"];
	$ipAddress = $_SERVER['REMOTE_ADDR'];
	$responseMessage = "Message Successfully Sent...";
	if ($formName != "" && $formEmail != "" && $formMessage != "") {

		$emailMessage = "Hi,\n\nYou have received a message from the contact form on your profile. \n\n\nName: " . $formName . "\n\n\nEmail: " . $formEmail . "\n\n\nMessage: " . $formMessage . "\n\n\n\nSent From IP Address: " . $ipAddress . "\n\nAmerica Adopts! 	";
		wp_mail($couplePrivateEmail, '[AMERICA-ADOPTS] Contact Form Submission', $emailMessage, $headers);
	} else {
		$responseMessage = "There were some errors in your form, please try again...";
	}
	?>
    <?php ?>
<?php endif; ?>

</div>
  
 </div><!-- end col8-->
  <div class="col-md-4"><!--sidebar -->
  <div class="sidebarparents contactpage hidden-xs hidden-sm"> 
  <div class="quoteparents"><!--quoteparents-->
  <?php echo get_post_meta($post->ID, 'quoteContactPage', true); ?>
  </div><!--quoteparents end-->
  </div><!--sidebarparents end-->
  
  </div><!--sidebar end -->
</div><!--main row end -->
</div><!--page content container end -->