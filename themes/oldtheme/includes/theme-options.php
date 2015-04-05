<?php
$settings = get_current_theme().'-options';

$defaults = array( // defaults
		'feedburner' => '',
		'side_feedburner' => 'yes',
		'home_top' => 1,
		'video' => 'No',
		'hp_mid_1' => 1,
		'hp_mid_2' => 1,
		'hp_mid_3' => 1,
		'mid_thumb_width' => 100,
		'mid_thumb_height' => 100,
		'hp_bottom' => 1,
		'hp_tab_title' => 'Tabbed Section',
		'hp_tab_cat' => 1,
		'hp_tab_num' => 3,
		'hp_tab_thumb_width' => 190,
		'hp_tab_thumb_height' => 260,
		'blog_cat' => 1,
		'blog_cat_num' => 5,
		'tracking' => '<!--paste tracking code here-->' // <-- no comma after the last option
);

//	push the defaults to the options database,
//	if options don't yet exist there.
add_option($settings, $defaults, '', 'yes');

//	this function registers our settings in the db
add_action('admin_init', 'register_theme_settings');
function register_theme_settings() {
	global $settings;
	register_setting($settings, $settings);
}
//	this function adds the settings page to the menu
add_action('admin_menu', 'add_theme_options_menu');
function add_theme_options_menu() {
	add_menu_page("Organic Themes", "Organic Themes", 'edit_themes', basename(__FILE__), 'theme_settings_admin', "http://www.organicthemes.com/optionsicon.ico");
}

