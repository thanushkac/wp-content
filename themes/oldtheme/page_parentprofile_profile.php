<?php
$isSingleParent = get_post_meta($post->ID, 'isSingleParent', true);
$profileImage = get_post_meta($post->ID, 'profileImage', true);
$partner1FirstName = get_post_meta($post->ID, 'partner1FirstName', true);
$partner2FirstName = get_post_meta($post->ID, 'partner2FirstName', true);
$partner1Age = get_post_meta($post->ID, 'partner1Age', true);
$partner2Age = get_post_meta($post->ID, 'partner2Age', true);
$partner1Education = get_post_meta($post->ID, 'partner1Education', true);
$partner2Education = get_post_meta($post->ID, 'partner2Education', true);
$partner1Profession = get_post_meta($post->ID, 'partner1Profession', true);
$partner2Profession = get_post_meta($post->ID, 'partner2Profession', true);
$partner1Religion = get_post_meta($post->ID, 'partner1Religion', true);
$partner2Religion = get_post_meta($post->ID, 'partner2Religion', true);
$partner1Ethnicity = get_post_meta($post->ID, 'partner1Ethnicity', true);
$partner2Ethnicity = get_post_meta($post->ID, 'partner2Ethnicity', true);
$partner1AstrologicalSign = get_post_meta($post->ID, 'partner1AstrologicalSign', true);
$partner2AstrologicalSign = get_post_meta($post->ID, 'partner2AstrologicalSign', true);
$partner1Hobbies = get_post_meta($post->ID, 'partner1Hobbies', true);
$partner2Hobbies = get_post_meta($post->ID, 'partner2Hobbies', true);
$childAge = get_post_meta($post->ID, 'childAge', true);
$childGender = get_post_meta($post->ID, 'childGender', true);
$childEthnicity = get_post_meta($post->ID, 'childEthnicity', true);
$childEthnicity1 = get_post_meta($post->ID, 'childEthnicity1', true);
$childEthnicity2 = get_post_meta($post->ID, 'childEthnicity2', true);
$specialNeeds = get_post_meta($post->ID, 'specialNeeds', true);
$childAdoptionType = get_post_meta($post->ID, 'childAdoptionType', true);
$yearsTogether = get_post_meta($post->ID, 'yearsTogether', true);
$otherChildren = get_post_meta($post->ID, 'otherChildren', true);
$pets = get_post_meta($post->ID, 'pets', true);
$partner1Fav1 = get_post_meta($post->ID, 'partner1Fav1', true);
$partner1Fav2 = get_post_meta($post->ID, 'partner1Fav2', true);
$partner1Fav3 = get_post_meta($post->ID, 'partner1Fav3', true);
$partner1Fav4 = get_post_meta($post->ID, 'partner1Fav4', true);
$partner1Fav5 = get_post_meta($post->ID, 'partner1Fav5', true);
$partner1Fav6 = get_post_meta($post->ID, 'partner1Fav6', true);
$partner1Fav7 = get_post_meta($post->ID, 'partner1Fav7', true);
$partner1Fav8 = get_post_meta($post->ID, 'partner1Fav8', true);
$partner1Fav9 = get_post_meta($post->ID, 'partner1Fav9', true);
$partner1Fav10 = get_post_meta($post->ID, 'partner1Fav10', true);
$partner2Fav1 = get_post_meta($post->ID, 'partner2Fav1', true);
$partner2Fav2 = get_post_meta($post->ID, 'partner2Fav2', true);
$partner2Fav3 = get_post_meta($post->ID, 'partner2Fav3', true);
$partner2Fav4 = get_post_meta($post->ID, 'partner2Fav4', true);
$partner2Fav5 = get_post_meta($post->ID, 'partner2Fav5', true);
$partner2Fav6 = get_post_meta($post->ID, 'partner2Fav6', true);
$partner2Fav7 = get_post_meta($post->ID, 'partner2Fav7', true);
$partner2Fav8 = get_post_meta($post->ID, 'partner2Fav8', true);
$partner2Fav9 = get_post_meta($post->ID, 'partner2Fav9', true);
$partner2Fav10 = get_post_meta($post->ID, 'partner2Fav10', true);
$partner1FunFact1 = get_post_meta($post->ID, 'partner1FunFact1', true);
$partner2FunFact1 = get_post_meta($post->ID, 'partner2FunFact1', true);
$partner1FunFact2 = get_post_meta($post->ID, 'partner1FunFact2', true);
$partner2FunFact2 = get_post_meta($post->ID, 'partner2FunFact2', true);
$partner1FunFact3 = get_post_meta($post->ID, 'partner1FunFact3', true);
$partner2FunFact3 = get_post_meta($post->ID, 'partner2FunFact3', true);
$partner1FunFact4 = get_post_meta($post->ID, 'partner1FunFact4', true);
$partner2FunFact4 = get_post_meta($post->ID, 'partner2FunFact4', true);
$partner1FunFact5 = get_post_meta($post->ID, 'partner1FunFact5', true);
$partner2FunFact5 = get_post_meta($post->ID, 'partner2FunFact5', true);
$partner1FunFact6 = get_post_meta($post->ID, 'partner1FunFact6', true);
$partner2FunFact6 = get_post_meta($post->ID, 'partner2FunFact6', true);
$partner1FunFact7 = get_post_meta($post->ID, 'partner1FunFact7', true);
$partner2FunFact7 = get_post_meta($post->ID, 'partner2FunFact7', true);
$partner1FunFact8 = get_post_meta($post->ID, 'partner1FunFact8', true);
$partner2FunFact8 = get_post_meta($post->ID, 'partner2FunFact8', true);
$partner1FunFact9 = get_post_meta($post->ID, 'partner1FunFact9', true);
$partner2FunFact9 = get_post_meta($post->ID, 'partner2FunFact9', true);
$partner1FunFact10 = get_post_meta($post->ID, 'partner1FunFact10', true);
$partner2FunFact10 = get_post_meta($post->ID, 'partner2FunFact10', true);

