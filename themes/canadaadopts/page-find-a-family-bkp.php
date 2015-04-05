<?php
/*
Template Name: Find a Family
*/
?>

<?php
// Set Session url to current URL for use on parent registry pages.
$_SESSION['waitingParentRegistryUrl'] = 'hello world';

// Search Query
include_once('wp-load.php');
include_once('wp-includes/wp-db.php');

// Escape SQL to prevent SQL injection
$formEthnicity = mysql_real_escape_string($_REQUEST["ethnicity"]);
$formRegion = mysql_real_escape_string($_REQUEST["region"]);
$formReligion = mysql_real_escape_string($_REQUEST["religion"]);

if (empty($formEthnicity)) {
  $formEthnicity = '0';
}
if (empty($formRegion)) {
  $formRegion = '0';
}
if (empty($formReligion)) {
  $formReligion = '0';
}

global $blog_id;

$db_prefix = 'wp_';

if($blog_id > 1)
	$db_prefix .= $blog_id . '_';

$searchParams = "&region=$formRegion&ethnicity=$formEthnicity&religion=$formReligion";

$query = "
select
distinct p.ID, pm10.meta_value

from
" . $db_prefix . "posts p
join " . $db_prefix . "postmeta pm1 on p.ID = pm1.post_id and pm1.meta_key = 'isSearchable'
left join " . $db_prefix . "postmeta pm10 on p.ID = pm10.post_id and pm10.meta_key = 'isPremium'
";

if (!empty($formEthnicity) && $formEthnicity != '0') {
  $query .= "
left join " . $db_prefix . "postmeta pm2 on p.ID = pm2.post_id and pm2.meta_key = 'partner1Ethnicity'
left join " . $db_prefix . "postmeta pm3 on p.ID = pm3.post_id and pm3.meta_key = 'partner2Ethnicity'";
}
if (!empty($formReligion) && $formReligion != '0') {
  $query .= "
left join " . $db_prefix . "postmeta pm4 on p.ID = pm4.post_id and pm4.meta_key = 'partner1Religion'
left join " . $db_prefix . "postmeta pm5 on p.ID = pm5.post_id and pm5.meta_key = 'partner2Religion'";
}
if (!empty($formRegion) && $formRegion != '0') {
  $query .= "
left join " . $db_prefix . "postmeta pm6 on p.ID = pm6.post_id and pm6.meta_key = 'region'";
}

$query .= "
where
p.post_status = 'publish' and p.post_type = 'page'
and (pm1.meta_key = 'isSearchable' and pm1.meta_value = 'True')";

if (!empty($formEthnicity) && $formEthnicity != '0') {
  $query .= "
and ((pm2.meta_key = 'partner1Ethnicity' and pm2.meta_value = '$formEthnicity') or (pm3.meta_key = 'partner2Ethnicity' and pm3.meta_value = '$formEthnicity'))";
}
if (!empty($formReligion) && $formReligion != '0') {
  $query .= "
and ((pm4.meta_key = 'partner1Religion' and pm4.meta_value = '$formReligion') or (pm5.meta_key = 'partner2Religion' and pm5.meta_value = '$formReligion'))";
}
if (!empty($formRegion) && $formRegion != '0') {
  $query .= "
and (pm6.meta_key = 'region' and pm6.meta_value = '$formRegion')";
}

$query .= "
order by p.ID desc";

echo $query;

$resultSet = $wpdb->get_results($query);
echo 'Result set = '  . count($resultSet);
shuffle($resultSet);


$postIds = array();

foreach ($resultSet as $postId) {
  if ($postId->meta_value == 'True') {
    array_push($postIds, $postId);
  }
}

foreach ($resultSet as $postId) {
  if ($postId->meta_value != 'True') {
    array_push($postIds, $postId);
  }
}

?>

