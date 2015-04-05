<?php if ($_SERVER['REQUEST_METHOD'] == "GET") : ?>

<?php

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

<img src="<?php echo $contactUsImage; ?>" width="980" height="350" alt="Contact Us Image" title="Contact Us Image"/>
<div style="margin-top:28px;">

	<div style="border-style:solid;border-width:0 1px 0 0;border-color:#000;width:650px;float:left;">

		<div style="font-family: Helvetica;font-size: 18px;	color: #3874A4">Contact <?php if($isSingleParent) echo "Me";  else echo "Us"; ?></div>

		<div style="margin-top: 10px;font-size: 12px;">
			Please don't hesitate to call <?php if($isSingleParent) echo "me";  else echo "us"; ?>. You can reach us at the following:<br/>

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

		</div>

		<form style="margin-top:15px;" method="post" action="#">

			<div style="position: relative;height: 25px;">
				<div style="position: absolute;">Your Name:</div>
				<div style="position: absolute;left: 120px;"><input style="width: 350px" type="text" name="formName"/></div>
			</div>

			<div style="position: relative;height: 25px;">
				<div style="position: absolute;">Email Address:</div>
				<div style="position: absolute;left: 120px;"><input style="width: 350px" type="text" name="formEmail"/></div>
			</div>

			<div style="position: relative;height: 150px;">
				<div style="position: absolute;">Message:</div>
				<div style="position: absolute;left: 120px;"><textarea style="width: 350px;height: 150px;" name="formMessage"></textarea></div>
			</div>

			<div style="margin-top: 20px;margin-left: 140px;">
				<input type="submit" value="Send Email"/>
			</div>

		</form>

		<div style="font-style: italic;font-size: 12px;margin-top: 10px;">Note: America Adopts! records all IP addresses for the purpose of eliminating fraudulent or scam emails.</div>
	</div>

	<!-- Right Column -->
	<div style="float:left;width:290px;margin-left:30px">
		<div style="width:275px;color:#AFAFAF;font-size:24px;line-height:35px;margin-top:-4px;"><?php echo $quoteContactPage; ?></div>
	</div>

</div>

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
<div style="margin-top: 20px;"><?php echo $responseMessage; ?></div>

<?php ?>
<?php endif; ?>