if($childEthnicity1 != "" && $childEthnicity1 != "No preference") {
  $childEthnicity = $childEthnicity. ", " . $childEthnicity1;
}
if($childEthnicity2 != "" && $childEthnicity2 != "No preference") {
  $childEthnicity = $childEthnicity. ", " . $childEthnicity2;
}
?>

<img src="<?php echo $profileImage; ?>" width="980" height="350" alt="Our Personal Profile Image" title="Our Personal Profile Image"/>
<div style="margin:30px 0 0 0;">

<div style="border-style:solid;border-width:0 1px 0 0;border-color:#000;width:650px;float:left;">

<!-- About us table -->
<div class="topHeader" style="font-weight: bold;">
	<div style="position:absolute;width:100px;left:120px;"><?php echo $partner1FirstName; ?></div>
	<div style="position:absolute;width:100px;left:364px;"><?php echo $partner2FirstName; ?></div>
</div>
<table class="profileTable">
	<?php if ($partner1Age != "" && $partner2Age != "") : ?>
	<tr>
		<td class="column1">Age</td>
		<td class="column2"><?php echo $partner1Age; ?></td>
		<td class="column3"><?php echo $partner2Age; ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td class="column1">Education</td>
		<td class="column2"><?php echo $partner1Education; ?></td>
		<td class="column3"><?php echo $partner2Education; ?></td>
	</tr>
	<tr>
		<td class="column1">Profession</td>
		<td class="column2"><?php echo $partner1Profession; ?></td>
		<td class="column3"><?php echo $partner2Profession; ?></td>
	</tr>
	<tr>
		<td class="column1">Ethnicity</td>
		<td class="column2"><?php echo $partner1Ethnicity; ?></td>
		<td class="column3"><?php echo $partner2Ethnicity; ?></td>
	</tr>
	<tr>
		<td class="column1">Religion</td>
		<td class="column2"><?php echo $partner1Religion; ?></td>
		<td class="column3"><?php echo $partner2Religion; ?></td>
	</tr>
	<tr>
		<td class="column1">Astrological Sign</td>
		<td class="column2"><?php echo $partner1AstrologicalSign; ?></td>
		<td class="column3"><?php echo $partner2AstrologicalSign; ?></td>
	</tr>
	<tr>
		<td class="column1">Hobbies</td>
		<td class="column2"><?php echo $partner1Hobbies; ?></td>
		<td class="column3"><?php echo $partner2Hobbies; ?></td>
	</tr>
</table>

<!-- Favorites -->

<div class="topHeader" style="margin-top: 30px">
	<div style="position:absolute;width:180px;left:10px;"><?php if($isSingleParent) echo "My";  else echo "Our"; ?> Favorites</div>
</div>
<table class="profileTable">
	<tr>
		<td class="column1">Music</td>
		<td class="column2"><?php echo $partner1Fav1; ?></td>
		<td class="column3"><?php echo $partner2Fav1; ?></td>
	</tr>
	<tr>
		<td class="column1">Singer</td>
		<td class="column2"><?php echo $partner1Fav2; ?></td>
		<td class="column3"><?php echo $partner2Fav2; ?></td>
	</tr>
	<tr>
		<td class="column1">Song</td>
		<td class="column2"><?php echo $partner1Fav3; ?></td>
		<td class="column3"><?php echo $partner2Fav3; ?></td>
	</tr>
	<tr>
		<td class="column1">TV Show</td>
		<td class="column2"><?php echo $partner1Fav4; ?></td>
		<td class="column3"><?php echo $partner2Fav4; ?></td>
	</tr>
	<tr>
		<td class="column1">Movie</td>
		<td class="column2"><?php echo $partner1Fav5; ?></td>
		<td class="column3"><?php echo $partner2Fav5; ?></td>
	</tr>
	<tr>
		<td class="column1">Actor/Actress</td>
		<td class="column2"><?php echo $partner1Fav6; ?></td>
		<td class="column3"><?php echo $partner2Fav6; ?></td>
	</tr>
	<tr>
		<td class="column1">Animal</td>
		<td class="column2"><?php echo $partner1Fav7; ?></td>
		<td class="column3"><?php echo $partner2Fav7; ?></td>
	</tr>
	<tr>
		<td class="column1">Book</td>
		<td class="column2"><?php echo $partner1Fav8; ?></td>
		<td class="column3"><?php echo $partner2Fav8; ?></td>
	</tr>
	<tr>
		<td class="column1">Sport</td>
		<td class="column2"><?php echo $partner1Fav9; ?></td>
		<td class="column3"><?php echo $partner2Fav9; ?></td>
	</tr>
	<tr>
		<td class="column1">City</td>
		<td class="column2"><?php echo $partner1Fav10; ?></td>
		<td class="column3"><?php echo $partner2Fav10; ?></td>
	</tr>
