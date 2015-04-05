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


$resultSet = $wpdb->get_results($query);

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
<div class="container"> 
 <div class="row">
 <div class="spacer"></div>
 <div class="topborder"></div>
 </div>
 </div> 
 
 <div class="container">
 <?php if ( function_exists( 'floating_social_bar' ) ) floating_social_bar( array( 'facebook' => true, 'twitter' => true, 'google' => true, 'pinterest' => true ) ); ?>
 <div class="spacer searchspacer"></div>
 </div>
 
 
<div class="container">
<div class="row">
<div class="col-md-12">
<?php echo apply_filters('the_content', get_page($post->ID)->post_content); ?>
<form class="form-inline" role="form">
<input type="hidden" name="view" value="<?php echo $_GET["view"]; ?>"/>
<div class="form-group">
<label class="searchlabels">Search By:</label>
</div>
  <div class="form-group">
    <label class="control-label col-md-3 searchlabels" for="exampleInputEmail2">Region</label>
    <div class="col-md-9">
    <select name="region" size="1" class="form-control">
            <option value="0" selected="true">No Preference</option>
            <option value="East Coast">East Coast</option>
            <option value="Midwest">Midwest</option>
            <option value="Northeast">Northeast</option>
            <option value="Northwest">Northwest</option>
            <option value="Southeast">Southeast</option>
            <option value="Southwest">Southwest</option>
            <option value="West Coast">West Coast</option>
          </select>
          </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 searchlabels">Ethnicity</label>
    <div class="col-md-9">
    <select name="ethnicity" size="1" class="form-control">
            <option value="0" selected="true">No Preference</option>
            <option value="African American">African American</option>
            <option value="Asian">Asian</option>
            <option value="Caucasian">Caucasian</option>
            <option value="Hispanic">Hispanic</option>
            <option value="Transracial">Transracial</option>
          </select>
          </div>

  </div>
   <div class="form-group">
    <label class="control-label col-md-3 searchlabels">Religion</label>
    <div class="col-md-9">
    <select name="religion" size="1" class="form-control">
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
          </div>

  </div>
  <div class="form-group"><button type="submit" class="btn btn-default btn-xs">Search</button>
  <button type="reset" class="btn btn-default btn-xs" onclick="clearSearch();">Clear</button></div>
</form>

</div>
</div>



<div class="clearfix"></div>
<div class="row">
<div class="col-sm-12 text-small"><small>View as:</small> 
<span class="pageViewButton2">
          <a href="?view=column<?php echo $searchParams; ?>">
            <?php if ($_GET["view"] == "" || $_GET["view"] == "column") { ?>
              <img src="<?php bloginfo('template_url'); ?>/icons/largethumbon.jpg" alt="column view on" />
            <?php
            }
            else {
              ?>
               <img src="<?php bloginfo('template_url'); ?>/icons/largethumb.jpg" alt="column view off" />
            <?php } ?>
          </a>
        </span>
        <span class="pageViewButton3">
          <a href="?view=thumb<?php echo $searchParams; ?>">
            <?php if ($_GET["view"] == "thumb") { ?>
              <img src="<?php bloginfo('template_url'); ?>/icons/smallthumbon.jpg" alt="thumb view on" />
            <?php
            }
            else {
              ?>
               <img src="<?php bloginfo('template_url'); ?>/icons/smallthumb.jpg" alt="thumb view off" />
            <?php } ?>
          </a>
        </span></div>
        <div class="spacer searchspacer"></div>
        <div class="searchspacer"></div>
</div>
</div>
 
<div class="container">
<div style="border-top: 1px solid #dddddd; padding-bottom: 10px;">