function theme_settings_admin() { ?>
<?php theme_options_css_js(); ?>
<div class="wrap">
<?php
	// display the proper notification if Saved/Reset
	global $settings, $defaults;
	if(ot_option('reset')) {
		echo '<div class="updated fade" id="message"><p>Theme Options <strong>RESET TO DEFAULTS</strong></p></div>';
		update_option($settings, $defaults);
	} elseif($_REQUEST['updated'] == 'true') {
		echo '<div class="updated fade" id="message"><p>Theme Options <strong>SAVED</strong></p></div>';
	}
	// display icon next to page title
	screen_icon('options-general');
?>
	<h2><?php echo get_current_theme() . ' '; _e('Theme Options'); ?></h2>
	<form method="post" action="options.php">
	<?php settings_fields($settings); // important! ?>
	
	<!--left column-->
	<div class="metabox-holder mbleft">
        
        <div class="postbox">
        <h3>Organic Themes</h3>
            <div class="inside">
                <p>Stumped? Visit <a target="_blank" href="http://www.organicthemes.com/">Organic Support</a> for expert solutions. Check back with us often for great new stuff at <a target="_blank" href="http://www.organicthemes.com/">Organic Themes</a>!</p>
            </div>
        </div>
        
        <div class="postbox">
            <h3><?php _e("RSS Email Subscription", 'organicthemes'); ?></h3>
            <div class="inside">
                <p><?php _e("Enter your FeedBurner ID:", 'modthemes'); ?><br />
				<input type="text" name="<?php echo $settings; ?>[feedburner]" value="<?php echo ot_option('feedburner'); ?>" size="30" /></p>
                <p><?php _e("Include subscription area in sidebar?", 'modthemes'); ?><br />
				<select name="<?php echo $settings; ?>[side_feedburner]">
					<option style="padding-right:10px;" value="Yes" <?php selected('Yes', ot_option('side_feedburner')); ?>><?php _e("Yes", 'modthemes'); ?></option>
					<option style="padding-right:10px;" value="No" <?php selected('No', ot_option('side_feedburner')); ?>><?php _e("No", 'modthemes'); ?></option>
				</select></p>
            </div>
        </div>
        
        <div class="postbox">
		<h3><?php _e("Blog Page Template", 'organicthemes'); ?></h3>
			<div class="inside">
				<p><?php _e("Select the category you want displayed", 'organicthemes'); ?>:<br />
    			<?php wp_dropdown_categories(array('selected' => ot_option('blog_cat'), 'name' => $settings.'[blog_cat]', 'orderby' => 'Name' , 'hierarchical' => 1, 'show_option_all' => __("All Categories", 'organicthemes'), 'hide_empty' => '0' )); ?></p>
				
				<p><?php _e("Number of posts to show on the page", 'organicthemes'); ?>:<br />
				<input type="text" name="<?php echo $settings; ?>[blog_cat_num]" value="<?php echo ot_option('blog_cat_num'); ?>" size="3" /></p>
			</div>
		</div>
        
        <div class="postbox">
		<h3><?php _e("Analytics Code", 'organicthemes'); ?></h3>
			<div class="inside">
				<p>If you use a service such as <a href="http://www.google.com/analytics/">Google Analytics</a> to track analytics on your site, paste the code below (it will be inserted into the footer):</p>
				<p>
				<textarea name="<?php echo $settings; ?>[tracking]" cols=30 rows=5><?php echo stripslashes(ot_option('tracking')); ?></textarea>
				</p>
			</div>
		</div>
        
	</div>
	<!--end left column-->
	
	<!--right column-->
    
	<div class="metabox-holder mbright">
        
		<div class="postbox">
            <h3><?php _e("Homepage Top", 'organicthemes'); ?></h3>
            <div class="inside">
                <p><?php _e("Select which <strong>page</strong> you want displayed on the top section of the homepage:", 'organicthemes'); ?><br />
                <?php wp_dropdown_pages(array('selected' => ot_option('home_top'), 'name' => $settings.'[home_top]' )); ?></p>
                
                <p><?php _e("Replace the photo on the homepage with a video?", 'organicthemes'); ?><br />
                <select name="<?php echo $settings; ?>[video]">
                    <option style="padding-right:10px;" value="Yes" <?php selected('Yes', ot_option('video')); ?>><?php _e("Yes", 'organicthemes'); ?></option>
                    <option style="padding-right:10px;" value="No" <?php selected('No', ot_option('video')); ?>><?php _e("No", 'organicthemes'); ?></option>
                </select></p>
                
                <p><?php _e("If you select yes, then you will need to add your embedded video code just below the standard text editor box while creating a page.", 'organicthemes'); ?><br /><strong><small>(<?php _e("Recommended video size is 650px wide x 330px high", 'organicthemes'); ?>)</small></strong></p>
            </div>
        </div>
        
        <div class="postbox">
            <h3><?php _e("Homepage Middle", 'organicthemes'); ?></h3>
            <div class="inside">
                <p><?php _e("Select which <strong>page</strong> to display on the <strong>left</strong>:", 'organicthemes'); ?><br />
                <?php wp_dropdown_pages(array('selected' => ot_option('hp_mid_1'), 'name' => $settings.'[hp_mid_1]' )); ?></p>
                <p><?php _e("Select which <strong>page</strong> to display on the <strong>middle</strong>:", 'organicthemes'); ?><br />
                <?php wp_dropdown_pages(array('selected' => ot_option('hp_mid_2'), 'name' => $settings.'[hp_mid_2]' )); ?></p>
                <p><?php _e("Select which <strong>page</strong> to display on the <strong>right</strong>:", 'organicthemes'); ?><br />
                <?php wp_dropdown_pages(array('selected' => ot_option('hp_mid_3'), 'name' => $settings.'[hp_mid_3]' )); ?></p>
                
                <p><?php _e("Thumbnail dimensions", 'organicthemes'); ?> (<?php _e("Width x Height", 'organicthemes'); ?>)<br />
				<input type="text" name="<?php echo $settings; ?>[mid_thumb_width]" value="<?php echo ot_option('mid_thumb_width'); ?>" size="3" /> x <input type="text" name="<?php echo $settings; ?>[mid_thumb_height]" value="<?php echo ot_option('mid_thumb_height'); ?>" size="3" /></p>
            </div>
        </div>
        
        <div class="postbox">
            <h3><?php _e("Homepage Bottom", 'organicthemes'); ?></h3>
            <div class="inside">
                <p><?php _e("Select which <strong>page</strong> to display:", 'organicthemes'); ?><br />
                <?php wp_dropdown_pages(array('selected' => ot_option('hp_bottom'), 'name' => $settings.'[hp_bottom]' )); ?></p>
            </div>
        </div>
        
        <div class="postbox">
            <h3><?php _e("Homepage Tabbed Area", 'organicthemes'); ?></h3>
            <div class="inside">
                <p><?php _e("Enter a title for this section:", 'modthemes'); ?><br />
				<input type="text" name="<?php echo $settings; ?>[hp_tab_title]" value="<?php echo ot_option('hp_tab_title'); ?>" size="30" /></p>
                <p><?php _e("Select the category you want displayed", 'organicthemes'); ?>:<br />
    			<?php wp_dropdown_categories(array('selected' => ot_option('hp_tab_cat'), 'name' => $settings.'[hp_tab_cat]', 'orderby' => 'Name' , 'hierarchical' => 1, 'show_option_all' => __("All Categories", 'organicthemes'), 'hide_empty' => '0' )); ?></p>
                
                <p><?php _e("Number of Posts to Show", 'organicthemes'); ?>:<br />
				<input type="text" name="<?php echo $settings; ?>[hp_tab_num]" value="<?php echo ot_option('hp_tab_num'); ?>" size="3" /></p>
                
                <p><?php _e("Thumbnail dimensions", 'organicthemes'); ?> (<?php _e("Width x Height", 'organicthemes'); ?>)<br />
				<input type="text" name="<?php echo $settings; ?>[hp_tab_thumb_width]" value="<?php echo ot_option('hp_tab_thumb_width'); ?>" size="3" /> x <input type="text" name="<?php echo $settings; ?>[hp_tab_thumb_height]" value="<?php echo ot_option('hp_tab_thumb_height'); ?>" size="3" /></p>
            </div>
        </div>

		<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'organicthemes') ?>" />
		<input type="submit" class="button-highlighted" name="<?php echo $settings; ?>[reset]" value="<?php _e('Reset Settings', 'organicthemes'); ?>" />
		</p>

	</div>
	<!--end right column-->
	
	</form>

</div><!--end .wrap-->
<?php }

// add CSS and JS if necessary
function theme_options_css_js() {
echo <<<CSS

<style type="text/css">
	.metabox-holder { 
		float: left;
		margin: 0; padding: 0 10px 0 0;
	}
	.metabox-holder { 
		float: left;
		margin: 0; padding: 0 10px 0 0;
	}
	.metabox-holder .postbox .inside {
		padding: 0 10px;
	}
	.mbleft {
		width: 300px;
	}
	.mbright {
		width: 480px;
	}
	.catchecklist,
	.pagechecklist {
		list-style-type: none;
		margin: 0; padding: 0 0 10px 0;
	}
	.catchecklist li,
	.pagechecklist li {
		margin: 0; padding: 0;
	}
	.catchecklist ul {
		margin: 0; padding: 0 0 0 15px;
	}
	select {
		margin-top: 5px;
	}
	input {
		margin-top: 5px;
	}
	input[type="checkbox"], input[type="radio"] {
		margin-top: 1px;
	}
</style>

CSS;

echo <<<JS

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".fade").fadeIn(1000).fadeTo(1000, 1).fadeOut(1000);
});
</script>

JS;
}
?>