</table>

<!-- Child we'd like to adopt table -->
<div class="topHeader" style="margin-top: 30px">
	<div style="position:absolute;width:180px;left:10px;">The child <?php if($isSingleParent) echo "I'd";  else echo "We'd"; ?> like to adopt</div>
</div>
<table class="profileTable">
	<tr>
		<td class="column1">Age</td>
		<td class="column2Long"><?php echo $childAge; ?></td>
	</tr>
	<tr>
		<td class="column1">Sex</td>
		<td class="column2Long"><?php echo $childGender; ?></td>
	</tr>
	<tr>
		<td class="column1">Ethnicity</td>
		<td class="column2Long"><?php echo $childEthnicity; ?></td>
	</tr>
	<tr>
		<td class="column1">Special Needs</td>
		<td class="column2Long"><?php echo $specialNeeds; ?></td>
	</tr>
	<tr>
		<td class="column1">Type of Adoption</td>
		<td class="column2Long"><?php echo $childAdoptionType; ?></td>
	</tr>
</table>

<!-- Our life together table -->
<div class="topHeader" style="margin-top: 30px;">
	<div style="position:absolute;width:180px;left:10px;"><?php if($isSingleParent) echo "My Life";  else echo "Our Life Together"; ?></div>
</div>
<table class="profileTable">
  <?php if (!$isSingleParent) : ?>
  <tr>
    <td class="column1">Years together</td>
    <td class="column2Long"><?php echo $yearsTogether; ?></td>
  </tr>
  <?php endif; ?>
	<tr>
		<td class="column1">Other Children</td>
		<td class="column2Long"><?php echo $otherChildren; ?></td>
	</tr>
	<tr>
		<td class="column1">Pets</td>
		<td class="column2Long"><?php echo $pets; ?></td>
	</tr>
</table>

<table class="profileTable" style="margin: 30px 0 1px 0;font-weight: bold;color: #3874A4;">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FirstName; ?></td>
		<td class="columnFunFact"><?php echo $partner2FirstName; ?></td>
	</tr>
</table>
<!-- Fun Fact 1 -->
<div class="topHeader">
	<div style="position:absolute;width:550px;left:10px;">The one thing you need to know about me is...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact1; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact1; ?></td>
	</tr>
</table>

<!-- Fun Fact 2 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">People describe me as...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact2; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact2; ?></td>
	</tr>
</table>

<!-- Fun Fact 3 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">I'm good at...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact3; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact3; ?></td>
	</tr>
</table>

<!-- Fun Fact 4 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">I'm not so good at...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact4; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact4; ?></td>
	</tr>
</table>

<!-- Fun Fact 5 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">The three things I can't live without are...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact5; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact5; ?></td>
	</tr>
</table>

<!-- Fun Fact 6 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">The person I look up to most, living or dead, is...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact6; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact6; ?></td>
	</tr>
</table>

<!-- Fun Fact 7 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">The best advice I ever received was...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact7; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact7; ?></td>
	</tr>
</table>

<!-- Fun Fact 8 -->
<?php if (!$isSingleParent) : ?>
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">The thing I most admire about my partner is...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact8; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact8; ?></td>
	</tr>
</table>
<?php endif; ?>

<!-- Fun Fact 9 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">The best thing about my family is...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact9; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact9; ?></td>
	</tr>
</table>

<!-- Fun Fact 10 -->
<div class="topHeader" style="margin-top: 10px">
	<div style="position:absolute;width:550px;left:10px;">The one thing the world needs more of is...</div>
</div>
<table class="profileTable">
	<tr>
		<td class="columnFunFact"><?php echo $partner1FunFact10; ?></td>
		<td class="columnFunFact"><?php echo $partner2FunFact10; ?></td>
	</tr>
</table>
</div>

<!-- Right Column -->
<div class="rightColumnProfile">
	<div class="quoteRightSide"><?php echo get_post_meta($post->ID, 'quoteLetterPage', true); ?></div>
</div>
<div style="clear: both;"></div>