<!-- View As: Column -->
      
      <?php if ($_GET["view"] == "" || $_GET["view"] == "column") { ?>
        
          <?php $loopCounter = 0;
          if ($postIds) : foreach ($postIds as $postId): $postId;
            $loopCounter++;
            ?>
            <?php $post = get_post($postId->ID); ?>
             
            <?php if ($loopCounter % 4 == 1) { ?>
              <div class="col-lg-3 col-sm-6 find-a-family-item firstfamily">
                <div><a href="<?php echo get_page_link($post->ID); ?>"><img width="190" height="180" src="<?php echo get_post_meta($post->ID, 'familyColumnImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a></div>
                <a class="parentsearchtitle" style="font-size:14px;" href="<?php echo get_page_link($post->ID); ?>"><?php echo $post->post_title; ?>, <?php echo get_post_meta($post->ID, 'state', true); ?></a>

                <div><?php echo get_post_meta($post->ID, 'familyShortDesc', true); ?></div>
              </div>
            <?php } ?>

            <?php if ($loopCounter % 4 == 3 || $loopCounter % 4 == 2) { ?>
              <div class="col-lg-3 col-sm-6 find-a-family-item">
                <div><a href="<?php echo get_page_link($post->ID); ?>"><img width="190" height="180" src="<?php echo get_post_meta($post->ID, 'familyColumnImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a></div>
                <a class="parentsearchtitle" style="font-size:14px;" href="<?php echo get_page_link($post->ID); ?>"><?php echo $post->post_title; ?>, <?php echo get_post_meta($post->ID, 'state', true); ?></a>

                <div><?php echo get_post_meta($post->ID, 'familyShortDesc', true); ?></div>
                
              </div>
              
            <?php } ?>

            <?php if ($loopCounter % 4 == 0) { ?>
              <div class="col-lg-3 col-sm-6 find-a-family-item lastfamily">
                <div><a href="<?php echo get_page_link($post->ID); ?>"><img width="190" height="180" src="<?php echo get_post_meta($post->ID, 'familyColumnImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a></div>
                <a class="parentsearchtitle" style="font-size:14px;" href="<?php echo get_page_link($post->ID); ?>"><?php echo $post->post_title; ?>, <?php echo get_post_meta($post->ID, 'state', true); ?></a>

                <div><?php echo get_post_meta($post->ID, 'familyShortDesc', true); ?></div>
              </div>
            <?php } ?>

          <?php endforeach; endif; ?>
          
       
      <?php } ?>

</div>
</div>



<div class="container">
<div>
<?php if ($_GET["view"] == "thumb") { ?>
        <div>
          <?php $loopCounter = 0;
          if ($postIds) : foreach ($postIds as $postId): $postId;
            $loopCounter++;
            ?>
            <?php $post = get_post($postId->ID); ?>

            <?php if ($loopCounter % 6 != 0) { ?>
              <div class="col-md-2 col-sm-3 col-xs-6 col-1-8 find-a-family-thumb">
                <a href="<?php echo get_page_link($post->ID); ?>"><img width="103" height="99" src="<?php echo get_post_meta($post->ID, 'familyThumbImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a>

                <div class="familythumbtext"><?php echo $post->post_title; ?>,</div>
                <div class="familythumbtext"><?php echo get_post_meta($post->ID, 'state', true); ?></div>
              </div>
            <?php } ?>

            <?php if ($loopCounter % 6 == 0) { ?>
              <div class="col-md-2 col-sm-3 col-xs-6 col-1-8 find-a-family-thumb">
                <a href="<?php echo get_page_link($post->ID); ?>"><img width="103" height="99" src="<?php echo get_post_meta($post->ID, 'familyThumbImageNew', true); ?>" alt="<?php echo $post->post_title; ?>"></a>

                <div class="familythumbtext"><?php echo $post->post_title; ?>,</div>
                <div class="familythumbtext"><?php echo get_post_meta($post->ID, 'state', true); ?></div>
              </div>
              <div style="clear: both;"></div>
            <?php } ?>

          <?php endforeach; endif; ?>
          <div style="clear: both;"></div>
        </div>
      <?php } ?>

</div>
</div>

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



<?php get_footer(); ?>