<?php get_header(); ?>


  <div id="content">

    <!--  main column -->
    <div style="width:980px;margin:10px 0 20px 0; float:left;">

      <?php echo apply_filters('the_content', get_page($post->ID)->post_content); ?>

      <div style="margin-top: 25px;">
        <form>
          <input type="hidden" name="view" value="<?php echo $_GET["view"]; ?>"/>

          <div style="float: left; font-size: 18px; color:#005281; padding-right: 15px;">Search By:</div>

          <div style="float: left; font-size: 18px; color:#005281; padding-right: 10px;">Region</div>
          <select name="region" size="1" style="width: 130px; float: left;margin-right: 15px;">
            <option value="0" selected="true">No Preference</option>
            <option value="East Coast">East Coast</option>
            <option value="Midwest">Midwest</option>
            <option value="Northeast">Northeast</option>
            <option value="Northwest">Northwest</option>
            <option value="Southeast">Southeast</option>
            <option value="Southwest">Southwest</option>
            <option value="West Coast">West Coast</option>
          </select>

          <div style="float: left; font-size: 18px; color:#005281; padding-right: 10px;">Ethnicity</div>
          <select name="ethnicity" size="1" style="width: 130px;float: left;margin-right: 15px;">
            <option value="0" selected="true">No Preference</option>
            <option value="African American">African American</option>
            <option value="Asian">Asian</option>
            <option value="Caucasian">Caucasian</option>
            <option value="Hispanic">Hispanic</option>
            <option value="Transracial">Transracial</option>
          </select>

          <div style="float: left; font-size: 18px; color:#005281; padding-right: 10px;">Religion</div>
          <select name="religion" size="1" style="width: 130px;float: left;margin-right: 20px;">
            <option value="0" selected="true">No Preference</option>
            <option value="Agnostics">Agnostic</option>
            <option value="Athiest">Athiest</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Catholic">Catholic</option>
            <option value="Christian">Christian</option>
            <option value="Jewish">Jewish</option>
            <option value="Lutheran">Lutheran</option>
            <option value="Spiritual">Spiritual</option>
          </select>
          <input type="submit" value="Search" style="float: left;padding-right: 10px;height: 20px;">
          <input type="button" value="Clear" onclick="clearSearch();" style="float: left; height: 20px;">
        </form>
      </div>

      <div style="clear: both;"></div>
      
      
      
      
      <!--testcode -->
      
      <!-- test code end -->
      
      
      
      
      
      
      

      <!-- View as buttons -->
      <div style="height:17px;margin-top: 15px;">
        <div style="float:left; font-size:10px; padding-right: 10px;">View As:</div>
        <div class="pageViewButton2">
          <a href="?view=column<?php echo $searchParams; ?>">
            <?php if ($_GET["view"] == "" || $_GET["view"] == "column") { ?>
              <img src="/wp-content/themes/americaadoptstwentyten/images/icon_reg_ColumnOn.gif" alt="column view on"/>
            <?php
            }
            else {
              ?>
              <img src="/wp-content/themes/americaadoptstwentyten/images/icon_reg_ColumnOff.gif" alt="column view off"/>
            <?php } ?>
          </a>
        </div>
        <div class="pageViewButton3">
          <a href="?view=thumb<?php echo $searchParams; ?>">
            <?php if ($_GET["view"] == "thumb") { ?>
              <img src="/wp-content/themes/americaadoptstwentyten/images/icon_reg_ThumsOn.gif" alt="thumbs view on"/>
            <?php
            }
            else {
              ?>
              <img src="/wp-content/themes/americaadoptstwentyten/images/icon_reg_ThumsOff.gif" alt="thumbs view off"/>
            <?php } ?>
          </a>
        </div>
      </div>

      <div style="clear: both;"></div>

      <!-- View As: Column -->
      
      <?php if ($_GET["view"] == "" || $_GET["view"] == "column") { ?>
        <div style="width: 980px; margin-top: 20px;">
          <?php $loopCounter = 0;
          if ($postIds) : foreach ($postIds as $postId): $postId;
            $loopCounter++;
            ?>
            <?php $post = get_post($postId->ID); ?>
             
            <?php if ($loopCounter % 4 == 1) { ?>
              <div style="float: left; width: 190px;border-width:1px 0 0 0;border-color:#CCCCCC;border-style:solid;padding: 12px 27px 0 27px;height: 320px;">
                <div style="width: 190px; height: 180px; margin-bottom: 10px;"><a href="<?php echo get_page_link($post->ID); ?>"><img width="190" height="180" src="<?php echo get_post_meta($post->ID, 'familyColumnImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a></div>
                <a style="font-size:14px;width: 190px;" href="<?php echo get_page_link($post->ID); ?>"><?php echo $post->post_title; ?>, <?php echo get_post_meta($post->ID, 'state', true); ?></a>

                <div style="width: 190px;font-size:12px;"><?php echo get_post_meta($post->ID, 'familyShortDesc', true); ?></div>
              </div>
            <?php } ?>

            <?php if ($loopCounter % 4 == 3 || $loopCounter % 4 == 2) { ?>
              <div style="float: left; width: 190px;border-width:1px 0 0 1px;border-color:#CCCCCC;border-style:solid; padding: 12px 27px 0 27px;height: 320px;">
                <div style="width: 190px; height: 180px; margin-bottom: 10px;"><a href="<?php echo get_page_link($post->ID); ?>"><img width="190" height="180" src="<?php echo get_post_meta($post->ID, 'familyColumnImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a></div>
                <a style="font-size:14px;width: 190px;" href="<?php echo get_page_link($post->ID); ?>"><?php echo $post->post_title; ?>, <?php echo get_post_meta($post->ID, 'state', true); ?></a>

                <div style="width: 190px;font-size:12px;"><?php echo get_post_meta($post->ID, 'familyShortDesc', true); ?></div>
              </div>
            <?php } ?>

            <?php if ($loopCounter % 4 == 0) { ?>
              <div style="float: left; width: 190px;border-width:1px 0 0 1px;border-color:#CCCCCC;border-style:solid;padding: 12px 27px 0 27px;height: 320px;">
                <div style="width: 190px; height: 180px; margin-bottom: 10px;"><a href="<?php echo get_page_link($post->ID); ?>"><img width="190" height="180" src="<?php echo get_post_meta($post->ID, 'familyColumnImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a></div>
                <a style="font-size:14px;width: 190px;" href="<?php echo get_page_link($post->ID); ?>"><?php echo $post->post_title; ?>, <?php echo get_post_meta($post->ID, 'state', true); ?></a>

                <div style="width: 190px;font-size:12px;"><?php echo get_post_meta($post->ID, 'familyShortDesc', true); ?></div>
              </div>
            <?php } ?>

          <?php endforeach; endif; ?>
          <div style="clear: both;"></div>
        </div>
      <?php } ?>


      <!-- View As: Thumb -->
      <?php if ($_GET["view"] == "thumb") { ?>
        <div style="width: 980px; margin-top: 10px;">
          <?php $loopCounter = 0;
          if ($postIds) : foreach ($postIds as $postId): $postId;
            $loopCounter++;
            ?>
            <?php $post = get_post($postId->ID); ?>

            <?php if ($loopCounter % 8 != 0) { ?>
              <div style="float: left; width: 103px;padding: 20px 22px 0 0;height: 130px;font-size: 10px;">
                <a href="<?php echo get_page_link($post->ID); ?>"><img width="103" height="99" src="<?php echo get_post_meta($post->ID, 'familyThumbImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a>

                <div style="width: 103px;height: 13px;"><?php echo $post->post_title; ?>,</div>
                <div style="width: 103px;"><?php echo get_post_meta($post->ID, 'state', true); ?></div>
              </div>
            <?php } ?>

            <?php if ($loopCounter % 8 == 0) { ?>
              <div style="float: left; width: 103px;padding: 20px 0 0 0;height: 130px;font-size: 10px;">
                <a href="<?php echo get_page_link($post->ID); ?>"><img width="103" height="99" src="<?php echo get_post_meta($post->ID, 'familyThumbImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a>

                <div style="width: 103px;height: 13px;"><?php echo $post->post_title; ?>,</div>
                <div style="width: 103px;"><?php echo get_post_meta($post->ID, 'state', true); ?></div>
              </div>
              <div style="clear: both;"></div>
            <?php } ?>

          <?php endforeach; endif; ?>
          <div style="clear: both;"></div>
        </div>
      <?php } ?>


    </div>
    <!-- end main column -->


    <script type="text/javascript">
      var religion = '<?php echo $formReligion; ?>';
      if (religion != '0' && religion != '') {
        jQuery(':input[name=religion]').val(religion);
      }

      var ethnicity = '<?php echo $formEthnicity; ?>';
      if (ethnicity != '0' && ethnicity != '') {
        jQuery(':input[name=ethnicity]').val(ethnicity);
      }

      var region = '<?php echo $formRegion; ?>';
      if (region != '0' && region != '') {
        jQuery(':input[name=region]').val(region);
      }

      function clearSearch() {
        jQuery(':input[name=ethnicity]').val(0);
        jQuery(':input[name=religion]').val(0);
        jQuery(':input[name=region]').val(0);
        return false;
      }
    </script>

  </div>

  <!--The main column ends-->

<?php get_footer(); ?>